@extends('layouts.app')

@section('title', 'Konfirmasi Hapus Studio')

@section('content')
<div class="container mt-5">
    <h1 class="text-center text-danger mb-4">🗑️ Konfirmasi Hapus Studio</h1>

    <div class="card shadow-lg border-danger text-white" style="background-color: #1e1e1e;">
        <div class="card-body text-center">
            <p>Yakin ingin menghapus studio berikut?</p>
            <p><strong>Nomor Studio:</strong> {{ $studio->nomor_studio }}</p>
            <p><strong>Tipe:</strong> {{ $studio->tipe }}</p>

            <form action="{{ route('studio.destroy', $studio->id) }}" method="POST" class="d-inline">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger">🗑️ Ya, Hapus</button>
            </form>

            <a href="{{ route('studio.index') }}" class="btn btn-secondary ms-2">❌ Batal</a>
        </div>
    </div>
</div>
@endsection
