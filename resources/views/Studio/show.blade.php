@extends('layouts.app')

@section('title', 'Detail Studio')

@section('content')
<div class="container mt-5">
    <h1 class="text-gold text-center mb-4" style="font-family: 'Cinzel', serif;">
        🎞️ Detail Studio #{{ $studio->id }}
    </h1>

    <div class="card shadow-lg border-0" style="background-color: #1e1e1e; color: white;">
        <div class="card-body">
            <p><strong>Nomor Studio:</strong> {{ $studio->nomor_studio }}</p>
            <p><strong>Kapasitas:</strong> {{ $studio->kapasitas }}</p>
            <p><strong>Tipe:</strong> {{ $studio->tipe }}</p>

            <div class="mt-4">
                <a href="{{ route('studio.index') }}" class="btn btn-secondary">⬅️ Kembali</a>
                <a href="{{ route('studio.edit', $studio->id) }}" class="btn btn-warning">✏️ Edit</a>
                <form action="{{ route('studio.destroy', $studio->id) }}" method="POST" style="display:inline;">
                    @csrf @method('DELETE')
                    <button class="btn btn-danger" onclick="return confirm('Hapus studio ini?')">🗑️ Hapus</button>
                </form>
            </div>
        </div>
    </div>
</div>

<style>
    .text-gold {
        color: #D4AF37;
    }
</style>
@endsection
