@extends('layouts.app')
@section('content')
<div class="container">
    <div class="bg-gold p-3 text-white rounded mb-4">
        <h2>Daftar Transaksi</h2>
    </div>
    <a href="{{ url('/transaksi/create') }}" class="btn btn-gold mb-3">+ Tambah Transaksi</a>
    <table class="table table-bordered shadow">
        <thead class="bg-gold text-white">
            <tr>
                <th>Tanggal Transaksi</th>
                <th>Metode Pembayaran</th>
                <th>Total Pembayaran</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($transaksi as $t)
            <tr>
                <td>{{ $t->tanggal_transaksi }}</td>
                <td>{{ $t->metode_pembayaran }}</td>
                <td>Rp {{ number_format($t->total_pembayaran, 0, ',', '.') }}</td>
                <td>
                    <a href="{{ url('/transaksi/'.$t->id) }}" class="btn btn-sm btn-primary">Lihat</a>
                    <a href="{{ url('/transaksi/'.$t->id.'/edit') }}" class="btn btn-sm btn-warning">Edit</a>
                    <a href="{{ url('/transaksi/'.$t->id.'/delete') }}" class="btn btn-sm btn-danger">Hapus</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
