@extends('layouts.app')
@section('content')
<div class="container">
    <div class="bg-gold p-3 text-white rounded mb-4">
        <h2>Tambah Tiket</h2>
    </div>
    <form action="{{ url('/tiket') }}" method="POST">
        @csrf
        @include('tiket.form')
        <button type="submit" class="btn btn-gold">Simpan</button>
    </form>
</div>
@endsection
