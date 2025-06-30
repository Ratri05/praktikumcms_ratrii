@extends('layouts.app')

@section('title', 'Edit Studio')

@section('content')
<div class="container mt-5">
    <h1 class="text-center text-gold mb-4" style="font-family: 'Cinzel', serif;">
        ✏️ Edit Studio #{{ $studio->id }}
    </h1>

    <div class="card shadow-lg border-0" style="background-color: #1e1e1e; color: white;">
        <div class="card-body">
            {{-- Tampilkan error jika ada --}}
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul class="mb-0">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('studio.update', $studio->id) }}" method="POST">
                @method('PUT')
                @include('studio.form')

                <div class="text-center mt-4">
                    <button type="submit" class="btn btn-gold">
                        💾 Update Studio
                    </button>
                    <a href="{{ route('studio.index') }}" class="btn btn-secondary ms-2">
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
