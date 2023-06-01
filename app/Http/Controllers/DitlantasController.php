<?php

namespace App\Http\Controllers;

use App\Models\Ditlantas;
use Illuminate\Http\Request;
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
        $ditlantas = Ditlantas::query()
            ->select('id', 'nama_kendaraan', 'identitas_kendaraan', 'no_surat_tilang')
            ->orderBy('created_at', 'desc')
            ->get();

        return view('ditlantas.index', compact('ditlantas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('ditlantas.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'barang_temuan' => 'required|string',
            'nama_kendaraan' => 'required|string',
            'identitas_kendaraan' => 'required|string',
            'no_surat_tilang' => 'required|string',
            'penyidik' => 'required|string',
            'kondisi' => 'required|string',
            'nama_pemilik' => 'required|string',
            'keterangan' => 'required|string',
            'gambar1' => 'required|file|mimes:jpg,jpeg,png|max:2048',
            'gambar2' => 'nullable|file|mimes:jpg,jpeg,png|max:2048',
            'gambar3' => 'nullable|file|mimes:jpg,jpeg,png|max:2048',
        ]);

        $data['gambar1'] = $request->file('gambar1')->store('ditlantas');
        $data['gambar2'] = $request->file('gambar2') ? $request->file('gambar2')->store('ditlantas') : null;
        $data['gambar3'] = $request->file('gambar3') ? $request->file('gambar3')->store('ditlantas') : null;

        Ditlantas::create($data);

        return to_route('ditlantas.index')->with('message', 'Data Ditlantas berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Ditlantas $ditlantas)
    {
        return view('ditlantas.show', compact('ditlantas'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Ditlantas $ditlantas)
    {
        return view('ditlantas.edit', compact('ditlantas'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Ditlantas $ditlantas)
    {
        $data = $request->validate([
            'barang_temuan' => 'required|string',
            'nama_kendaraan' => 'required|string',
            'identitas_kendaraan' => 'required|string',
            'no_surat_tilang' => 'required|string',
            'penyidik' => 'required|string',
            'kondisi' => 'required|string',
            'nama_pemilik' => 'required|string',
            'keterangan' => 'required|string',
            'gambar1' => 'nullable|file|mimes:jpg,jpeg,png|max:2048',
            'gambar2' => 'nullable|file|mimes:jpg,jpeg,png|max:2048',
            'gambar3' => 'nullable|file|mimes:jpg,jpeg,png|max:2048',
        ]);

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
    public function destroy(Ditlantas $ditlantas)
    {
        $ditlantas->delete();

        Storage::delete($ditlantas->gambar1);
        $ditlantas->gambar2 ? Storage::delete($ditlantas->gambar2) : null;
        $ditlantas->gambar3 ? Storage::delete($ditlantas->gambar3) : null;

        return back()->with('message', 'Data Ditlantas berhasil dihapus!');
    }
}
