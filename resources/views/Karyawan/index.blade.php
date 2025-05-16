@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Daftar Karyawan</h1>
    <a href="{{ route('karyawan.create') }}" class="btn btn-primary mb-3">Tambah Karyawan</a>
    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    <table class="table">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Posisi</th>
                <th>Jadwal Kerja</th>
                <th>No Telepon</th>
                <th>Alamat</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($karyawans as $karyawan)
                <tr>
                    <td>{{ $karyawan->nama }}</td>
                    <td>{{ $karyawan->posisi }}</td>
                    <td>{{ $karyawan->jadwal_kerja }}</td>
                    <td>{{ $karyawan->no_telepon }}</td>
                    <td>{{ $karyawan->alamat }}</td>
                    <td>
                        <a href="{{ route('karyawan.show', $karyawan->id) }}" class="btn btn-sm btn-info">Detail</a>
                        <a href="{{ route('karyawan.edit', $karyawan->id) }}" class="btn btn-sm btn-warning">Edit</a>
                        <form action="{{ route('karyawan.destroy', $karyawan->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-sm btn-danger" onclick="return confirm('Yakin ingin hapus?')">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection