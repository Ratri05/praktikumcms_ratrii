@extends('layouts.app')

@section('title', 'Tambah Karyawan')

@section('content')
<div class="container mt-5">
    <h1 class="text-center text-gold mb-4" style="font-family: 'Cinzel', serif;">
        🎭 Tambah Karyawan Baru - Sistem Bioskop
    </h1>

    <div class="card shadow-lg border-0" style="background-color: #1e1e1e; color: white;">
        <div class="card-body">
            <form action="{{ route('karyawan.store') }}" method="POST">
                @include('karyawan.form')

                <div class="text-center mt-4">
                    <button type="submit" class="btn btn-gold">
                        🍿 Simpan Karyawan
                    </button>
                    <a href="{{ route('karyawan.index') }}" class="btn btn-secondary ms-2">
                        ❌ Batal
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>

<style>
    .text-gold {
        color: #D4AF37;
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
