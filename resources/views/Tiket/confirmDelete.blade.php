@extends('layouts.app')
@section('content')
<div class="container">
    <div class="bg-gold p-3 text-white rounded mb-4">
        <h2>Hapus Tiket</h2>
    </div>
    <p>Yakin ingin menghapus tiket <strong>{{ $tiket->nomor_kursi }}</strong>?</p>
    <form action="{{ url('/tiket/'.$tiket->id.'/delete') }}" method="POST">
        @csrf
        <a href="{{ url('/tiket') }}" class="btn btn-secondary">Batal</a>
        <button type="submit" class="btn btn-danger">Hapus</button>
    </form>
</div>
@endsection
