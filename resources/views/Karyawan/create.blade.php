@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Tambah Karyawan</h1>

    <form action="{{ route('karyawan.store') }}" method="POST">
        @include('karyawan.form')
    </form>
</div>
@endsection
