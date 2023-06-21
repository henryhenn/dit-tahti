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

        Route::get('ditreskrimum-bukti-print', [DitreskrimumController::class, 'print_bukti'])->name('ditreskrimum.printbukti');
        Route::get('ditreskrimum-temuan-print', [DitreskrimumController::class, 'print_temuan'])->name('ditreskrimum.printtemuan');
        Route::get('ditlantas-bukti-print', [DitlantasController::class, 'print_bukti'])->name('ditlantas.printbukti');
        Route::get('ditlantas-temuan-print', [DitlantasController::class, 'print_temuan'])->name('ditlantas.printtemuan');
        Route::get('ditpolairud-bukti-print', [DitpolairudController::class, 'print_bukti'])->name('ditpolairud.printbukti');
        Route::get('ditpolairud-temuan-print', [DitpolairudController::class, 'print_temuan'])->name('ditpolairud.printtemuan');
        Route::get('ditreskrimsus-bukti-print', [DitreskrimsusController::class, 'print_bukti'])->name('ditreskrimsus.printbukti');
        Route::get('ditreskrimsus-temuan-print', [DitreskrimsusController::class, 'print_temuan'])->name('ditreskrimsus.printtemuan');
        Route::get('ditresnarkoba-bukti-print', [DitresnarkobaController::class, 'print_bukti'])->name('ditresnarkoba.printbukti');
        Route::get('ditresnarkoba-temuan-print', [DitresnarkobaController::class, 'print_temuan'])->name('ditresnarkoba.printtemuan');

        Route::get('ditreskrimum-bukti-export', [DitreskrimumController::class, 'export_bukti'])->name('ditreskrimum.exportbukti');
        Route::get('ditreskrimum-temuan-export', [DitreskrimumController::class, 'export_temuan'])->name('ditreskrimum.exporttemuan');
        Route::get('ditlantas-bukti-export', [DitlantasController::class, 'export_bukti'])->name('ditlantas.exportbukti');
        Route::get('ditlantas-temuan-export', [DitlantasController::class, 'export_temuan'])->name('ditlantas.exporttemuan');
        Route::get('ditpolairud-bukti-export', [DitpolairudController::class, 'export_bukti'])->name('ditpolairud.exportbukti');
        Route::get('ditpolairud-temuan-export', [DitpolairudController::class, 'export_temuan'])->name('ditpolairud.exporttemuan');
        Route::get('ditreskrimsus-bukti-export', [DitreskrimsusController::class, 'export_bukti'])->name('ditreskrimsus.exportbukti');
        Route::get('ditreskrimsus-temuan-export', [DitreskrimsusController::class, 'export_temuan'])->name('ditreskrimsus.exporttemuan');
        Route::get('ditresnarkoba-bukti-export', [DitresnarkobaController::class, 'export_bukti'])->name('ditresnarkoba.exportbukti');
        Route::get('ditresnarkoba-temuan-export', [DitresnarkobaController::class, 'export_temuan'])->name('ditresnarkoba.exporttemuan');
    });

});

require __DIR__ . '/auth.php';
