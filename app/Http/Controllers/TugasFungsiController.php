<?php

namespace App\Http\Controllers;

use App\Models\TugasFungsi;
use Illuminate\Http\Request;

class TugasFungsiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tugasfungsi = TugasFungsi::query()
            ->select('id', 'judul', 'deskripsi')
            ->latest()
            ->get();

        return view('tugas-fungsi.index', compact('tugasfungsi'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('tugas-fungsi.create');
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

        TugasFungsi::create($data);

        return to_route('tugas-fungsi.index')->with('message', 'Tugas & Fungsi berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(TugasFungsi $tugas_fungsi)
    {
        return view('tugas-fungsi.show', compact('tugas_fungsi'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(TugasFungsi $tugas_fungsi)
    {
        return view('tugas-fungsi.edit', compact('tugas_fungsi'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, TugasFungsi $tugas_fungsi)
    {
        $data = $request->validate([
            'judul' => 'required|string|max:255',
            'deskripsi' => 'required|string',
        ]);

        $tugas_fungsi->update($data);

        return to_route('tugas-fungsi.index')->with('message', 'Tugas & Fungsi berhasil diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(TugasFungsi $tugas_fungsi)
    {
        $tugas_fungsi->delete();

        return back()->with('message', 'Tugas & Fungsi berhasil dihapus!');
    }
}
