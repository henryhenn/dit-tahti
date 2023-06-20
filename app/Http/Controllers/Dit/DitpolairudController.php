<?php

namespace App\Http\Controllers\Dit;

use App\Http\Controllers\Controller;
use App\Http\Requests\DitpolairudRequest;
use App\Models\Category;
use App\Models\DaftarBarang;
use App\Services\CheckDataService;
use App\Services\ExportDatabaseService;
use App\Services\GetDaftarBarangService;
use Illuminate\Support\Facades\Storage;

class DitpolairudController extends Controller
{
    public function __construct()
    {
        $this->middleware('role:Administrator|USER DITPOLAIRUD')->except('destroy');
        $this->middleware('role:Administrator')->only('destroy');
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $barang_bukti = GetDaftarBarangService::get("DITPOLAIRUD", "Barang Bukti");
        $barang_temuan = GetDaftarBarangService::get("DITPOLAIRUD", "Barang Temuan");

        return view('ditpolairud.index', compact('barang_bukti', 'barang_temuan'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $kategori = Category::all();

        return view('ditpolairud.create', compact('kategori'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(DitpolairudRequest $request)
    {
        $data = CheckDataService::check_store($request->validated(), "ditpolairud");

        DaftarBarang::create($data);

        return to_route('ditpolairud.index')->with('message', 'Data Ditpolairud berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(DaftarBarang $ditpolairud)
    {
        $ditpolairud->load('category');

        return view('ditpolairud.show', compact('ditpolairud'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(DaftarBarang $ditpolairud)
    {
        $kategori = Category::all();

        return view('ditpolairud.edit', compact('ditpolairud', 'kategori'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(DitpolairudRequest $request, DaftarBarang $ditpolairud)
    {
        $data = CheckDataService::check_edit($request->validated(), $ditpolairud, "ditpolairud");

        $ditpolairud->update($data);

        return to_route('ditpolairud.index')->with('message', 'Data Ditpolairud berhasil diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(DaftarBarang $ditpolairud)
    {
        $ditpolairud->delete();

        CheckDataService::check_delete($ditpolairud);

        return back()->with('message', 'Data Ditpolairud berhasil dihapus!');
    }

    public function print()
    {
        return ExportDatabaseService::print("DITPOLAIRUD");
    }

    public function export()
    {
        return ExportDatabaseService::excel("dit", "DITPOLAIRUD", "Ditpolairud");
    }
}
