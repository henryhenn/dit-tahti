<?php

namespace App\Services;

use App\Exports\DitExport;
use App\Models\DaftarBarang;
use Maatwebsite\Excel\Facades\Excel;

class ExportDatabaseService
{
    public static function print_temuan(string $unit, string $view = "dit")
    {
        $data = DaftarBarang::query()
            ->where('unit', '=', "$unit")
            ->orderBy('nama_barang_bukti')
            ->where('klasifikasi', 'like', '%' . "Barang Temuan" . '%')
            ->get();

        return view('print.' . $view, compact('data'));
    }

    public static function print_bukti(string $unit, string $view = "dit")
    {
        $data = DaftarBarang::query()
            ->where('unit', '=', "$unit")
            ->orderBy('nama_barang_bukti')
            ->where('klasifikasi', 'like', '%' . "Barang Bukti" . '%')
            ->get();

        return view('print.' . $view, compact('data'));
    }

    public static function excel_bukti(
        string $view,
        string $unit,
        string $namaFile)
    {
        return Excel::download(new DitExport($view, $unit, "Barang Bukti"), $namaFile . '.xlsx');
    }

    public static function excel_temuan(
        string $view,
        string $unit,
        string $namaFile)
    {
        return Excel::download(new DitExport($view, $unit, "Barang Temuan"), $namaFile . '.xlsx');
    }
}
