@extends('layouts.app')
@section('content')
<div class="container">
    <div class="bg-gold p-3 text-white rounded mb-4">
        <h2>Detail Pengguna</h2>
    </div>
    <ul class="list-group">
        <li class="list-group-item"><strong>Nama:</strong> {{ $pengguna->nama }}</li>
        <li class="list-group-item"><strong>Email:</strong> {{ $pengguna->email }}</li>
        <li class="list-group-item"><strong>No Telepon:</strong> {{ $pengguna->no_telepon }}</li>
        <li class="list-group-item"><strong>Alamat:</strong> {{ $pengguna->alamat }}</li>
        <li class="list-group-item"><strong>Kata Sandi:</strong> {{ $pengguna->kata_sandi }}</li>
    </ul>
    <a href="{{ url('/pengguna') }}" class="btn btn-secondary mt-3">Kembali</a>
</div>
@endsection
