@extends('layouts.app')

@section('content')
<div class="container">
<<<<<<< HEAD
    <h1>Edit Karyawan</h1>

    <form action="{{ route('karyawan.update', $karyawan->id) }}" method="POST">
        @include('karyawan.form', ['karyawan' => $karyawan])
    </form>
</div>
@endsection
=======
    <h2 class="text-center text-gold">Edit Karyawan</h2>
    <form method="POST" action="{{ url('/karyawan/'.$karyawan['id']) }}">
        @csrf
        @include('karyawan.form', ['karyawan' => $karyawan])
        <button type="submit" class="btn btn-gold">Update</button>
    </form>
</div>
@endsection
>>>>>>> 350667786e238237a3b63676329cf4b8de145d41
