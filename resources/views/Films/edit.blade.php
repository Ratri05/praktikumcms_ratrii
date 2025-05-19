@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Film</h1>

    @if ($errors->any())
        <div style="color: red;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('films.update', $film->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label>Judul:</label><br>
        <input type="text" name="judul" value="{{ old('judul', $film->judul) }}" required><br><br>

        <label>Durasi (menit):</label><br>
        <input type="number" name="durasi" value="{{ old('durasi', $film->durasi) }}" required><br><br>

        <label>Sutradara:</label><br>
        <input type="text" name="sutradara" value="{{ old('sutradara', $film->sutradara) }}" required><br><br>

        <label>Pemeran Utama:</label><br>
        <input type="text" name="pemeran_utama" value="{{ old('pemeran_utama', $film->pemeran_utama) }}" required><br><br>

        <label>Bahasa:</label><br>
        <input type="text" name="bahasa" value="{{ old('bahasa', $film->bahasa) }}" required><br><br>

        <label>Tanggal Rilis:</label><br>
        <input type="date" name="tanggal_rilis" value="{{ old('tanggal_rilis', $film->tanggal_rilis->format('Y-m-d')) }}" required><br><br>

        <button type="submit">Update</button>
        <a href="{{ route('films.index') }}" style="margin-left: 10px;">Batal</a>
    </form>
</div>
@endsection
