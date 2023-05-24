<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $berita = Berita::latest()->select('id', 'title', 'content', 'created_at')->paginate(10);

        return view('berita.index', compact('berita'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('berita.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'image' => 'required|file|mimes:jpg,jpeg,png|max:2048',
        ]);

        $data['image'] = $request->file('image')->store('news');

        Berita::create($data);

        return to_route('berita.index')->with('message', 'Berita berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Berita $beritum)
    {
        return view('berita.show', compact('beritum'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Berita $beritum)
    {
        return view('berita.edit', compact('beritum'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Berita $beritum)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'image' => 'nullable|file|mimes:jpg,jpeg,png|max:2048',
        ]);

        if ($request->hasFile('image')) {
            Storage::delete('storage/' . $beritum->image);
            $data['image'] = $request->file('image')->store('news');
        }

        $beritum->update($data);
        return to_route('berita.index')->with('message', 'Berita berhasil ditambahkan!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Berita $beritum)
    {
        $beritum->delete();
        Storage::delete('storage/' . $beritum->image);

        return to_route('berita.index')->with('message', 'Berita berhasil dihapus!');
    }
}
