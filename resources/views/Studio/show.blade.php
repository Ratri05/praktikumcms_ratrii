@extends('layouts.app')

@section('content')
<div class="container">
    <div class="bg-gold p-3 text-white rounded mb-4">
        <h2>Detail Studio</h2>
    </div>

    <ul class="list-group">
        <li class="list-group-item"><strong>Nomor Studio:</strong> {{ $studio->nomor_studio }}</li>
        <li class="list-group-item"><strong>Kapasitas:</strong> {{ $studio->kapasitas }}</li>
        <li class="list-group-item"><strong>Tipe Studio:</strong> {{ $studio->tipe_studio }}</li>
    </ul>
    <a href="{{ url('/studio') }}" class="btn btn-secondary mt-3">Kembali</a>
</div>
@endsection
