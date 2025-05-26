@extends('layouts.app')

@section('title', 'Edit Studio')

@section('content')
<div class="container mt-4">
    <div class="bg-gold p-4 text-white rounded shadow text-center" style="background-image: url('/images/red-curtain.jpg'); background-size: cover;">
        <h2 class="fw-bold" style="font-family: 'Cinzel', serif;">🎬 Edit Studio Bioskop</h2>
        <p class="mb-0">Perbarui informasi studio seperti kapasitas dan tipe studio</p>
    </div>

    <div class="card mt-4 shadow" style="border: none; background-color: #2c2c2c; color: white;">
        <div class="card-body">
            <form action="{{ url('/studio/'.$studio->id) }}" method="POST">
                @csrf
                @method('PUT')
                @include('studio.form', ['studio' => $studio])
                <div class="text-end">
                    <button type="submit" class="btn btn-gold shadow">🎥 Update Studio</button>
                </div>
            </form>
        </div>
    </div>
</div>

<style>
    .btn-gold {
        background-color: #D4AF37;
        color: #1e1e1e;
        font-weight: bold;
        border: none;
        transition: background 0.3s ease;
    }

    .btn-gold:hover {
        background-color: #b7950b;
        color: white;
    }

    input.form-control, select.form-select, textarea.form-control {
        background-color: #f5f5dc;
        border: 1px solid #d4af37;
        color: #1e1e1e;
    }

    label {
        font-weight: bold;
        color: #f1c40f;
    }
</style>
@endsection
