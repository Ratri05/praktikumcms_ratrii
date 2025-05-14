@extends('layouts.app')
@section('content')
<div class="container">
    <div class="bg-gold p-3 text-white rounded mb-4">
        <h2>Hapus Transaksi</h2>
    </div>
    <p>Yakin ingin menghapus transaksi pada <strong>{{ $transaksi->tanggal_transaksi }}</strong>?</p>
    <form action="{{ url('/transaksi/'.$transaksi->id.'/delete') }}" method="POST">
        @csrf
        <a href="{{ url('/transaksi') }}" class="btn btn-secondary">Batal</a>
        <button type="submit" class="btn btn-danger">Hapus</button>
    </form>
</div>
@endsection
