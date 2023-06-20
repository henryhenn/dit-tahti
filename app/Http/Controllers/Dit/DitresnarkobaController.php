<?php

namespace App\Http\Controllers\Dit;

use App\Http\Controllers\Controller;
use App\Http\Requests\DitresnarkobaRequest;
use App\Models\Category;
use App\Models\DaftarBarang;
use App\Services\CheckDataService;
use App\Services\ExportDatabaseService;
use App\Services\GetDaftarBarangService;
use Illuminate\Support\Facades\Storage;

class DitresnarkobaController extends Controller
{
    public function __construct()
    {
        $this->middleware('role:Administrator|USER DITRESNARKOBA')->except('destroy');
        $this->middleware('role:Administrator')->only('destroy');
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $barang_bukti = GetDaftarBarangService::get("DITRESNARKOBA", "Barang Bukti");
        $barang_temuan = GetDaftarBarangService::get("DITRESNARKOBA", "Barang Temuan");

        return view('ditresnarkoba.index', compact('barang_bukti', 'barang_temuan'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $kategori = Category::all();

        return view('ditresnarkoba.create', compact('kategori'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(DitresnarkobaRequest $request)
    {
        $data = CheckDataService::check_store($request->validated(), "ditresnarkoba");

        DaftarBarang::create($data);

        return to_route('ditresnarkoba.index')->with('message', 'Data Ditresnarkoba berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(DaftarBarang $ditresnarkoba)
    {
        $ditresnarkoba->load('category');

        return view('ditresnarkoba.show', compact('ditresnarkoba'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(DaftarBarang $ditresnarkoba)
    {
        $kategori = Category::all();

        return view('ditresnarkoba.edit', compact('ditresnarkoba', 'kategori'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(DitresnarkobaRequest $request, DaftarBarang $ditresnarkoba)
    {
        $data = CheckDataService::check_edit($request->validated(), $ditresnarkoba, "ditresnarkoba");

        $ditresnarkoba->update($data);

        return to_route('ditresnarkoba.index')->with('message', 'Data Ditresnarkoba berhasil diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(DaftarBarang $ditresnarkoba)
    {
        $ditresnarkoba->delete();

        CheckDataService::check_delete($ditresnarkoba);

        return back()->with('message', 'Data Ditresnarkoba berhasil dihapus!');
    }

    public function print()
    {
        return ExportDatabaseService::print("DITRESNARKOBA");
    }

    public function export()
    {
        return ExportDatabaseService::excel("dit", "DITPOLAIRUD", "Ditpolairud");
    }
}
