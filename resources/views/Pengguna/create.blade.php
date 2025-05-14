@extends('layouts.app')
@section('content')
<div class="container">
    <div class="bg-gold p-3 text-white rounded mb-4">
        <h2>Tambah Pengguna</h2>
    </div>
    <form action="{{ url('/pengguna') }}" method="POST">
        @csrf
        @include('pengguna.form')
        <button type="submit" class="btn btn-gold">Simpan</button>
    </form>
</div>
@endsection
