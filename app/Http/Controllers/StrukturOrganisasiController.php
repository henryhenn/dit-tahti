<?php

namespace App\Http\Controllers;

use App\Models\StrukturOrganisasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class StrukturOrganisasiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $organisasis = StrukturOrganisasi::query()
            ->select('id', 'judul', 'foto')
            ->latest()
            ->paginate(5);

        return view('organisasi.index', compact('organisasis'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('organisasi.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'judul' => 'required|string|max:255',
            'foto' => 'required|file|mimes:jpeg,jpg,png|max:4096'
        ]);

        $data['foto'] = $request->file('foto')->store('organisasi');

        StrukturOrganisasi::create($data);

        return to_route('struktur-organisasi.index')->with('message', 'Data Struktur Organisasi berhasil ditambahkan!');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(StrukturOrganisasi $struktur_organisasi)
    {
        return view('organisasi.edit', compact('struktur_organisasi'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, StrukturOrganisasi $struktur_organisasi)
    {
        $data = $request->validate([
            'judul' => 'required|string|max:255',
            'foto' => 'nullable|file|mimes:jpeg,jpg,png|max:4096'
        ]);

        if ($request->hasFile('foto')) {
            Storage::delete($struktur_organisasi->foto);
            $data['foto'] = $request->file('foto')->store('organisasi');
        }

        $struktur_organisasi->update($data);

        return to_route('struktur-organisasi.index')->with('message', 'Data Struktur Organisasi berhasil diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(StrukturOrganisasi $struktur_organisasi)
    {
        Storage::delete($struktur_organisasi->foto);
        $struktur_organisasi->delete();

        return to_route('struktur-organisasi.index')->with('message', 'Data Struktur Organisasi berhasil dihapus!');

    }
}
