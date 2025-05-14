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
Route::get('/karyawan', [KaryawanController::class, 'index']);
Route::get('/karyawan/create', [KaryawanController::class, 'create']);
Route::post('/karyawan', [KaryawanController::class, 'store']);
Route::get('/karyawan/{id}', [KaryawanController::class, 'show']);
Route::get('/karyawan/{id}/edit', [KaryawanController::class, 'edit']);
Route::post('/karyawan/{id}', [KaryawanController::class, 'update']);
Route::get('/karyawan/{id}/delete', [KaryawanController::class, 'destroy']);

/*
|--------------------------------------------------------------------------
| Studio
|--------------------------------------------------------------------------
*/
Route::get('/studio', [StudioController::class, 'index']);
Route::get('/studio/create', [StudioController::class, 'create']);
Route::post('/studio', [StudioController::class, 'store']);
Route::get('/studio/{id}', [StudioController::class, 'show']);
Route::get('/studio/{id}/edit', [StudioController::class, 'edit']);
Route::post('/studio/{id}', [StudioController::class, 'update']);
Route::get('/studio/{id}/delete', [StudioController::class, 'destroy']);

/*
|--------------------------------------------------------------------------
| Film
|--------------------------------------------------------------------------
*/
Route::get('/film', [FilmController::class, 'index']);
Route::get('/film/create', [FilmController::class, 'create']);
Route::post('/film', [FilmController::class, 'store']);
Route::get('/film/{id}', [FilmController::class, 'show']);
Route::get('/film/{id}/edit', [FilmController::class, 'edit']);
Route::post('/film/{id}', [FilmController::class, 'update']);
Route::get('/film/{id}/delete', [FilmController::class, 'destroy']);

/*
|--------------------------------------------------------------------------
| Pengguna
|--------------------------------------------------------------------------
*/
Route::get('/pengguna', [PenggunaController::class, 'index']);
Route::get('/pengguna/create', [PenggunaController::class, 'create']);
Route::post('/pengguna', [PenggunaController::class, 'store']);
Route::get('/pengguna/{id}', [PenggunaController::class, 'show']);
Route::get('/pengguna/{id}/edit', [PenggunaController::class, 'edit']);
Route::post('/pengguna/{id}', [PenggunaController::class, 'update']);
Route::get('/pengguna/{id}/delete', [PenggunaController::class, 'destroy']);

/*
|--------------------------------------------------------------------------
| Tiket
|--------------------------------------------------------------------------
*/
Route::get('/tiket', [TiketController::class, 'index'])->name('tiket.index');
Route::get('/tiket/create', [TiketController::class, 'create']);
Route::post('/tiket', [TiketController::class, 'store'])->name('tiket.store');
Route::get('/tiket/{id}', [TiketController::class, 'show']);
Route::get('/tiket/{id}/edit', [TiketController::class, 'edit']);
Route::put('/tiket/{id}', [TiketController::class, 'update'])->name('tiket.update');
Route::get('/tiket/{id}/delete', [TiketController::class, 'destroy']);

/*
|--------------------------------------------------------------------------
| Transaksi
|--------------------------------------------------------------------------
*/
Route::get('/transaksi', [TransaksiController::class, 'index'])->name('transaksi.index');
Route::get('/transaksi/create', [TransaksiController::class, 'create']);
Route::post('/transaksi', [TransaksiController::class, 'store']);
Route::get('/transaksi/{id}', [TransaksiController::class, 'show']);
Route::get('/transaksi/{id}/edit', [TransaksiController::class, 'edit']);
Route::post('/transaksi/{id}', [TransaksiController::class, 'update']);
Route::get('/transaksi/{id}/delete', [TransaksiController::class, 'destroy']);
