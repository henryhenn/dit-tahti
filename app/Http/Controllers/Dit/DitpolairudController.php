<?php

namespace App\Http\Controllers\Dit;

use App\Http\Controllers\Controller;
use App\Http\Requests\DitpolairudRequest;
use App\Models\Category;
use App\Models\DaftarBarang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DitpolairudController extends Controller
{
    public function __construct()
    {
        $this->middleware(['role:Administrator|USER DITPOLAIRUD']);
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ditpolairud = DaftarBarang::query()
            ->select('id', 'nama_barang_bukti', 'jumlah', 'no_laporan_polisi')
            ->where('unit', '=', 'DITPOLAIRUD')
            ->orderBy('nama_barang_bukti', 'asc')
            ->get();

        return view('ditpolairud.index', compact('ditpolairud'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $kategori = Category::all();

        return view('ditpolairud.create', compact('kategori'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(DitpolairudRequest $request)
    {
        $data = $request->validated();

        $data['gambar1'] = $request->file('gambar1')->store('ditpolairud');
        $data['gambar2'] = $request->file('gambar2') ? $request->file('gambar2')->store('ditpolairud') : null;
        $data['gambar3'] = $request->file('gambar3') ? $request->file('gambar3')->store('ditpolairud') : null;

        DaftarBarang::create($data);

        return to_route('ditpolairud.index')->with('message', 'Data Ditpolairud berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(DaftarBarang $ditpolairud)
    {
        $ditpolairud->load('category');

        return view('ditpolairud.show', compact('ditpolairud'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(DaftarBarang $ditpolairud)
    {
        $kategori = Category::all();

        return view('ditpolairud.edit', compact('ditpolairud', 'kategori'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(DitpolairudRequest $request, DaftarBarang $ditpolairud)
    {
        $data = $request->validated();

        if ($request->hasFile('gambar1')) {
            Storage::delete($ditpolairud->gambar1);

            $data['gambar1'] = $request->file('gambar1')->store('ditpolairud');
        } else if ($request->hasFile('gambar2')) {
            Storage::delete($ditpolairud->gambar2);

            $data['gambar2'] = $request->file('gambar2')->store('ditpolairud');
        } else if ($request->hasFile('gambar3')) {
            Storage::delete($ditpolairud->gambar3);

            $data['gambar3'] = $request->file('gambar3')->store('ditpolairud');
        }

        $ditpolairud->update($data);

        return to_route('ditpolairud.index')->with('message', 'Data Ditpolairud berhasil diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(DaftarBarang $ditpolairud)
    {
        $ditpolairud->delete();

        Storage::delete($ditpolairud->gambar1);
        Storage::delete($ditpolairud->gambar2);
        Storage::delete($ditpolairud->gambar3);

        return back()->with('message', 'Data Ditpolairud berhasil dihapus!');
    }
}
