<?php

namespace App\Http\Controllers;

use App\Models\Ditreskrimum;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DitreskrimumController extends Controller
{
    public function __construct()
    {
        $this->middleware(['role:Administrator|USER DITRESKRIMUM']);
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ditreskrimum = Ditreskrimum::query()
            ->select('id', 'nama_barang_bukti', 'jumlah', 'no_laporan_polisi')
            ->orderBy('nama_barang_bukti', 'asc')
            ->get();

        return view('ditreskrimum.index', compact('ditreskrimum'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('ditreskrimum.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'barang_temuan' => 'required|string',
            'nama_barang_bukti' => 'required|string',
            'jumlah' => 'required|string',
            'no_laporan_polisi' => 'required|string',
            'penetapan_pengadilan' => 'required|string',
            'tempat_penyimpanan' => 'required|string',
            'penyidik' => 'required|string',
            'kondisi' => 'required|string',
            'nama_pemilik' => 'required|string',
            'keterangan' => 'required|string',
            'gambar1' => 'required|file|mimes:jpg,jpeg,png|max:2048',
            'gambar2' => 'nullable|file|mimes:jpg,jpeg,png|max:2048',
            'gambar3' => 'nullable|file|mimes:jpg,jpeg,png|max:2048',
        ]);

        $data['gambar1'] = $request->file('gambar1')->store('ditreskrimsus');
        $data['gambar2'] = $request->file('gambar2') ? $request->file('gambar2')->store('ditreskrimsus') : null;
        $data['gambar3'] = $request->file('gambar3') ? $request->file('gambar3')->store('ditreskrimsus') : null;

        Ditreskrimum::create($data);

        return to_route('ditreskrimum.index')->with('message', 'Data Ditreskrimum berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Ditreskrimum $ditreskrimum)
    {
        return view('ditreskrimum.show', compact('ditreskrimum'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Ditreskrimum $ditreskrimum)
    {
        return view('ditreskrimum.edit', compact('ditreskrimum'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Ditreskrimum $ditreskrimum)
    {
        $data = $request->validate([
            'barang_temuan' => 'required|string',
            'nama_barang_bukti' => 'required|string',
            'jumlah' => 'required|string',
            'no_laporan_polisi' => 'required|string',
            'penetapan_pengadilan' => 'required|string',
            'tempat_penyimpanan' => 'required|string',
            'penyidik' => 'required|string',
            'kondisi' => 'required|string',
            'nama_pemilik' => 'required|string',
            'keterangan' => 'required|string',
            'gambar1' => 'nullable|file|mimes:jpg,jpeg,png|max:2048',
            'gambar2' => 'nullable|file|mimes:jpg,jpeg,png|max:2048',
            'gambar3' => 'nullable|file|mimes:jpg,jpeg,png|max:2048',
        ]);

        if ($request->hasFile('gambar1')) {
            Storage::delete($ditreskrimum->gambar1);
            $data['gambar1'] = $request->file('gambar1')->store('ditreskrimsus');
        } else if ($request->hasFile('gambar2')) {
            Storage::delete($ditreskrimum->gambar2);
            $data['gambar2'] = $request->file('gambar2')->store('ditreskrimsus');
        } else if ($request->hasFile('gambar3')) {
            Storage::delete($ditreskrimum->gambar3);
            $data['gambar3'] = $request->file('gambar3')->store('ditreskrimsus');
        }

        $ditreskrimum->update($data);

        return to_route('ditreskrimum.index')->with('message', 'Data Ditreskrimum berhasil diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Ditreskrimum $ditreskrimum)
    {
        $ditreskrimum->delete();

        Storage::delete($ditreskrimum->gambar1);
        $ditreskrimum->gambar2 ? Storage::delete($ditreskrimum->gambar2) : null;
        $ditreskrimum->gambar3 ? Storage::delete($ditreskrimum->gambar3) : null;

        return back()->with('message', 'Data Ditreskrimum berhasil dihapus!');
    }
}
