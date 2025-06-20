<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KaryawanController;
use App\Http\Controllers\StudioController;
use App\Http\Controllers\FilmController;
use App\Http\Controllers\PenggunaController;
use App\Http\Controllers\TiketController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\ImageController;

// Halaman awal diarahkan ke home
Route::get('/', function () {
    return view('home'); // pastikan file resources/views/home.blade.php ada
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
Route::resource('films', FilmController::class);

// Tambahan: route khusus untuk pengujian error handler dengan findOrFail
Route::get('/film/detail/{id}', [FilmController::class, 'showDetail'])->name('film.detail');

/*
|--------------------------------------------------------------------------
| Pengguna
|--------------------------------------------------------------------------
*/
Route::resource('pengguna', PenggunaController::class);
Route::get('pengguna/{id}/delete', [PenggunaController::class, 'confirmDelete'])->name('pengguna.confirmDelete');

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

/*
|--------------------------------------------------------------------------
| Upload Gambar
|--------------------------------------------------------------------------
*/
Route::get('/upload', [ImageController::class, 'create']);
Route::post('/upload', [ImageController::class, 'store'])->name('image.upload');
Route::delete('/upload/{id}', [ImageController::class, 'destroy'])->name('image.delete');
