<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\DaftarBarang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DitreskrimsusController extends Controller
{
    public function __construct()
    {
        $this->middleware(['role:Administrator|USER DITRESKRIMSUS']);
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ditreskrimsus = DaftarBarang::query()
            ->select('id', 'nama_barang_bukti', 'jumlah', 'no_laporan_polisi')
            ->where('unit', '=', 'DITRESKRIMSUS')
            ->orderBy('nama_barang_bukti', 'asc')
            ->get();

        return view('ditreskrimsus.index', compact('ditreskrimsus'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $kategori = Category::all();

        return view('ditreskrimsus.create', compact('kategori'));
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

        $data['gambar1'] = $request->file('gambar1')->store('ditreskrimsus');
        $data['gambar2'] = $request->file('gambar2') ? $request->file('gambar2')->store('ditreskrimsus') : null;
        $data['gambar3'] = $request->file('gambar3') ? $request->file('gambar3')->store('ditreskrimsus') : null;

        DaftarBarang::create($data);

        return to_route('ditreskrimsus.index')->with('message', 'Data Ditreskrimsus berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(DaftarBarang $ditreskrimsus)
    {
        $ditreskrimsus->load('category');

        return view('ditreskrimsus.show', compact('ditreskrimsus'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(DaftarBarang $ditreskrimsus)
    {
        $kategori = Category::all();

        return view('ditreskrimsus.edit', compact('ditreskrimsus', 'kategori'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, DaftarBarang $ditreskrimsus)
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
            Storage::delete($ditreskrimsus->gambar1);
            $data['gambar1'] = $request->file('gambar1')->store('ditreskrimsus');
        } else if ($request->hasFile('gambar2')) {
            if ($ditreskrimsus->gambar2) {
                Storage::delete($ditreskrimsus->gambar2);
            }
            $data['gambar2'] = $request->file('gambar2')->store('ditreskrimsus');
        } else if ($request->hasFile('gambar3')) {
            if ($ditreskrimsus->gambar3) {
                Storage::delete($ditreskrimsus->gambar3);
            }
            $data['gambar3'] = $request->file('gambar3')->store('ditreskrimsus');
        }

        $ditreskrimsus->update($data);

        return to_route('ditreskrimsus.index')->with('message', 'Data Ditreskrimsus berhasil diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(DaftarBarang $ditreskrimsus)
    {
        $ditreskrimsus->delete();

        Storage::delete($ditreskrimsus->gambar1);
        $ditreskrimsus->gambar2 ? Storage::delete($ditreskrimsus->gambar2) : null;
        $ditreskrimsus->gambar3 ? Storage::delete($ditreskrimsus->gambar3) : null;

        return back()->with('message', 'Data DaftarBarang berhasil dihapus!');
    }
}
