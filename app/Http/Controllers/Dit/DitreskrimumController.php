<?php

namespace App\Http\Controllers\Dit;

use App\Exports\DitreskrimumExport;
use App\Http\Controllers\Controller;
use App\Http\Requests\DitreskrimumRequest;
use App\Models\Category;
use App\Models\DaftarBarang;
use App\Services\ExportDatabaseService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Maatwebsite\Excel\Facades\Excel;

class DitreskrimumController extends Controller
{
    public function __construct()
    {
        $this->middleware(['role:Administrator|USER DITRESKRIMUM']);
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ditreskrimum = DaftarBarang::query()
            ->select('id', 'nama_barang_bukti', 'jumlah', 'no_laporan_polisi')
            ->where('unit', '=', 'DITRESKRIMUM')
            ->orderBy('nama_barang_bukti')
            ->get();

        return view('ditreskrimum.index', compact('ditreskrimum'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $kategori = Category::all();

        return view('ditreskrimum.create', compact('kategori'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(DitreskrimumRequest $request)
    {
        $data = $request->validated();

        $data['gambar1'] = $request->file('gambar1')->store('ditreskrimum');
        $data['gambar2'] = $request->file('gambar2')->store('ditreskrimum');
        $data['gambar3'] = $request->file('gambar3')->store('ditreskrimum');

        DaftarBarang::create($data);

        return to_route('ditreskrimum.index')->with('message', 'Data Ditreskrimum berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(DaftarBarang $ditreskrimum)
    {
        $ditreskrimum->load('category');

        return view('ditreskrimum.show', compact('ditreskrimum'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(DaftarBarang $ditreskrimum)
    {
        $kategori = Category::all();

        return view('ditreskrimum.edit', compact('ditreskrimum', 'kategori'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(DitreskrimumRequest $request, DaftarBarang $ditreskrimum)
    {
        $data = $request->validated();

        if ($request->hasFile('gambar1')) {
            Storage::delete($ditreskrimum->gambar1);

            $data['gambar1'] = $request->file('gambar1')->store('ditreskrimum');
        } else if ($request->hasFile('gambar2')) {
            Storage::delete($ditreskrimum->gambar2);

            $data['gambar2'] = $request->file('gambar2')->store('ditreskrimum');
        } else if ($request->hasFile('gambar3')) {
            Storage::delete($ditreskrimum->gambar3);

            $data['gambar3'] = $request->file('gambar3')->store('ditreskrimum');
        }

        $ditreskrimum->update($data);

        return to_route('ditreskrimum.index')->with('message', 'Data Ditreskrimum berhasil diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(DaftarBarang $ditreskrimum)
    {
        $ditreskrimum->delete();

        Storage::delete($ditreskrimum->gambar1);
        Storage::delete($ditreskrimum->gambar2);
        Storage::delete($ditreskrimum->gambar3);

        return back()->with('message', 'Data Ditreskrimum berhasil dihapus!');
    }

    public function print()
    {
        return ExportDatabaseService::print("DITRESNARKOBA");
    }

    public function export()
    {
        return ExportDatabaseService::excel("dit", "DITLANTAS", "Ditreskrimum");
    }
}
