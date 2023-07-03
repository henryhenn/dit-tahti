<?php

namespace App\Http\Controllers\Dit;

use App\Http\Controllers\Controller;
use App\Http\Requests\DitreskrimumRequest;
use App\Models\DaftarBarang;
use App\Services\ExportDatabaseService;
use App\Services\CheckDataService;
use App\Services\GetDaftarBarangService;

class DitreskrimumController extends Controller
{
    public function __construct()
    {
        $this->middleware('role:Administrator|USER DITRESKRIMUM')->except('destroy');
        $this->middleware('role:Administrator')->only('destroy');
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $barang_bukti = GetDaftarBarangService::get("DITRESKRIMUM", "Barang Bukti");
        $barang_temuan = GetDaftarBarangService::get("DITRESKRIMUM", "Barang Temuan");

        return view('ditreskrimum.index', compact('barang_bukti', 'barang_temuan'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('ditreskrimum.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(DitreskrimumRequest $request)
    {
        $data = CheckDataService::check_store($request->validated(), "ditreskrimum");

        DaftarBarang::create($data);

        return to_route('ditreskrimum.index')->with('message', 'Data Ditreskrimum berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(DaftarBarang $ditreskrimum)
    {
        return view('ditreskrimum.show', compact('ditreskrimum'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(DaftarBarang $ditreskrimum)
    {
        return view('ditreskrimum.edit', compact('ditreskrimum'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(DitreskrimumRequest $request, DaftarBarang $ditreskrimum)
    {
        $data = CheckDataService::check_edit($request->validated(), $ditreskrimum, "ditreskrimum");

        $ditreskrimum->update($data);

        return to_route('ditreskrimum.index')->with('message', 'Data Ditreskrimum berhasil diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(DaftarBarang $ditreskrimum)
    {
        $ditreskrimum->delete();

        CheckDataService::check_delete($ditreskrimum);

        return back()->with('message', 'Data Ditreskrimum berhasil dihapus!');
    }

    public function print_temuan()
    {
        return ExportDatabaseService::print_temuan("DITRESKRIMUM");
    }
    public function print_bukti()
    {
        return ExportDatabaseService::print_bukti("DITRESKRIMUM");
    }

    public function export_bukti()
    {
        return ExportDatabaseService::excel_bukti("dit", "DITRESKRIMUM", "Ditreskrimum Barang Bukti");
    }

    public function export_temuan()
    {
        return ExportDatabaseService::excel_temuan("dit", "DITRESKRIMUM", "Ditreskrimum Barang Temuan");
    }
}
