<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KaryawanController;
use App\Http\Controllers\StudioController;
use App\Http\Controllers\FilmController;
use App\Http\Controllers\PenggunaController;
use App\Http\Controllers\TiketController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\ImageController;

// Redirect root ke login
Route::get('/', function () {
    return redirect()->route('login');
});

// Auth Routes
Route::middleware('guest')->group(function () {
    Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
    Route::post('/login', [AuthController::class, 'login']);
    Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
    Route::post('/register', [AuthController::class, 'register']);
});

// Protected Routes - SEMUA ROUTE DALAM GRUP INI HARUS LOGIN DULU
Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

    /*
    |--------------------------------------------------------------------------
    | Karyawan
    |--------------------------------------------------------------------------
    */
    Route::resource('karyawan', KaryawanController::class);
    Route::get('/karyawan/{karyawan}', [KaryawanController::class, 'show']);

    /*
    |--------------------------------------------------------------------------
    | Studio
    |--------------------------------------------------------------------------
    */
    Route::resource('studio', StudioController::class);

    /*
    |--------------------------------------------------------------------------
    | Film
    |--------------------------------------------------------------------------
    */
    Route::resource('films', FilmController::class);
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

    /*
    |--------------------------------------------------------------------------
    | Testing Routes
    |--------------------------------------------------------------------------
    */
    Route::get('/cek-db', function () {
        try {
            DB::connection('oracle')->getPdo();
            return "✅ Koneksi ke Oracle Database berhasil!";
        } catch (\Exception $e) {
            return "❌ Gagal koneksi ke Oracle. Error: " . $e->getMessage();
        }
    });

    Route::get('/check-oci', function() {
        return [
            'OCI8_installed' => extension_loaded('oci8'),
            'PDO_OCI_installed' => extension_loaded('pdo_oci'),
            'PHP_modules' => get_loaded_extensions()
        ];
    });
}); 