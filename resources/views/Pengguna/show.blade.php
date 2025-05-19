@extends('layouts.app')

@section('content')

<div class="container py-4"> <h2>Detail Pengguna</h2> <ul class="list-group"> <li class="list-group-item"><strong>Nama:</strong> {{ $pengguna->nama }}</li> <li class="list-group-item"><strong>Email:</strong> {{ $pengguna->email }}</li> <li class="list-group-item"><strong>No Telepon:</strong> {{ $pengguna->no_telepon }}</li> <li class="list-group-item"><strong>Alamat:</strong> {{ $pengguna->alamat }}</li> </ul> <a href="{{ route('pengguna.index') }}" class="btn btn-secondary mt-3">Kembali</a> </div> @endsection