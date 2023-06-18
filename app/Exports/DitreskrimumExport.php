<?php

namespace App\Exports;

use App\Models\DaftarBarang;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class DitreskrimumExport implements FromView
{
    public function view(): View
    {
        return view('export.ditreskrimum', [
            'ditreskrimum' => DaftarBarang::where('unit', 'DITRESKRIMUM')->get()
        ]);
    }
}
