<?php

namespace App\Exports;

use App\Models\DaftarBarang;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class DitExport implements FromView
{
    private $view, $unit, $category;

    public function __construct(
        string $view,
        string $unit,
        string $category)
    {
        $this->view = $view;
        $this->unit = $unit;
        $this->category = $category;
    }

    public function view(): View
    {
        return view('export.' . $this->view, [
            'data' => DaftarBarang::query()
                ->where('unit', $this->unit)
                ->whereHas('category', function ($query) {
                    return $query->where('kategori', $this->category);
                })
                ->get()
        ]);
    }

}
