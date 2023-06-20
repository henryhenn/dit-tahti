<?php

namespace App\Http\Controllers\Dit;

use App\Http\Controllers\Controller;
use App\Http\Requests\DitlantasRequest;
use App\Models\Category;
use App\Models\DaftarBarang;
use App\Services\ExportDatabaseService;
use App\Services\CheckDataService;
use App\Services\GetDaftarBarangService;

class DitlantasController extends Controller
{
    public function __construct()
    {
        $this->middleware('role:Administrator|USER DITLANTAS')->except('destroy');
        $this->middleware('role:Administrator')->only('destroy');
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $barang_bukti = GetDaftarBarangService::get("DITLANTAS", "Barang Bukti");

        $barang_temuan = GetDaftarBarangService::get("DITLANTAS", "Barang Temuan");

        return view('ditlantas.index', compact('barang_bukti', 'barang_temuan'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $kategori = Category::all();

        return view('ditlantas.create', compact('kategori'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(DitlantasRequest $request)
    {
        $data = CheckDataService::check_store($request->validated(), "ditlantas");

        DaftarBarang::create($data);

        return to_route('ditlantas.index')->with('message', 'Data Ditlantas berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(DaftarBarang $ditlantas)
    {
        $ditlantas->load('category');

        return view('ditlantas.show', compact('ditlantas'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(DaftarBarang $ditlantas)
    {
        $kategori = Category::all();

        return view('ditlantas.edit', compact('ditlantas', 'kategori'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(DitlantasRequest $request, DaftarBarang $ditlantas)
    {
        $data = CheckDataService::check_edit($request->validated(), $ditlantas, "ditlantas");

        $ditlantas->update($data);

        return to_route('ditlantas.index')->with('message', 'Data Ditlantas berhasil diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(DaftarBarang $ditlantas)
    {
        $ditlantas->delete();

        CheckDataService::check_delete($ditlantas);;

        return back()->with('message', 'Data Ditlantas berhasil dihapus!');
    }

    public function print()
    {
        return ExportDatabaseService::print($unit = "DITLANTAS", $view = "ditlantas");
    }

    public function export()
    {
        return ExportDatabaseService::excel("ditlantas", "DITLANTAS", "Ditlantas");
    }
}
