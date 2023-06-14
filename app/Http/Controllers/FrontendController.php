<?php

namespace App\Http\Controllers;

use App\Models\Aturan;
use App\Models\Berita;
use App\Models\DaftarBarang;
use App\Models\GambarBeranda;
use App\Models\Layanan;
use App\Services\StripBeritaDivTagService;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class FrontendController extends Controller
{
    public function home()
    {
        $berita = Berita::query()
            ->select('id', 'title', 'content', 'image')
            ->latest()
            ->take(2)
            ->get();
        $barang = DaftarBarang::with('category')->latest()->take(4)->get();
        $gambar_beranda = GambarBeranda::latest()->get();

        (new StripBeritaDivTagService())->collection_strip_tag($berita);

        return view('home.index', compact('berita', 'barang', 'gambar_beranda'));
    }

    public function berita()
    {
        $beritas = Berita::query()
            ->search(request('search'))
            ->latest()
            ->paginate(5)
            ->withQueryString();

        (new StripBeritaDivTagService())->pagination_strip_tag($beritas);

        return view('berita.frontend', compact('beritas'));
    }

    public function detailBerita(Berita $berita)
    {
        return view('berita.frontend-detail', compact('berita'));
    }

    public function daftarBarang()
    {
        $barangs = DaftarBarang::query()
            ->latest()
            ->paginate(8);

        return view('daftarbarang.index', compact('barangs'));
    }

    public function dbt()
    {
        $barangs = DaftarBarang::query()
            ->filterbybarangtemuancategory()
            ->searchbynama(request('search'))
            ->groupbyunit(request('unit'))
            ->latest()
            ->paginate(8)
            ->withQueryString();

        return view('daftarbarang.dbt', compact('barangs'));
    }

    public function bts()
    {
        $barangs = DaftarBarang::query()
            ->filterbybarangtemuansebagaibarangbukticategory()
            ->searchbynama(request('search'))
            ->groupbyunit(\request('unit'))
            ->latest()
            ->paginate(8)
            ->withQueryString();

        return view('daftarbarang.bts', compact('barangs'));
    }

    public function aturan()
    {
        $aturan = Aturan::query()
            ->latest()
            ->select('id', 'judul', 'file')
            ->get();

        return view('aturan.frontend', compact('aturan'));
    }

    public function layanan()
    {
        $layanan = Layanan::latest()->first();

        return view('layanan.frontend', compact('layanan'));
    }
}
