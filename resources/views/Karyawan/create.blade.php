@extends('layouts.app')

@section('content')
<div class="container">
<<<<<<< HEAD
    <h1>Tambah Karyawan</h1>

    <form action="{{ route('karyawan.store') }}" method="POST">
        @include('karyawan.form')
    </form>
</div>
@endsection
=======
    <h2 class="text-center text-gold">Tambah Karyawan</h2>
    <form method="POST" action="{{ url('/karyawan') }}">
        @csrf
        @include('karyawan.form')
        <button type="submit" class="btn btn-gold">Simpan</button>
    </form>
</div>
@endsection
>>>>>>> 350667786e238237a3b63676329cf4b8de145d41
