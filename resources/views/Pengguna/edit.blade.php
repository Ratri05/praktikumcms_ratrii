@extends('layouts.app')
@section('content')
<div class="container">
    <div class="bg-gold p-3 text-white rounded mb-4">
        <h2>Edit Pengguna</h2>
    </div>
    <form action="{{ url('/pengguna/'.$pengguna->id) }}" method="POST">
        @csrf
        @include('pengguna.form', ['pengguna' => $pengguna])
        <button type="submit" class="btn btn-gold">Update</button>
    </form>
</div>
@endsection
