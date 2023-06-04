<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\DaftarBarang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DitresnarkobaController extends Controller
{
    public function __construct()
    {
        $this->middleware(['role:Administrator|USER DITRESNARKOBA']);
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ditresnarkoba = DaftarBarang::query()
            ->select('id', 'nama_barang_bukti', 'jumlah', 'no_laporan_polisi')
            ->where('unit', '=', 'DITRESNARKOBA')
            ->orderBy('nama_barang_bukti', 'asc')
            ->get();

        return view('ditresnarkoba.index', compact('ditresnarkoba'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $kategori = Category::all();

        return view('ditresnarkoba.create', compact('kategori'));
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
            'penetapan_kejaksaan' => 'required|string',
            'tempat_penyimpanan' => 'required|string',
            'penyidik' => 'required|string',
            'kondisi' => 'required|string',
            'nama_pemilik' => 'required|string',
            'keterangan' => 'required|string',
            'gambar1' => 'required|file|mimes:jpg,jpeg,png|max:2048',
            'gambar2' => 'nullable|file|mimes:jpg,jpeg,png|max:2048',
            'gambar3' => 'nullable|file|mimes:jpg,jpeg,png|max:2048',
        ]);

        $data['gambar1'] = $request->file('gambar1')->store('ditresnarkoba');
        $data['gambar2'] = $request->file('gambar2') ? $request->file('gambar2')->store('ditresnarkoba') : null;
        $data['gambar3'] = $request->file('gambar3') ? $request->file('gambar3')->store('ditresnarkoba') : null;

        DaftarBarang::create($data);

        return to_route('ditresnarkoba.index')->with('message', 'Data Ditresnarkoba berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(DaftarBarang $ditresnarkoba)
    {
        $ditresnarkoba->load('category');

        return view('ditresnarkoba.show', compact('ditresnarkoba'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(DaftarBarang $ditresnarkoba)
    {
        $kategori = Category::all();

        return view('ditresnarkoba.edit', compact('ditresnarkoba', 'kategori'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, DaftarBarang $ditresnarkoba)
    {
        $data = $request->validate([
            'category_id' => 'required',
            'unit' => 'required',
            'nama_barang_bukti' => 'required|string',
            'jumlah' => 'required|string',
            'no_laporan_polisi' => 'required|string',
            'penetapan_kejaksaan' => 'required|string',
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
            Storage::delete($ditresnarkoba->gambar1);
            $data['gambar1'] = $request->file('gambar1')->store('ditresnarkoba');
        } else if ($request->hasFile('gambar2')) {
            if ($ditresnarkoba->gambar2) {
                Storage::delete($ditresnarkoba->gambar2);
            }
            $data['gambar2'] = $request->file('gambar2')->store('ditresnarkoba');
        } else if ($request->hasFile('gambar3')) {
            if ($ditresnarkoba->gambar3) {
                Storage::delete($ditresnarkoba->gambar3);
            }
            $data['gambar3'] = $request->file('gambar3')->store('ditresnarkoba');
        }

        $ditresnarkoba->update($data);

        return to_route('ditresnarkoba.index')->with('message', 'Data Ditresnarkoba berhasil diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(DaftarBarang $ditresnarkoba)
    {
        $ditresnarkoba->delete();

        Storage::delete($ditresnarkoba->gambar1);
        $ditresnarkoba->gambar2 ? Storage::delete($ditresnarkoba->gambar2) : null;
        $ditresnarkoba->gambar3 ? Storage::delete($ditresnarkoba->gambar3) : null;

        return back()->with('message', 'Data DaftarBarang berhasil dihapus!');
    }
}
