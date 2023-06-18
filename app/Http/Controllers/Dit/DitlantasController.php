<?php

namespace App\Http\Controllers\Dit;

use App\Http\Controllers\Controller;
use App\Http\Requests\DitlantasRequest;
use App\Models\Category;
use App\Models\DaftarBarang;
use App\Services\PrintDatabaseService;
use Illuminate\Support\Facades\Storage;

class DitlantasController extends Controller
{
    public function __construct()
    {
        $this->middleware('role:Administrator|USER DITLANTAS');
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ditlantas = DaftarBarang::query()
            ->select('id', 'nama_kendaraan', 'identitas_kendaraan', 'no_surat_tilang')
            ->where('unit', '=', 'DITLANTAS')
            ->orderBy('created_at', 'desc')
            ->get();

        return view('ditlantas.index', compact('ditlantas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $kategori = Category::all();

        return view('ditlantas.create', compact('kategori'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(DitlantasRequest $request)
    {
        $data = $request->validated();

        $data['gambar1'] = $request->file('gambar1')->store('ditlantas');
        $data['gambar2'] = $request->file('gambar2')->store('ditlantas');
        $data['gambar3'] = $request->file('gambar3')->store('ditlantas');

        DaftarBarang::create($data);

        return to_route('ditlantas.index')->with('message', 'Data Ditlantas berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(DaftarBarang $ditlantas)
    {
        $ditlantas->load('category');

        return view('ditlantas.show', compact('ditlantas'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(DaftarBarang $ditlantas)
    {
        $kategori = Category::all();

        return view('ditlantas.edit', compact('ditlantas', 'kategori'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(DitlantasRequest $request, DaftarBarang $ditlantas)
    {
        $data = $request->validated();

        if ($request->hasFile('gambar1')) {
            Storage::delete($ditlantas->gambar1);

            $data['gambar1'] = $request->file('gambar1')->store('ditlantas');
        } else if ($request->hasFile('gambar2')) {
            Storage::delete($ditlantas->gambar2);

            $data['gambar2'] = $request->file('gambar2')->store('ditlantas');
        } else if ($request->hasFile('gambar3')) {
            Storage::delete($ditlantas->gambar3);

            $data['gambar3'] = $request->file('gambar3')->store('ditlantas');
        }

        $ditlantas->update($data);

        return to_route('ditlantas.index')->with('message', 'Data Ditlantas berhasil diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(DaftarBarang $ditlantas)
    {
        $ditlantas->delete();

        Storage::delete($ditlantas->gambar1);
        $ditlantas->gambar2 ? Storage::delete($ditlantas->gambar2) : null;
        $ditlantas->gambar3 ? Storage::delete($ditlantas->gambar3) : null;

        return back()->with('message', 'Data DaftarBarang berhasil dihapus!');
    }

    public function print()
    {
        return (new PrintDatabaseService())->print($unit = "DITLANTAS", $view = "ditlantas");
    }
}
