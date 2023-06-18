<?php

namespace App\Exports;

use App\Models\DaftarBarang;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class DitExport implements FromView
{
    private $view, $unit;

    public function __construct(string $view, string $unit)
    {
        $view ? $this->view = $view : null;
        $this->unit = $unit;
    }

    public function view(): View
    {
        return view('export.' . $this->view, [
            'data' => DaftarBarang::where('unit', $this->unit)->get()
        ]);
    }

}
