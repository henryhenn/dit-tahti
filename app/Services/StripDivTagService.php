<?php

namespace App\Services;

use Illuminate\Support\Str;

class StripDivTagService
{
    public function collection_strip_tag($data)
    {
        $data->map(function ($data) {
            $data->content = Str::limit(str_replace(array("<div>", "</div>"), "", $data->content), 300, '....');

            return $data;
        });
    }

    public function nama_barang_strip_tag($data)
    {
        $data->map(function ($data) {
            $data->nama_barang_bukti
                ? $data->nama_barang_bukti = Str::limit(str_replace(array("<div>", "</div>"), "", $data->nama_barang_bukti), 300, '....')
                : $data->nama_kendaraan = Str::limit(str_replace(array("<div>", "</div>"), "", $data->nama_barang_bukti), 300, '....');

            return $data;
        });
    }

    public function pagination_strip_tag($beritas)
    {
        $beritas->getCollection()->transform(function ($berita) {
            $berita->content = Str::limit(str_replace(array("<div>", "</div>"), "", $berita->content), 300, '....');

            return $berita;
        });
    }
}
