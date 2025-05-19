@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Detail Karyawan</h1>

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">{{ $karyawan->nama }}</h5>
            <p class="card-text"><strong>Posisi:</strong> {{ $karyawan->posisi }}</p>
            <p class="card-text"><strong>Jadwal Kerja:</strong> {{ $karyawan->jadwal_kerja }}</p>
            <p class="card-text"><strong>No Telepon:</strong> {{ $karyawan->no_telepon }}</p>
            <p class="card-text"><strong>Alamat:</strong> {{ $karyawan->alamat }}</p>
        </div>
    </div>

    <a href="{{ route('karyawan.index') }}" class="btn btn-secondary mt-3">Kembali</a>
</div>
@endsection
