<?php

namespace App\Services;

use Illuminate\Support\Str;

class StripBeritaDivTagService
{
    public function collection_strip_tag($berita)
    {
        $berita->map(function ($berita) {
            $berita->content = Str::limit(str_replace(array("<div>", "</div>"), "",$berita->content), 300, '....');

            return $berita;
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
