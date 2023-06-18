<?php

namespace App\Services;

use App\Models\DaftarBarang;

class PrintDatabaseService
{
    public function print(string $unit, string $view = "dit")
    {
        $data = DaftarBarang::query()
            ->where('unit', '=', $unit)
            ->orderBy('nama_barang_bukti', 'asc')
            ->get();

        return view('print.' . $view, compact('data'));
    }
}
