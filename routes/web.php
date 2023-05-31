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

Route::redirect('/', '/login');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::group(['middleware' => ['role:Administrator']], function () {
        Route::resource('berita', BeritaController::class);
        Route::resource('users', UserController::class);
        Route::resource('ditreskrimum', DitreskrimumController::class)->middleware('role:USER DITRESKRIMUM');
        Route::resource('ditlantas', DitlantasController::class)->middleware('role:USER DITLANTAS');
        Route::resource('ditreskrimsus', DitreskrimsusController::class)->middleware('role:USER DISTRESKRIMSUS');
        Route::resource('ditpolairud', DitpolairudController::class)->middleware('role:USER DITPOLAIRUD');
        Route::resource('ditresnarkoba', DitresnarkobaController::class)->middleware('role:USER DITRESNARKOBA');
        Route::resource('layanan', LayananController::class);
        Route::resource('aturan', AturanController::class);
        Route::resource('gambar-beranda', GambarBerandaController::class);
    });

});

require __DIR__ . '/auth.php';
