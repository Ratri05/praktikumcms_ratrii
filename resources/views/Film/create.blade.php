@extends('layouts.app')
@section('content')
<div class="container">
    <div class="bg-gold p-3 text-white rounded mb-4">
        <h2>Tambah Film</h2>
    </div>
    <form action="{{ url('/film') }}" method="POST">
        @csrf
        @include('film.form')
        <button type="submit" class="btn btn-gold">Simpan</button>
    </form>
</div>
@endsection
