<?php

namespace App\Http\Controllers;

use App\Models\Aturan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AturanController extends Controller
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
        $aturan = Aturan::query()
            ->select('id', 'judul')
            ->orderBy('judul', 'asc')
            ->get();

        return view('aturan.index', compact('aturan'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('aturan.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'judul' => 'required|string',
            'file' => 'required|file|mimes:jpg,jpeg,png,pdf,doc,docx,txt|max:20000',
        ]);

        $data['file'] = $request->file('file')->store('aturan');

        Aturan::create($data);

        return to_route('aturan.index')->with('message', 'Data Aturan berhasil ditambahkan!');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Aturan $aturan)
    {
        return view('aturan.edit', compact('aturan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Aturan $aturan)
    {
        $data = $request->validate([
            'judul' => 'required|string',
            'file' => 'nullable|file|mimes:jpg,jpeg,png,pdf,doc,docx,txt|max:20000',
        ]);

        if ($request->hasFile('file')) {
            Storage::delete($aturan->file);
            $data['file'] = $request->file('file')->store('aturan');
        }

        $aturan->update($data);

        return to_route('aturan.index')->with('message', 'Data Aturan berhasil diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Aturan $aturan)
    {
        Storage::delete($aturan->file);
        $aturan->delete();

        return back()->with('message', 'Data Aturan berhasil dihapus!');
    }

    public function download(Aturan $aturan)
    {
        return response()->download(storage_path('/app/public/' . $aturan->file));
    }
}
