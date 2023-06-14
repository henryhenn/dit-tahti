<?php

namespace App\Http\Controllers;

use App\Models\YoutubeBeranda;
use Illuminate\Http\Request;

class YoutubeBerandaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $youtube = YoutubeBeranda::query()
            ->select('id', 'link')
            ->get();

        return view('youtube.index', compact('youtube'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('youtube.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, ['link' => 'required']);

        YoutubeBeranda::create(['link' => $request->get('link')]);

        return to_route('youtube-beranda.index')->with('message', 'Link berhasil ditambahkan!');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(YoutubeBeranda $youtube_beranda)
    {
        return view('youtube.edit', compact('youtube_beranda'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, YoutubeBeranda $youtube_beranda)
    {
        $this->validate($request, ['link' => 'required']);

        $youtube_beranda->update(['link' => $request->get('link')]);

        return to_route('youtube-beranda.index')->with('message', 'Link berhasil diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(YoutubeBeranda $youtube_beranda)
    {
        $youtube_beranda->delete();

        return back()->with('message', 'Link berhasil dihapus!');
    }
}
