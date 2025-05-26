@extends('layouts.app')

@section('title', 'Daftar Studio')

@section('content')
<div class="container mt-4">
    <div class="bg-gold text-center p-4 rounded shadow-sm mb-4" style="background-image: url('/images/red-curtain.jpg'); background-size: cover; background-position: center;">
        <h2 class="text-white fw-bold" style="font-family: 'Cinzel', serif;">🎥 Studio Bioskop</h2>
        <p class="text-white-50">Tempat terbaik menikmati layar lebar</p>
    </div>

    <div class="text-end mb-3">
        <a href="{{ url('/studio/create') }}" class="btn btn-gold shadow-sm">+ Tambah Studio</a>
    </div>

    <div class="row">
        @forelse($studio as $s)
            <div class="col-md-4 mb-4">
                <div class="card h-100 border-0 shadow" style="background-color: #1e1e1e; color: white;">
                    <div class="card-header text-center bg-gold text-dark fw-bold">
                        🎬 Studio {{ $s->nomor_studio }}
                    </div>
                    <div class="card-body">
                        <p><strong>Kapasitas:</strong> {{ $s->kapasitas }} penonton</p>
                        <p><strong>Tipe Studio:</strong> {{ $s->tipe_studio }}</p>
                    </div>
                    <div class="card-footer bg-transparent text-center">
                        <a href="{{ url('/studio/'.$s->id) }}" class="btn btn-primary btn-sm me-1">📄 Lihat</a>
                        <a href="{{ url('/studio/'.$s->id.'/edit') }}" class="btn btn-warning btn-sm me-1">✏️ Edit</a>
                        <a href="{{ url('/studio/'.$s->id.'/delete') }}" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin hapus studio ini?')">🗑️ Hapus</a>
                    </div>
                </div>
            </div>
        @empty
            <p class="text-center">Tidak ada data studio.</p>
        @endforelse
    </div>
</div>

<style>
    .bg-gold {
        background-color: #D4AF37 !important;
    }

    .btn-gold {
        background-color: #D4AF37;
        color: #1e1e1e;
        font-weight: bold;
        border: none;
    }

    .btn-gold:hover {
        background-color: #b7950b;
        color: white;
    }
</style>
@endsection
