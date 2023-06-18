<?php

use App\Http\Controllers\AturanController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\Dit\DitlantasController;
use App\Http\Controllers\Dit\DitpolairudController;
use App\Http\Controllers\Dit\DitreskrimsusController;
use App\Http\Controllers\Dit\DitreskrimumController;
use App\Http\Controllers\Dit\DitresnarkobaController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\GambarBerandaController;
use App\Http\Controllers\LayananController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StrukturOrganisasiController;
use App\Http\Controllers\SurveyController;
use App\Http\Controllers\TugasFungsiController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VisiMisiController;
use App\Http\Controllers\YoutubeBerandaController;
use App\Models\Ditlantas;
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

Route::controller(FrontendController::class)->group(function () {
    Route::get('/', 'home');
    Route::get('berita', 'berita');
    Route::get('berita/{berita:id}', 'detailBerita')->name('berita.detail');
    Route::get('daftarbarang', 'daftarBarang');
    Route::get('dbt', 'dbt');
    Route::get('dbt/ditlantas', 'ditlantas');
    Route::get('bts', 'bts');
    Route::get('aturan', 'aturan')->name('aturan.frontend');
    Route::get('layanan', 'layanan');
    Route::get('tugas-fungsi', 'tugasFungsi')->name('tugasFungsi');
    Route::get('struktur-organisasi', 'strukturOrganisasi')->name('strukturOrganisasi');
    Route::get('visi-misi', 'visiMisi')->name('visiMisi');
});

Route::get('aturan/{aturan:id}', [AturanController::class, 'download'])->name('aturan.download');

Route::middleware('auth')->group(function () {
    Route::get('dashboard', function () {
        return view('dashboard');
    });

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::group([
        'prefix' => 'admin'
    ], function () {
        Route::resource('berita', BeritaController::class);
        Route::resource('users', UserController::class);
        Route::resource('layanan', LayananController::class);
        Route::resource('aturan', AturanController::class);
        Route::resource('gambar-beranda', GambarBerandaController::class);

        Route::resource('ditreskrimum', DitreskrimumController::class);
        Route::resource('ditlantas', DitlantasController::class)->parameters(['ditlantas' => 'ditlantas']);
        Route::resource('ditreskrimsus', DitreskrimsusController::class)->parameters(['ditreskrimsus' => 'ditreskrimsus']);
        Route::resource('ditpolairud', DitpolairudController::class);
        Route::resource('ditresnarkoba', DitresnarkobaController::class);

        Route::resource('struktur-organisasi', StrukturOrganisasiController::class)->except('show');
        Route::resource('visi-misi', VisiMisiController::class);
        Route::resource('tugas-fungsi', TugasFungsiController::class);
        Route::resource('youtube-beranda', YoutubeBerandaController::class)->except('show');
        Route::resource('survey', SurveyController::class)->except('show');

        Route::get('ditreskrimum-print', [DitreskrimumController::class, 'print'])->name('ditreskrimum.print');
        Route::get('ditlantas-print', [DitlantasController::class, 'print'])->name('ditlantas.print');
        Route::get('ditpolairud-print', [DitpolairudController::class, 'print'])->name('ditpolairud.print');
        Route::get('ditreskrimsus-print', [DitreskrimsusController::class, 'print'])->name('ditreskrimsus.print');
        Route::get('ditresnarkoba-print', [DitresnarkobaController::class, 'print'])->name('ditresnarkoba.print');

        Route::get('ditreskrimum-export', [DitreskrimumController::class, 'export'])->name('ditreskrimum.export');
        Route::get('ditlantas-export', [DitlantasController::class, 'export'])->name('ditlantas.export');
        Route::get('ditpolairud-export', [DitpolairudController::class, 'export'])->name('ditpolairud.export');
        Route::get('ditreskrimsus-export', [DitreskrimsusController::class, 'export'])->name('ditreskrimsus.export');
        Route::get('ditresnarkoba-export', [DitresnarkobaController::class, 'export'])->name('ditresnarkoba.export');
    });

});

require __DIR__ . '/auth.php';
