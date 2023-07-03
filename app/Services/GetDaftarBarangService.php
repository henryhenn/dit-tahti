<?php

namespace App\Services;

use App\Models\DaftarBarang;

class GetDaftarBarangService
{
    public static function get(string $unit, string $klasifikasi)
    {
        return DaftarBarang::query()
            ->latest()
            ->where('unit', '=', "$unit")
            ->where('klasifikasi', $klasifikasi)
            ->get();
    }
}
