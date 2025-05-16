@extends('layouts.app')
@section('content')
<div class="container">
    <div class="bg-gold p-3 text-white rounded mb-4">
        <h2>Detail Transaksi</h2>
    </div>
    <ul class="list-group">
        <li class="list-group-item"><strong>Tanggal Transaksi:</strong> {{ $transaksi->tanggal_transaksi }}</li>
        <li class="list-group-item"><strong>Metode Pembayaran:</strong> {{ $transaksi->metode_pembayaran }}</li>
        <li class="list-group-item"><strong>Total Pembayaran:</strong> Rp {{ number_format($transaksi->total_pembayaran, 0, ',', '.') }}</li>
    </ul>
    <a href="{{ url('/transaksi') }}" class="btn btn-secondary mt-3">Kembali</a>
</div>
@endsection
