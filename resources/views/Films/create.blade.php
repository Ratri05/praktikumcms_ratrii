@extends('layouts.app')

@section('content')
<div class="container my-5" style="max-width: 600px;">
    <h1 class="text-center mb-4" style="font-family: 'Cinzel', serif; color: #b8860b; text-shadow: 1px 1px 3px #6b5503;">
        🎥 Tambah Film Baru
    </h1>

    @if ($errors->any())
        <div class="alert alert-danger shadow-sm">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li><i class="bi bi-exclamation-circle-fill me-2"></i>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('films.store') }}" method="POST" class="bg-light p-4 rounded-4 shadow-sm border border-gold" style="border-color: #b8860b;">
        @csrf

        <div class="mb-3">
            <label for="judul" class="form-label fw-semibold" style="color: #805500;">Judul</label>
            <input type="text" id="judul" name="judul" class="form-control" value="{{ old('judul') }}" required placeholder="Masukkan judul film...">
        </div>

        <div class="mb-3">
            <label for="durasi" class="form-label fw-semibold" style="color: #805500;">Durasi (menit)</label>
            <input type="number" id="durasi" name="durasi" class="form-control" value="{{ old('durasi') }}" required min="1" placeholder="Contoh: 120">
        </div>

        <div class="mb-3">
            <label for="sutradara" class="form-label fw-semibold" style="color: #805500;">Sutradara</label>
            <input type="text" id="sutradara" name="sutradara" class="form-control" value="{{ old('sutradara') }}" required placeholder="Nama sutradara">
        </div>

        <div class="mb-3">
            <label for="pemeran_utama" class="form-label fw-semibold" style="color: #805500;">Pemeran Utama</label>
            <input type="text" id="pemeran_utama" name="pemeran_utama" class="form-control" value="{{ old('pemeran_utama') }}" required placeholder="Nama pemeran utama">
        </div>

        <div class="mb-3">
            <label for="bahasa" class="form-label fw-semibold" style="color: #805500;">Bahasa</label>
            <input type="text" id="bahasa" name="bahasa" class="form-control" value="{{ old('bahasa') }}" required placeholder="Bahasa film">
        </div>

        <div class="mb-4">
            <label for="tanggal_rilis" class="form-label fw-semibold" style="color: #805500;">Tanggal Rilis</label>
            <input type="date" id="tanggal_rilis" name="tanggal_rilis" class="form-control" value="{{ old('tanggal_rilis') }}" required>
        </div>

        <div class="d-flex justify-content-center gap-3">
            <button type="submit" class="btn btn-gold px-4 fw-semibold shadow-sm" style="border-radius: 30px;">
                Simpan
            </button>
            <a href="{{ route('films.index') }}" class="btn btn-secondary px-4" style="border-radius: 30px;">
                Batal
            </a>
        </div>
    </form>
</div>

<style>
    .btn-gold {
        background-color: #b8860b;
        color: white;
        transition: background-color 0.3s ease;
    }
    .btn-gold:hover {
        background-color: #805500;
        color: #fff;
    }
    .border-gold {
        border-color: #b8860b !important;
    }
</style>

<!-- Bootstrap Icons CDN -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" />

<!-- Google Fonts Cinzel -->
<style>
    @import url('https://fonts.googleapis.com/css2?family=Cinzel:wght@700&display=swap');
</style>
@endsection
