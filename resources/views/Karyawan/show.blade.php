@extends('layouts.app')

@section('content')
<div class="container">
<<<<<<< HEAD
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
=======
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
>>>>>>> 350667786e238237a3b63676329cf4b8de145d41
