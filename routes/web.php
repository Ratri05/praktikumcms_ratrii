<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KaryawanController;
use App\Http\Controllers\StudioController;
use App\Http\Controllers\FilmController;
use App\Http\Controllers\PenggunaController;
use App\Http\Controllers\TiketController;
use App\Http\Controllers\TransaksiController;

Route::get('/', function () {
    return view('welcome');
});

/*
|--------------------------------------------------------------------------
| Karyawan
|--------------------------------------------------------------------------
*/
Route::resource('karyawan', KaryawanController::class);

/*
|--------------------------------------------------------------------------
| Studio
|--------------------------------------------------------------------------
*/
Route::get('/studio', [StudioController::class, 'index'])->name('studio.index');
Route::get('/studio/create', [StudioController::class, 'create'])->name('studio.create');
Route::post('/studio', [StudioController::class, 'store'])->name('studio.store');
Route::get('/studio/{id}', [StudioController::class, 'show'])->name('studio.show');
Route::get('/studio/{id}/edit', [StudioController::class, 'edit'])->name('studio.edit');
Route::put('/studio/{id}', [StudioController::class, 'update'])->name('studio.update');
Route::get('/studio/{id}/delete', [StudioController::class, 'confirmDelete'])->name('studio.confirmDelete');
Route::delete('/studio/{id}', [StudioController::class, 'destroy'])->name('studio.destroy');

/*
|--------------------------------------------------------------------------
| Film
|--------------------------------------------------------------------------
*/
Route::get('/film', [FilmController::class, 'index'])->name('film.index');
Route::get('/film/create', [FilmController::class, 'create'])->name('film.create');
Route::post('/film', [FilmController::class, 'store'])->name('film.store');
Route::get('/film/{id}', [FilmController::class, 'show'])->name('film.show');
Route::get('/film/{id}/edit', [FilmController::class, 'edit'])->name('film.edit');
Route::put('/film/{id}', [FilmController::class, 'update'])->name('film.update');
Route::get('/film/{id}/delete', [FilmController::class, 'confirmDelete'])->name('film.confirmDelete');
Route::delete('/film/{id}', [FilmController::class, 'destroy'])->name('film.destroy');

/*
|--------------------------------------------------------------------------
| Pengguna
|--------------------------------------------------------------------------
*/
Route::get('/pengguna', [PenggunaController::class, 'index'])->name('pengguna.index');
Route::get('/pengguna/create', [PenggunaController::class, 'create'])->name('pengguna.create');
Route::post('/pengguna', [PenggunaController::class, 'store'])->name('pengguna.store');
Route::get('/pengguna/{id}', [PenggunaController::class, 'show'])->name('pengguna.show');
Route::get('/pengguna/{id}/edit', [PenggunaController::class, 'edit'])->name('pengguna.edit');
Route::put('/pengguna/{id}', [PenggunaController::class, 'update'])->name('pengguna.update');
Route::get('/pengguna/{id}/delete', [PenggunaController::class, 'confirmDelete'])->name('pengguna.confirmDelete');
Route::delete('/pengguna/{id}', [PenggunaController::class, 'destroy'])->name('pengguna.destroy');

/*
|--------------------------------------------------------------------------
| Tiket
|--------------------------------------------------------------------------
*/
Route::get('/tiket', [TiketController::class, 'index'])->name('tiket.index');
Route::get('/tiket/create', [TiketController::class, 'create'])->name('tiket.create');
Route::post('/tiket', [TiketController::class, 'store'])->name('tiket.store');
Route::get('/tiket/{id}', [TiketController::class, 'show'])->name('tiket.show');
Route::get('/tiket/{id}/edit', [TiketController::class, 'edit'])->name('tiket.edit');
Route::put('/tiket/{id}', [TiketController::class, 'update'])->name('tiket.update');
Route::get('/tiket/{id}/delete', [TiketController::class, 'confirmDelete'])->name('tiket.confirmDelete');
Route::delete('/tiket/{id}', [TiketController::class, 'destroy'])->name('tiket.destroy');

/*
|--------------------------------------------------------------------------
| Transaksi
|--------------------------------------------------------------------------
*/
Route::get('/transaksi', [TransaksiController::class, 'index'])->name('transaksi.index');
Route::get('/transaksi/create', [TransaksiController::class, 'create'])->name('transaksi.create');
Route::post('/transaksi', [TransaksiController::class, 'store'])->name('transaksi.store');
Route::get('/transaksi/{id}', [TransaksiController::class, 'show'])->name('transaksi.show');
Route::get('/transaksi/{id}/edit', [TransaksiController::class, 'edit'])->name('transaksi.edit');
Route::put('/transaksi/{id}', [TransaksiController::class, 'update'])->name('transaksi.update');
Route::get('/transaksi/{id}/delete', [TransaksiController::class, 'confirmDelete'])->name('transaksi.confirmDelete');
Route::delete('/transaksi/{id}', [TransaksiController::class, 'destroy'])->name('transaksi.destroy');