@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="text-center">{{ isset($tiket) ? 'Edit Tiket' : 'Tambah Tiket' }}</h1>

    <form action="{{ isset($tiket) ? route('tiket.update', $tiket->id) : route('tiket.store') }}" method="POST">
        @csrf
        @if(isset($tiket))
            @method('PUT') <!-- Jika edit, gunakan metode PUT -->
        @endif

        <div class="form-group">
            <label for="nomor_kursi">Nomor Kursi</label>
            <input type="text" class="form-control" id="nomor_kursi" name="nomor_kursi" value="{{ old('nomor_kursi', $tiket->nomor_kursi ?? '') }}" required>
        </div>

        <div class="form-group">
            <label for="status">Status</label>
            <select class="form-control" id="status" name="status" required>
                <option value="Tersedia" {{ old('status', $tiket->status ?? '') == 'Tersedia' ? 'selected' : '' }}>Tersedia</option>
                <option value="Terpesan" {{ old('status', $tiket->status ?? '') == 'Terpesan' ? 'selected' : '' }}>Terpesan</option>
            </select>
        </div>

        <div class="form-group">
            <label for="harga_tiket">Harga Tiket</label>
            <input type="number" class="form-control" id="harga_tiket" name="harga_tiket" value="{{ old('harga_tiket', $tiket->harga_tiket ?? '') }}" required>
        </div>

        <button type="submit" class="btn btn-primary">{{ isset($tiket) ? 'Update Tiket' : 'Tambah Tiket' }}</button>
    </form>
</div>
@endsection
