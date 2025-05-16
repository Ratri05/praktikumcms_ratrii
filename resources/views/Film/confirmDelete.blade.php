@extends('layouts.app')
@section('content')
<div class="container">
    <div class="bg-gold p-3 text-white rounded mb-4">
        <h2>Hapus Film</h2>
    </div>
    <p>Yakin ingin menghapus film <strong>{{ $film->judul }}</strong>?</p>
    <form action="{{ url('/film/'.$film->id.'/delete') }}" method="POST">
        @csrf
        <a href="{{ url('/film') }}" class="btn btn-secondary">Batal</a>
        <button type="submit" class="btn btn-danger">Hapus</button>
    </form>
</div>
@endsection
