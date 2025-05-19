@extends('layouts.app')

@section('content')

<div class="container py-4"> <h2>Konfirmasi Hapus Pengguna</h2> <p>Apakah Anda yakin ingin menghapus pengguna <strong>{{ $pengguna->nama }}</strong>?</p>
<form action="{{ route('pengguna.destroy', $pengguna->id) }}" method="POST">
    @csrf
    @method('DELETE')
    <button class="btn btn-danger">Hapus</button>
    <a href="{{ route('pengguna.index') }}" class="btn btn-secondary">Batal</a>
</form>
</div> @endsection