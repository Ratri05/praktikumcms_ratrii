@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Karyawan</h1>

    <form action="{{ route('karyawan.update', $karyawan->id) }}" method="POST">
        @include('karyawan.form', ['karyawan' => $karyawan])
    </form>
</div>
@endsection
