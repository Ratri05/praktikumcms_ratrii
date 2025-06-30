@extends('layouts.app')
@if (session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
@endif


@section('title', 'Daftar Karyawan')

@section('content')
<div class="container mt-4">
    <h1 class="text-gold text-center mb-4" style="font-family: 'Cinzel', serif;">🎬 Daftar Karyawan Bioskop</h1>

    <div class="d-flex justify-content-end mb-3">
        <a href="{{ route('karyawan.create') }}" class="btn btn-gold shadow">
            ➕ Tambah Karyawan
        </a>
    </div>

    @if (session('success'))
        <div class="alert alert-success text-center">
            {{ session('success') }}
        </div>
    @endif

    <div class="table-responsive">
        <table class="table table-bordered table-hover text-white" style="background-color: #1e1e1e; border-color: gold;">
            <thead class="bg-dark text-gold">
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
                            <a href="{{ route('karyawan.show', $karyawan->id) }}" class="btn btn-sm btn-info mb-1">👁️ Detail</a>
                            <a href="{{ route('karyawan.edit', $karyawan->id) }}" class="btn btn-sm btn-warning mb-1">✏️ Edit</a>
                            <form action="{{ route('karyawan.destroy', $karyawan->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-sm btn-danger mb-1" onclick="return confirm('Yakin ingin hapus?')">🗑️ Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

<style>
    .text-gold {
        color: gold;
    }

    .btn-gold {
        background-color: #D4AF37;
        color: white;
        font-weight: 600;
    }

    .btn-gold:hover {
        background-color: #b7950b;
        color: white;
    }

    table thead tr {
        border-bottom: 2px solid gold;
    }

    table tbody tr:hover {
        background-color: #2c2c2c;
    }

    .table td, .table th {
        vertical-align: middle;
    }
</style>
@endsection
