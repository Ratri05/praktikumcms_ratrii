@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="text-center text-gold">Edit Karyawan</h2>
    <form method="POST" action="{{ url('/karyawan/'.$karyawan['id']) }}">
        @csrf
        @include('karyawan.form', ['karyawan' => $karyawan])
        <button type="submit" class="btn btn-gold">Update</button>
    </form>
</div>
@endsection
