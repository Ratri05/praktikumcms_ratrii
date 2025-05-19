@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Detail Film</h1>

    <table border="1" cellpadding="10" cellspacing="0" width="50%">
        <tr>
            <th>ID</th>
            <td>{{ $film->id }}</td>
        </tr>
        <tr>
            <th>Judul</th>
            <td>{{ $film->judul }}</td>
        </tr>
        <tr>
            <th>Durasi</th>
            <td>{{ $film->durasi }} menit</td>
        </tr>
        <tr>
            <th>Sutradara</th>
            <td>{{ $film->sutradara }}</td>
        </tr>
        <tr>
            <th>Pemeran Utama</th>
            <td>{{ $film->pemeran_utama }}</td>
        </tr>
        <tr>
            <th>Bahasa</th>
            <td>{{ $film->bahasa }}</td>
        </tr>
        <tr>
            <th>Tanggal Rilis</th>
            <td>{{ $film->tanggal_rilis->format('d-m-Y') }}</td>
        </tr>
    </table>

    <br>
    <a href="{{ route('films.index') }}">Kembali ke Daftar Film</a>
</div>
@endsection
