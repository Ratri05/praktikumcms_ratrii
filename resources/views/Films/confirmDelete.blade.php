@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Konfirmasi Hapus Film</h1>

    <p>Apakah Anda yakin ingin menghapus film berikut?</p>

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

    <form action="{{ route('films.destroy', $film->id) }}" method="POST" style="margin-top: 20px;">
        @csrf
        @method('DELETE')

        <button type="submit" style="background-color: red; color: white; padding: 10px 20px; border: none; cursor: pointer;">
            Hapus
        </button>
        <a href="{{ route('films.index') }}" style="margin-left: 15px;">Batal</a>
    </form>
</div>
@endsection
