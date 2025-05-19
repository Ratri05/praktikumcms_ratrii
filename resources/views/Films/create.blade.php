@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Tambah Film Baru</h1>

    @if ($errors->any())
        <div style="color: red;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('films.store') }}" method="POST">
        @csrf
        <label>Judul:</label><br>
        <input type="text" name="judul" value="{{ old('judul') }}" required><br><br>

        <label>Durasi (menit):</label><br>
        <input type="number" name="durasi" value="{{ old('durasi') }}" required><br><br>

        <label>Sutradara:</label><br>
        <input type="text" name="sutradara" value="{{ old('sutradara') }}" required><br><br>

        <label>Pemeran Utama:</label><br>
        <input type="text" name="pemeran_utama" value="{{ old('pemeran_utama') }}" required><br><br>

        <label>Bahasa:</label><br>
        <input type="text" name="bahasa" value="{{ old('bahasa') }}" required><br><br>

        <label>Tanggal Rilis:</label><br>
        <input type="date" name="tanggal_rilis" value="{{ old('tanggal_rilis') }}" required><br><br>

        <button type="submit">Simpan</button>
        <a href="{{ route('films.index') }}" style="margin-left: 10px;">Batal</a>
    </form>
</div>
@endsection
