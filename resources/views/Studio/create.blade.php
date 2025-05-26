@extends('layouts.app')

@section('title', 'Tambah Studio')

@section('content')
<div class="container mt-4">
    <div class="bg-gold p-4 text-white rounded shadow text-center" style="font-family: 'Cinzel', serif; font-weight: 700;">
        <h2>🎬 Tambah Studio Baru</h2>
        <p class="mb-0" style="font-size: 1.1rem;">Isi data studio untuk menambah ruang pertunjukan baru</p>
    </div>

    <form action="{{ url('/studio') }}" method="POST" class="mt-4">
        @csrf
        @include('studio.form')

        <div class="d-flex justify-content-center mt-4">
            <button type="submit" class="btn btn-gold btn-lg shadow">
                <i class="bi bi-plus-circle me-2"></i> Simpan Studio
            </button>
        </div>
    </form>
</div>

<style>
    .btn-gold {
        background-color: #D4AF37;
        color: #1c1c1c;
        border: none;
        font-weight: 600;
        transition: background-color 0.3s ease;
    }
    .btn-gold:hover {
        background-color: #b88a05;
        color: white;
    }
</style>
@endsection
