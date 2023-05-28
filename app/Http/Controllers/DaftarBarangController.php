<?php

namespace App\Http\Controllers;

use App\Models\DaftarBarang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DaftarBarangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $barang = DaftarBarang::query()
            ->latest()
            ->paginate(10);
        return view('daftar-barang.index', compact('barang'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('daftar-barang.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'daftar_barang_temuan' => 'required|string',
            'dit' => 'required|string',
            'petugas_penyerah' => 'required|string',
            'petugas_penerima' => 'required|string',
            'nomor_laporan_polisi' => 'required|numeric',
            'nomor_register_bb' => 'required|numeric',
            'nomor_label_barang_bukti' => 'required|numeric',
            'jenis_barang_bukti' => 'required|string',
            'foto_barang_bukti' => 'required|file|mimes:png,jpeg,jpg',
            'kondisi_barang_bukti' => 'required|string',
            'keterangan' => 'required|string',
        ]);

        $data['foto_barang_bukti'] = $request->file('foto_barang_bukti')->store('barang-bukti');

        DaftarBarang::create($data);

        return to_route('daftar-barang.index')->with('message', 'Daftar barang berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(DaftarBarang $daftar_barang)
    {
        return view('daftar-barang.show', compact('daftar_barang'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(DaftarBarang $daftar_barang)
    {
        return view('daftar-barang.edit', compact('daftar_barang'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, DaftarBarang $daftar_barang)
    {
        $data = $request->validate([
            'daftar_barang_temuan' => 'required|string',
            'dit' => 'required|string',
            'petugas_penyerah' => 'required|string',
            'petugas_penerima' => 'required|string',
            'nomor_laporan_polisi' => 'required|numeric',
            'nomor_register_bb' => 'required|numeric',
            'nomor_label_barang_bukti' => 'required|numeric',
            'jenis_barang_bukti' => 'required|string',
            'foto_barang_bukti' => 'nullable|file|mimes:png,jpeg,jpg',
            'kondisi_barang_bukti' => 'required|string',
            'keterangan' => 'required|string',
        ]);

        if ($request->hasFile('foto_barang_bukti')) {
            Storage::delete('storage/app/public' . $daftar_barang->foto_barang_bukti);
            $data['foto_barang_bukti'] = $request->file('foto_barang_bukti')->store('barang-bukti');
        }

        $daftar_barang->update($data);

        return to_route('daftar-barang.index')->with('message', 'Daftar barang berhasil ditambahkan!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(DaftarBarang $daftar_barang)
    {
        $daftar_barang->delete();
        Storage::delete('storage/app/public' . $daftar_barang->foto_barang_bukti);

        return back()->with('message', 'Daftar barang berhasil dihapus!');
    }
}
