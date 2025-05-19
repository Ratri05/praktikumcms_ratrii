@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Daftar Film</h1>

    @if(session('success'))
        <div style="color: green; margin-bottom: 20px;">
            {{ session('success') }}
        </div>
    @endif

    <a href="{{ route('films.create') }}" style="margin-bottom: 15px; display: inline-block;">
        <button>Tambah Film Baru</button>
    </a>

    <table border="1" cellpadding="10" cellspacing="0" width="100%">
        <thead style="background-color: gold;">
            <tr>
                <th>ID</th>
                <th>Judul</th>
                <th>Durasi (menit)</th>
                <th>Sutradara</th>
                <th>Pemeran Utama</th>
                <th>Bahasa</th>
                <th>Tanggal Rilis</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse($films as $film)
                <tr>
                    <td>{{ $film->id }}</td>
                    <td>{{ $film->judul }}</td>
                    <td>{{ $film->durasi }}</td>
                    <td>{{ $film->sutradara }}</td>
                    <td>{{ $film->pemeran_utama }}</td>
                    <td>{{ $film->bahasa }}</td>
                    <td>{{ $film->tanggal_rilis->format('d-m-Y') }}</td>
                    <td>
                        <a href="{{ route('films.show', $film->id) }}">Lihat</a> |
                        <a href="{{ route('films.edit', $film->id) }}">Edit</a> |
                        <form action="{{ route('films.destroy', $film->id) }}" method="POST" style="display:inline;" onsubmit="return confirm('Yakin ingin hapus film ini?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" style="background:none; border:none; color:red; cursor:pointer;">Hapus</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="8" style="text-align:center;">Belum ada data film.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
