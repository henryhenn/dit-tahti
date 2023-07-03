<?php

namespace App\Exports;

use App\Models\DaftarBarang;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class DitExport implements FromView
{
    private $view, $unit, $klasifikasi;

    public function __construct(
        string $view,
        string $unit,
        string $klasifikasi)
    {
        $this->view = $view;
        $this->unit = $unit;
        $this->klasifikasi = $klasifikasi;
    }

    public function view(): View
    {
        return view('export.' . $this->view, [
            'data' => DaftarBarang::query()
                ->where('unit', $this->unit)
                ->where('klasifikasi', 'like', '%' . "$this->klasifikasi" . '%')
                ->get()
        ]);
    }

}
