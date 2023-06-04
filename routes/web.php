<?php

use App\Http\Controllers\AturanController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\DitreskrimsusController;
use App\Http\Controllers\DitlantasController;
use App\Http\Controllers\DitpolairudController;
use App\Http\Controllers\DitreskrimumController;
use App\Http\Controllers\DitresnarkobaController;
use App\Http\Controllers\GambarBerandaController;
use App\Http\Controllers\LayananController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use App\Models\Berita;
use App\Models\DaftarBarang;
use App\Models\Layanan;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    $berita = Berita::query()
        ->select('title', 'content', 'image')
        ->get();
    $barang = DaftarBarang::with('category')->latest()->take(4)->get();

    return view('home.index', compact('berita', 'barang'));
});

Route::get('berita', function () {
    $beritas = Berita::query()
        ->when(request('search') ?? false, function ($query) {
            $query->where('title', 'like', '%' . request('search') . '%');
        })
        ->latest()
        ->paginate(5)
        ->withQueryString();

    return view('berita.frontend', compact('beritas'));
});

Route::get('daftarbarang', function () {
    $barangs = DaftarBarang::query()
        ->latest()
        ->paginate(8);
    return view('daftarbarang.index', compact('barangs'));
});

Route::get('dbt', function () {
    $barangs = DaftarBarang::query()
        ->whereHas('category', function ($query) {
            $query->where('kategori', '=', 'Barang Temuan');
        })
        ->when(request('search') ?? false, function ($query) {
            $query->where('nama_barang_bukti', 'like', '%' . request('search') . '%')
                ->orWhere('nama_kendaraan', 'like', '%' . request('search') . '%');
        })
        ->latest()
        ->get();

    return view('daftarbarang.dbt', compact('barangs'));
});

Route::get('bts', function () {
    $barangs = DaftarBarang::query()
        ->whereHas('category', function ($query) {
            $query->where('kategori', '=', 'Barang Temuan Sebagai Barang Bukti');
        })
        ->when(request('search') ?? false, function ($query) {
            $query->where('nama_barang_bukti', 'like', '%' . request('search') . '%')
                ->orWhere('nama_kendaraan', 'like', '%' . request('search') . '%');
        })
        ->latest()
        ->get();

    return view('daftarbarang.bts', compact('barangs'));
});

Route::get('aturan', function () {
    return view('aturan.frontend');
});

Route::get('layanan', function () {
    $layanan = Layanan::latest()->first();

    return view('layanan.frontend', compact('layanan'));
});

Route::middleware('auth')->group(function () {
    Route::get('dashboard', function () {
        return view('dashboard');
    });

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::group([
        'middleware' => ['role:Administrator'],
        'prefix' => 'admin'
    ], function () {
        Route::resource('berita', BeritaController::class);
        Route::resource('users', UserController::class);
        Route::resource('layanan', LayananController::class);
        Route::resource('aturan', AturanController::class);
        Route::resource('gambar-beranda', GambarBerandaController::class);
    });

    Route::resource('ditreskrimum', DitreskrimumController::class)->middleware(['role:Administrator|USER DITRESKRIMUM']);
    Route::resource('ditlantas', DitlantasController::class)->parameters(['ditlantas' => 'ditlantas'])->middleware(['role:Administrator|USER DITLANTAS']);
    Route::resource('ditreskrimsus', DitreskrimsusController::class)->parameters(['ditreskrimsus' => 'ditreskrimsus'])->middleware(['role:Administrator|USER DITRESKRIMSUS']);
    Route::resource('ditpolairud', DitpolairudController::class)->middleware(['role:Administrator|USER DITPOLAIRUD']);
    Route::resource('ditresnarkoba', DitresnarkobaController::class)->middleware(['role:Administrator|USER DITRESNARKOBA']);
});

require __DIR__ . '/auth.php';
