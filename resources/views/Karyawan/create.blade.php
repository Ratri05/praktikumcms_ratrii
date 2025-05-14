@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="text-center text-gold">Tambah Karyawan</h2>
    <form method="POST" action="{{ url('/karyawan') }}">
        @csrf
        @include('karyawan.form')
        <button type="submit" class="btn btn-gold">Simpan</button>
    </form>
</div>
@endsection
