@extends('layouts.app')

@section('content')

<div class="container py-4"> <h2 class="mb-4">Daftar Pengguna</h2> <a href="{{ route('pengguna.create') }}" class="btn btn-success mb-3">Tambah Pengguna</a>
@if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
@endif

<table class="table table-bordered">
    <thead class="table-dark">
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
                <a href="{{ route('pengguna.show', $p->id) }}" class="btn btn-info btn-sm">Lihat</a>
                <a href="{{ route('pengguna.edit', $p->id) }}" class="btn btn-warning btn-sm">Edit</a>
                <a href="{{ route('pengguna.confirmDelete', $p->id) }}" class="btn btn-danger btn-sm">Hapus</a>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
</div> @endsection