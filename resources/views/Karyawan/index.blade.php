@extends('layouts.app')

@section('content')
<<<<<<< HEAD
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
=======
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Daftar Karyawan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #fdf6e3;
            color: #333;
        }
        .header {
            background-color: #D4AF37;
            padding: 20px;
            color: white;
            text-align: center;
        }
        .btn-gold {
            background-color: #D4AF37;
            color: white;
        }
        .btn-gold:hover {
            background-color: #b89b2e;
        }
        .table thead {
            background-color: #f1e4b3;
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>Daftar Karyawan</h1>
    </div>

    <div class="container mt-4">
        <a href="{{ url('/karyawan/create') }}" class="btn btn-gold mb-3">Tambah Karyawan</a>
        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>Posisi</th>
                    <th>Jadwal Kerja</th>
                    <th>No. Telepon</th>
                    <th>Alamat</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($karyawan as $k)
                    <tr>
                        <td>{{ $k['nama'] }}</td>
                        <td>{{ $k['posisi'] }}</td>
                        <td>{{ $k['jadwal_kerja'] }}</td>
                        <td>{{ $k['no_telepon'] }}</td>
                        <td>{{ $k['alamat'] }}</td>
                        <td>
                            <a href="{{ url('/karyawan/'.$k['id']) }}" class="btn btn-primary btn-sm">Lihat</a>
                            <a href="{{ url('/karyawan/'.$k['id'].'/edit') }}" class="btn btn-warning btn-sm">Edit</a>
                            <a href="{{ url('/karyawan/'.$k['id'].'/delete') }}" class="btn btn-danger btn-sm">Hapus</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
>>>>>>> 350667786e238237a3b63676329cf4b8de145d41
@endsection