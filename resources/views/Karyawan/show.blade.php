@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="text-center text-gold">Detail Karyawan</h2>
    <div class="card">
        <div class="card-body">
            <p><strong>Nama:</strong> {{ $karyawan['nama'] }}</p>
            <p><strong>Posisi:</strong> {{ $karyawan['posisi'] }}</p>
            <p><strong>Jadwal Kerja:</strong> {{ $karyawan['jadwal_kerja'] }}</p>
            <p><strong>No Telepon:</strong> {{ $karyawan['no_telepon'] }}</p>
            <p><strong>Alamat:</strong> {{ $karyawan['alamat'] }}</p>
            <a href="{{ url('/karyawan') }}" class="btn btn-secondary">Kembali</a>
        </div>
    </div>
</div>
@endsection
