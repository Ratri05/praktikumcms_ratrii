@extends('layouts.app')

@section('title', 'Daftar Film')

@section('content')
<div class="container my-5">
    <h1 class="mb-4 text-center" style="font-family: 'Cinzel', serif; color: #b8860b; text-shadow: 1px 1px 4px #6b5503;">
        🎬 Daftar Film Bioskop
    </h1>

    @if(session('success'))
        <div class="alert alert-success text-center">
            {{ session('success') }}
        </div>
    @endif

    <div class="text-end mb-4">
        <a href="{{ route('films.create') }}" class="btn btn-gold shadow-sm">
            <i class="bi bi-plus-circle-fill me-1"></i> Tambah Film Baru
        </a>
    </div>

    @if($films->isEmpty())
        <div class="alert alert-warning text-center">
            Belum ada data film. Yuk, tambah film baru!
        </div>
    @else
    <div class="row g-4">
        @foreach($films as $film)
        <div class="col-sm-6 col-md-4 col-lg-3">
            <div class="card shadow-sm film-card h-100">
                <img src="{{ $film->poster_url ?? 'https://via.placeholder.com/300x450?text=No+Poster' }}" 
                     class="card-img-top poster-img" alt="Poster {{ $film->judul }}">
                <div class="card-body d-flex flex-column">
                    <h5 class="card-title" style="font-family: 'Cinzel', serif;">{{ $film->judul }}</h5>
                    <p class="card-text mb-1"><strong>Durasi:</strong> {{ $film->durasi }} menit</p>
                    <p class="card-text mb-1"><strong>Sutradara:</strong> {{ $film->sutradara }}</p>
                    <p class="card-text mb-2"><strong>Bahasa:</strong> {{ $film->bahasa }}</p>
                    <p class="card-text mb-3 text-muted" style="font-size: 0.9em;">
                        Rilis: {{ $film->tanggal_rilis->format('d M Y') }}
                    </p>
                    <div class="mt-auto">
                        <a href="{{ route('films.show', $film->id) }}" class="btn btn-info btn-sm me-1 mb-1 w-100">Lihat Detail</a>
                        <a href="{{ route('films.edit', $film->id) }}" class="btn btn-warning btn-sm me-1 mb-1 w-100">Edit</a>
                        <form action="{{ route('films.destroy', $film->id) }}" method="POST" class="d-inline w-100" onsubmit="return confirm('Yakin ingin hapus film ini?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm w-100">Hapus</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    @endif
</div>

<style>
    @import url('https://fonts.googleapis.com/css2?family=Cinzel:wght@700&display=swap');

    .btn-gold {
        background-color: #D4AF37;
        color: #1c1c1c;
        font-weight: 600;
        box-shadow: 0 4px 6px rgb(212 175 55 / 0.4);
        transition: background-color 0.3s ease;
    }
    .btn-gold:hover {
        background-color: #b88a05;
        color: white;
    }
    .film-card {
        border-radius: 12px;
        overflow: hidden;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        background: #fff8e1;
    }
    .film-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 12px 20px rgba(212, 175, 55, 0.7);
    }
    .poster-img {
        height: 320px;
        object-fit: cover;
        border-bottom: 3px solid #D4AF37;
    }
</style>
@endsection
