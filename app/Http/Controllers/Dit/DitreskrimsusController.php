<?php

namespace App\Http\Controllers\Dit;

use App\Http\Controllers\Controller;
use App\Http\Requests\DitreskrimsusRequest;
use App\Models\DaftarBarang;
use App\Services\CheckDataService;
use App\Services\ExportDatabaseService;
use App\Services\GetDaftarBarangService;

class DitreskrimsusController extends Controller
{
    public function __construct()
    {
        $this->middleware('role:Administrator|USER DITRESKRIMSUS')->except('destroy');
        $this->middleware('role:Administrator')->only('destroy');
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $barang_bukti = GetDaftarBarangService::get("DITRESKRIMSUS", "Barang Bukti");
        $barang_temuan = GetDaftarBarangService::get("DITRESKRIMSUS", "Barang Temuan");

        return view('ditreskrimsus.index', compact('barang_bukti', 'barang_temuan'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('ditreskrimsus.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(DitreskrimsusRequest $request)
    {
        $data = CheckDataService::check_store($request->validated(), "ditreskrimsus");

        DaftarBarang::create($data);

        return to_route('ditreskrimsus.index')->with('message', 'Data Ditreskrimsus berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(DaftarBarang $ditreskrimsus)
    {
        return view('ditreskrimsus.show', compact('ditreskrimsus'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(DaftarBarang $ditreskrimsus)
    {
        return view('ditreskrimsus.edit', compact('ditreskrimsus'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(DitreskrimsusRequest $request, DaftarBarang $ditreskrimsus)
    {
        $data = CheckDataService::check_edit($request->validated(), $ditreskrimsus, "ditreskrimsus");

        $ditreskrimsus->update($data);

        return to_route('ditreskrimsus.index')->with('message', 'Data Ditreskrimsus berhasil diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(DaftarBarang $ditreskrimsus)
    {
        $ditreskrimsus->delete();

        CheckDataService::check_delete($ditreskrimsus);

        return back()->with('message', 'Data DaftarBarang berhasil dihapus!');
    }

    public function print_temuan()
    {
        return ExportDatabaseService::print_temuan("DITRESKRIMSUS");
    }
    public function print_bukti()
    {
        return ExportDatabaseService::print_bukti("DITRESKRIMSUS");
    }

    public function export_bukti()
    {
        return ExportDatabaseService::excel_bukti("dit", "DITRESKRIMSUS", "Ditreskrimsus Barang Bukti");
    }

    public function export_temuan()
    {
        return ExportDatabaseService::excel_temuan("dit", "DITRESKRIMSUS", "Ditreskrimsus Barang Temuan");
    }
}
