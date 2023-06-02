<?php

namespace App\Http\Controllers;

use App\Models\Layanan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class LayananController extends Controller
{
    public function __construct()
    {
        $this->middleware('role:Administrator');
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $layanan = Layanan::query()
            ->select('id', 'judul', 'deskripsi')
            ->orderBy('judul', 'asc')
            ->get();

        return view('layanan.index', compact('layanan'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('layanan.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'judul' => 'required|string',
            'deskripsi' => 'required|string',
            'gambar' => 'required|file|mimes:jpg,jpeg,png|max:2048',
        ]);

        $data['gambar'] = $request->file('gambar')->store('layanan');

        Layanan::create($data);

        return to_route('layanan.index')->with('message', 'Data Layanan berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Layanan $layanan)
    {
        return view('layanan.show', compact('layanan'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Layanan $layanan)
    {
        return view('layanan.edit', compact('layanan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Layanan $layanan)
    {
        $data = $request->validate([
            'judul' => 'required|string',
            'deskripsi' => 'required|string',
            'gambar' => 'nullable|file|mimes:jpg,jpeg,png|max:2048',
        ]);

        if ($request->hasFile('gambar')) {
            Storage::delete($layanan->gambar);
            $data['gambar'] = $request->file('gambar')->store('layanan');
        }

        $layanan->update($data);

        return to_route('layanan.index')->with('message', 'Data Layanan berhasil diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Layanan $layanan)
    {
        Storage::delete($layanan->gambar);
        $layanan->delete();

        return back()->with('message', 'Data Layanan berhasil dihapus!');
    }
}
