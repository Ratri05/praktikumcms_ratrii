@extends('layouts.app')
@section('content')
<div class="container">
    <div class="bg-gold p-3 text-white rounded mb-4">
        <h2>Detail Tiket</h2>
    </div>
    <ul class="list-group">
        <li class="list-group-item"><strong>Nomor Kursi:</strong> {{ $tiket->nomor_kursi }}</li>
        <li class="list-group-item"><strong>Status:</strong> {{ $tiket->status }}</li>
        <li class="list-group-item"><strong>Harga Tiket:</strong> Rp {{ number_format($tiket->harga_tiket, 0, ',', '.') }}</li>
    </ul>
    <a href="{{ url('/tiket') }}" class="btn btn-secondary mt-3">Kembali</a>
</div>
@endsection
