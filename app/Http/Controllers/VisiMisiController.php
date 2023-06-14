<?php

namespace App\Http\Controllers;

use App\Models\VisiMisi;
use Illuminate\Http\Request;

class VisiMisiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $visimisi = VisiMisi::query()
            ->select('id', 'judul', 'deskripsi')
            ->latest()
            ->get();

        return view('visi-misi.index', compact('visimisi'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('visi-misi.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'judul' => 'required|string|max:255',
            'deskripsi' => 'required|string',
        ]);

        VisiMisi::create($data);

        return to_route('visi-misi.index')->with('message', 'Visi Misi berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(VisiMisi $visi_misi)
    {
        return view('visi-misi.show', compact('visi_misi'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(VisiMisi $visi_misi)
    {
        return view('visi-misi.edit', compact('visi_misi'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, VisiMisi $visi_misi)
    {
        $data = $request->validate([
            'judul' => 'required|string|max:255',
            'deskripsi' => 'required|string',
        ]);

        $visi_misi->update($data);

        return to_route('visi-misi.index')->with('message', 'Visi Misi berhasil diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(VisiMisi $visi_misi)
    {
        $visi_misi->delete();

        return back()->with('message', 'Visi Misi berhasil dihapus!');
    }
}
