@extends('layouts.app')

@section('content')
<div class="container my-5" style="max-width: 700px;">
    <h1 class="text-center mb-5" style="font-family: 'Cinzel', serif; color: #b8860b; text-shadow: 2px 2px 6px #6b5503;">
        🎬 Detail Film
    </h1>

    <div class="card shadow-lg rounded-4 overflow-hidden border-0" style="background: linear-gradient(135deg, #f7f1e1, #f9ecd0); transition: transform 0.3s ease;">
        @if($film->poster_url)
        <div class="ratio ratio-16x9">
            <img src="{{ $film->poster_url }}" alt="Poster {{ $film->judul }}" class="card-img-top object-fit-cover" style="border-bottom-left-radius: 0; border-bottom-right-radius: 0;">
        </div>
        @endif

        <div class="card-body px-5 py-4">
            <h2 class="card-title mb-3" style="font-family: 'Cinzel', serif; color: #805500;">{{ $film->judul }}</h2>

            <ul class="list-group list-group-flush mb-3" style="font-size: 1.1rem;">
                <li class="list-group-item d-flex justify-content-between align-items-center bg-transparent border-0 px-0">
                    <strong>ID</strong>
                    <span>#{{ $film->id }}</span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center bg-transparent border-0 px-0">
                    <strong>Durasi</strong>
                    <span><i class="bi bi-clock-history me-2"></i>{{ $film->durasi }} menit</span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center bg-transparent border-0 px-0">
                    <strong>Sutradara</strong>
                    <span><i class="bi bi-person-video3 me-2"></i>{{ $film->sutradara }}</span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center bg-transparent border-0 px-0">
                    <strong>Pemeran Utama</strong>
                    <span><i class="bi bi-people-fill me-2"></i>{{ $film->pemeran_utama }}</span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center bg-transparent border-0 px-0">
                    <strong>Bahasa</strong>
                    <span><i class="bi bi-translate me-2"></i>{{ $film->bahasa }}</span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center bg-transparent border-0 px-0">
                    <strong>Tanggal Rilis</strong>
                    <span><i class="bi bi-calendar-event me-2"></i>{{ $film->tanggal_rilis->format('d M Y') }}</span>
                </li>
            </ul>

            <div class="d-flex justify-content-center">
                <a href="{{ route('films.index') }}" class="btn btn-warning btn-lg px-4 shadow-sm" style="font-weight: 600; letter-spacing: 0.05em; border-radius: 30px;">
                    ← Kembali ke Daftar Film
                </a>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap Icons CDN -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" />

<style>
    .card:hover {
        transform: scale(1.03);
        box-shadow: 0 20px 40px rgba(184, 155, 46, 0.4);
    }
    .object-fit-cover {
        object-fit: cover;
        width: 100%;
        height: 100%;
    }
</style>

<!-- Google Fonts Cinzel -->
<style>
    @import url('https://fonts.googleapis.com/css2?family=Cinzel:wght@700&display=swap');
</style>

@endsection
