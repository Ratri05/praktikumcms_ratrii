@extends('layouts.app')
@section('content')
<div class="container">
    <div class="bg-gold p-3 text-white rounded mb-4">
        <h2>Daftar Tiket</h2>
    </div>
    <a href="{{ url('/tiket/create') }}" class="btn btn-gold mb-3">+ Tambah Tiket</a>
    <table class="table table-bordered shadow">
        <thead class="bg-gold text-white">
            <tr>
                <th>Nomor Kursi</th>
                <th>Status</th>
                <th>Harga Tiket</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($tiket as $t)
            <tr>
                <td>{{ $t['nomor_kursi'] }}</td>
                <td>{{ $t['status'] }}</td>
                <td>Rp {{ number_format($t['harga_tiket'], 0, ',', '.') }}</td>
                <td>
                    <a href="{{ url('/tiket/'.$t['id']) }}" class="btn btn-sm btn-primary">Lihat</a>
                    <a href="{{ url('/tiket/'.$t['id'].'/edit') }}" class="btn btn-sm btn-warning">Edit</a>
                    <a href="{{ url('/tiket/'.$t['id'].'/delete') }}" class="btn btn-sm btn-danger">Hapus</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
