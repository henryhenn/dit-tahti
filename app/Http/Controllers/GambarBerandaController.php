<?php

namespace App\Http\Controllers;

use App\Models\GambarBeranda;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GambarBerandaController extends Controller
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
        $gambar = GambarBeranda::query()
            ->select('id', 'gambar', 'judul')
            ->orderBy('created_at', 'desc')
            ->get();

        return view('gambar-beranda.index', compact('gambar'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('gambar-beranda.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'gambar' => 'required|file|mimes:jpg,jpeg,png|max:2048',
            'judul' => 'nullable|string'
        ]);

        $data['gambar'] = $request->file('gambar')->store('gambar-beranda');

        GambarBeranda::create($data);

        return to_route('gambar-beranda.index')->with('message', 'Data Gambar Beranda berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(GambarBeranda $gambar_beranda)
    {
        return view('gambar-beranda.show', compact('gambar_beranda'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(GambarBeranda $gambar_beranda)
    {
        return view('gambar-beranda.edit', compact('gambar_beranda'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, GambarBeranda $gambar_beranda)
    {
        $data = $request->validate([
            'gambar' => 'nullable|file|mimes:jpg,jpeg,png|max:2048',
            'judul' => 'nullable|string'
        ]);

        if ($request->hasFile('gambar')) {
            Storage::delete($gambar_beranda->gambar);
            $data['gambar'] = $request->file('gambar')->store('gambar-beranda');
        }

        $gambar_beranda->update($data);

        return to_route('gambar-beranda.index')->with('message', 'Data Gambar Beranda berhasil diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(GambarBeranda $gambar_beranda)
    {
        Storage::delete($gambar_beranda->gambar);
        $gambar_beranda->delete();

        return back()->with('message', 'Data Gambar Beranda berhasil dihapus!');
    }
}
