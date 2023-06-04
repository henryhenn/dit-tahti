<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\DaftarBarang;
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
        $ditreskrimum = DaftarBarang::query()
            ->select('id', 'nama_barang_bukti', 'jumlah', 'no_laporan_polisi')
            ->where('unit', '=', 'DITRESKRIMUM')
            ->orderBy('nama_barang_bukti', 'asc')
            ->get();

        return view('ditreskrimum.index', compact('ditreskrimum'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $kategori = Category::all();

        return view('ditreskrimum.create', compact('kategori'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'category_id' => 'required',
            'unit' => 'required',
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

        $data['gambar1'] = $request->file('gambar1')->store('ditreskrimum');
        $data['gambar2'] = $request->file('gambar2') ? $request->file('gambar2')->store('ditreskrimum') : null;
        $data['gambar3'] = $request->file('gambar3') ? $request->file('gambar3')->store('ditreskrimum') : null;

        DaftarBarang::create($data);

        return to_route('ditreskrimum.index')->with('message', 'Data Ditreskrimum berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(DaftarBarang $ditreskrimum)
    {
        $ditreskrimum->load('category');

        return view('ditreskrimum.show', compact('ditreskrimum'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(DaftarBarang $ditreskrimum)
    {
        $kategori = Category::all();

        return view('ditreskrimum.edit', compact('ditreskrimum', 'kategori'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, DaftarBarang $ditreskrimum)
    {
        $data = $request->validate([
            'category_id' => 'required',
            'unit' => 'required',
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
            $data['gambar1'] = $request->file('gambar1')->store('ditreskrimum');
        } else if ($request->hasFile('gambar2')) {
            if ($ditreskrimum->gambar2) {
                Storage::delete($ditreskrimum->gambar2);
            }
            $data['gambar2'] = $request->file('gambar2')->store('ditreskrimum');
        } else if ($request->hasFile('gambar3')) {
            if ($ditreskrimum->gambar3) {
                Storage::delete($ditreskrimum->gambar3);
            }
            $data['gambar3'] = $request->file('gambar3')->store('ditreskrimum');
        }

        $ditreskrimum->update($data);

        return to_route('ditreskrimum.index')->with('message', 'Data Ditreskrimum berhasil diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(DaftarBarang $ditreskrimum)
    {
        $ditreskrimum->delete();

        Storage::delete($ditreskrimum->gambar1);
        $ditreskrimum->gambar2 ? Storage::delete($ditreskrimum->gambar2) : null;
        $ditreskrimum->gambar3 ? Storage::delete($ditreskrimum->gambar3) : null;

        return back()->with('message', 'Data Ditreskrimum berhasil dihapus!');
    }
}
