@extends('layouts.app')

@section('title', 'Detail Studio')

@section('content')
<div class="container mt-4">
    <div class="bg-gold p-4 text-white rounded text-center shadow" style="background-image: url('/images/gold-curtain.jpg'); background-size: cover;">
        <h2 class="fw-bold" style="font-family: 'Cinzel', serif;">🎟️ Detail Studio</h2>
        <p class="mb-0">Informasi lengkap tentang ruangan studio bioskop</p>
    </div>

    <div class="card shadow mt-4" style="border: none; background-color: #1e1e1e; color: white;">
        <div class="card-body">
            <h4 class="card-title text-center text-warning">Studio {{ $studio->nomor_studio }}</h4>
            <hr style="border-top: 1px solid #D4AF37;">
            <ul class="list-group list-group-flush">
                <li class="list-group-item bg-dark text-white"><strong>🎫 Nomor Studio:</strong> {{ $studio->nomor_studio }}</li>
                <li class="list-group-item bg-dark text-white"><strong>🧍 Kapasitas:</strong> {{ $studio->kapasitas }} penonton</li>
                <li class="list-group-item bg-dark text-white"><strong>📽️ Tipe Studio:</strong> {{ $studio->tipe_studio }}</li>
            </ul>
        </div>
    </div>

    <div class="text-center mt-4">
        <a href="{{ url('/studio') }}" class="btn btn-gold shadow">⬅️ Kembali ke Daftar Studio</a>
    </div>
</div>

<style>
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

    .list-group-item {
        border: none;
        font-size: 1.1rem;
    }
</style>
@endsection
