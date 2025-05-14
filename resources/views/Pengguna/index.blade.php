@extends('layouts.app')
@section('content')
<div class="container">
    <div class="bg-gold p-3 text-white rounded mb-4">
        <h2>Daftar Pengguna</h2>
    </div>
    <a href="{{ url('/pengguna/create') }}" class="btn btn-gold mb-3">+ Tambah Pengguna</a>
    <table class="table table-bordered shadow">
        <thead class="bg-gold text-white">
            <tr>
                <th>Nama</th>
                <th>Email</th>
                <th>No Telepon</th>
                <th>Alamat</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($pengguna as $p)
            <tr>
                <td>{{ $p->nama }}</td>
                <td>{{ $p->email }}</td>
                <td>{{ $p->no_telepon }}</td>
                <td>{{ $p->alamat }}</td>
                <td>
                    <a href="{{ url('/pengguna/'.$p->id) }}" class="btn btn-sm btn-primary">Lihat</a>
                    <a href="{{ url('/pengguna/'.$p->id.'/edit') }}" class="btn btn-sm btn-warning">Edit</a>
                    <a href="{{ url('/pengguna/'.$p->id.'/delete') }}" class="btn btn-sm btn-danger">Hapus</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
