<?php

namespace App\Http\Controllers;

use App\Models\Aturan;
use App\Models\Berita;
use App\Models\DaftarBarang;
use App\Models\GambarBeranda;
use App\Models\Layanan;
use App\Models\StrukturOrganisasi;
use App\Models\TugasFungsi;
use App\Models\VisiMisi;
use App\Models\YoutubeBeranda;
use App\Services\StripBeritaDivTagService;

class FrontendController extends Controller
{
    public function home()
    {
        $berita = Berita::query()
            ->select('id', 'title', 'content', 'image')
            ->latest()
            ->take(2)
            ->get();
        $barang = DaftarBarang::latest()->take(4)->get();
        $barang->map(function ($barang) {
            str_replace(array("<div>", "</div>"), "", $barang->keterangan);

            return $barang;
        });

        $gambar_beranda = GambarBeranda::latest()->get();
        $youtube = YoutubeBeranda::latest()->take(2)->get();

        (new StripBeritaDivTagService())->collection_strip_tag($berita);

        return view('home.index', compact('berita', 'barang', 'gambar_beranda', 'youtube'));
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
            ->search(request('search'))
            ->groupbyunit(request('unit'))
            ->latest()
            ->paginate(8)
            ->withQueryString();

        return view('daftarbarang.dbt', compact('barangs'));
    }

    public function ditlantas()
    {
        $barangs = DaftarBarang::query()
            ->filterbybarangtemuancategory()
            ->search(request('search'))
            ->where('unit', 'DITLANTAS')
            ->latest()
            ->paginate(8)
            ->withQueryString();

        return view('daftarbarang.dbt-ditlantas', compact('barangs'));
    }

    public function bts()
    {
        $barangs = DaftarBarang::query()
            ->filterbybarangtemuansebagaibarangbukticategory()
            ->search(request('search'))
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
        $layanan = Layanan::latest()->get();

        return view('layanan.frontend', compact('layanan'));
    }

    public function strukturOrganisasi()
    {
        $organisasi = StrukturOrganisasi::latest()->get();

        return view('organisasi.frontend', compact('organisasi'));
    }

    public function visiMisi()
    {
        $visimisi = VisiMisi::latest()->get();

        return view('visi-misi.frontend', compact('visimisi'));
    }

    public function tugasFungsi()
    {
        $tugasfungsi = TugasFungsi::latest()->get();

        return view('tugas-fungsi.frontend', compact('tugasfungsi'));
    }
}
