<?php

namespace App\Services;

use App\Models\DaftarBarang;

class GetDaftarBarangService
{
    public static function get(string $unit, string $category)
    {
        return DaftarBarang::query()
            ->latest()
            ->where('unit', '=', "$unit")
            ->whereHas('category', function ($query) use ($category) {
                return $query->where('kategori', "$category");
            })
            ->get();
    }
}
