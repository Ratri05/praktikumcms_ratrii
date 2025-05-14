@extends('layouts.app')
@section('content')
<div class="container">
    <div class="bg-gold p-3 text-white rounded mb-4">
        <h2>Edit Transaksi</h2>
    </div>
    <form action="{{ url('/transaksi/'.$transaksi->id) }}" method="POST">
        @csrf
        @include('transaksi.form', ['transaksi' => $transaksi])
        <button type="submit" class="btn btn-gold">Update</button>
    </form>
</div>
@endsection
