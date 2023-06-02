<?php

namespace App\Http\Controllers;

use App\Models\Ditpolairud;
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
        $ditpolairud = Ditpolairud::query()
            ->select('id', 'nama_barang_bukti', 'jumlah', 'no_laporan_polisi')
            ->orderBy('nama_barang_bukti', 'asc')
            ->get();

        return view('ditpolairud.index', compact('ditpolairud'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('ditpolairud.create');
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

        $data['gambar1'] = $request->file('gambar1')->store('ditpolairud');
        $data['gambar2'] = $request->file('gambar2') ? $request->file('gambar2')->store('ditpolairud') : null;
        $data['gambar3'] = $request->file('gambar3') ? $request->file('gambar3')->store('ditpolairud') : null;

        Ditpolairud::create($data);

        return to_route('ditpolairud.index')->with('message', 'Data Ditpolairud berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Ditpolairud $ditpolairud)
    {
        return view('ditpolairud.show', compact('ditpolairud'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Ditpolairud $ditpolairud)
    {
        return view('ditpolairud.edit', compact('ditpolairud'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Ditpolairud $ditpolairud)
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
            Storage::delete($ditpolairud->gambar1);
            $data['gambar1'] = $request->file('gambar1')->store('ditpolairud');
        } else if ($request->hasFile('gambar2')) {
            if ($ditpolairud->gambar2) {
                Storage::delete($ditpolairud->gambar2);
            }
            $data['gambar2'] = $request->file('gambar2')->store('ditpolairud');
        } else if ($request->hasFile('gambar3')) {
            if ($ditpolairud->gambar3) {
                Storage::delete($ditpolairud->gambar3);
            }
            $data['gambar3'] = $request->file('gambar3')->store('ditpolairud');
        }

        $ditpolairud->update($data);

        return to_route('ditpolairud.index')->with('message', 'Data Ditpolairud berhasil diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Ditpolairud $ditpolairud)
    {
        $ditpolairud->delete();

        Storage::delete($ditpolairud->gambar1);
        $ditpolairud->gambar2 ? Storage::delete($ditpolairud->gambar2) : null;
        $ditpolairud->gambar3 ? Storage::delete($ditpolairud->gambar3) : null;

        return back()->with('message', 'Data Ditpolairud berhasil dihapus!');
    }
}
