@extends('layouts.app')
@section('content')
<div class="container">
    <div class="bg-gold p-3 text-white rounded mb-4">
        <h2>Hapus Pengguna</h2>
    </div>
    <p>Yakin ingin menghapus pengguna <strong>{{ $pengguna->nama }}</strong>?</p>
    <form action="{{ url('/pengguna/'.$pengguna->id.'/delete') }}" method="POST">
        @csrf
        <a href="{{ url('/pengguna') }}" class="btn btn-secondary">Batal</a>
        <button type="submit" class="btn btn-danger">Hapus</button>
    </form>
</div>
@endsection
