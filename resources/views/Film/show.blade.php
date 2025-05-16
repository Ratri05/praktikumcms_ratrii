@extends('layouts.app')
@section('content')
<div class="container">
    <div class="bg-gold p-3 text-white rounded mb-4">
        <h2>Detail Film</h2>
    </div>
    <ul class="list-group">
        <li class="list-group-item"><strong>Judul:</strong> {{ $film->judul }}</li>
        <li class="list-group-item"><strong>Durasi:</strong> {{ $film->durasi }} menit</li>
        <li class="list-group-item"><strong>Sutradara:</strong> {{ $film->sutradara }}</li>
        <li class="list-group-item"><strong>Pemeran Utama:</strong> {{ $film->pemeran_utama }}</li>
        <li class="list-group-item"><strong>Bahasa:</strong> {{ $film->bahasa }}</li>
        <li class="list-group-item"><strong>Tanggal Rilis:</strong> {{ $film->tanggal_rilis }}</li>
    </ul>
    <a href="{{ url('/film') }}" class="btn btn-secondary mt-3">Kembali</a>
</div>
@endsection
