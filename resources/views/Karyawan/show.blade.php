@extends('layouts.app')

@section('title', 'Detail Karyawan')

@section('content')
<div class="container mt-5">
    <h1 class="text-center text-gold mb-4" style="font-family: 'Cinzel', serif;">
        🍿 Detail Karyawan Bioskop
    </h1>

    <div class="card shadow-lg border-0" style="background-color: #1e1e1e; color: white;">
        <div class="card-header bg-gold">
            <h4 class="mb-0">
                🎬 {{ $karyawan->nama }}
            </h4>
        </div>
        <div class="card-body">
            <p class="card-text mb-2">
                <strong class="text-gold">📌 Posisi:</strong> {{ $karyawan->posisi }}
            </p>
            <p class="card-text mb-2">
                <strong class="text-gold">🕒 Jadwal Kerja:</strong> {{ $karyawan->jadwal_kerja }}
            </p>
            <p class="card-text mb-2">
                <strong class="text-gold">📞 No Telepon:</strong> {{ $karyawan->no_telepon }}
            </p>
            <p class="card-text">
                <strong class="text-gold">📍 Alamat:</strong> {{ $karyawan->alamat }}
            </p>
        </div>
    </div>

    <div class="text-center mt-4">
        <a href="{{ route('karyawan.index') }}" class="btn btn-gold">
            ⬅️ Kembali ke Daftar Karyawan
        </a>
    </div>
</div>

<style>
    .text-gold {
        color: #D4AF37;
    }

    .bg-gold {
        background-color: #D4AF37;
        color: #1e1e1e;
        font-weight: bold;
        font-size: 1.2rem;
    }

    .btn-gold {
        background-color: #D4AF37;
        color: #1e1e1e;
        border: none;
        font-weight: bold;
    }

    .btn-gold:hover {
        background-color: #b7950b;
        color: white;
    }
</style>
@endsection
