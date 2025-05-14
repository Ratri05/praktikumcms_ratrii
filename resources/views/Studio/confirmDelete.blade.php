@extends('layouts.app')

@section('content')
<div class="container">
    <div class="bg-gold p-3 text-white rounded mb-4">
        <h2>Hapus Studio</h2>
    </div>

    <p>Apakah Anda yakin ingin menghapus <strong>Studio {{ $studio->nomor_studio }}</strong>?</p>
    <form action="{{ url('/studio/'.$studio->id.'/delete') }}" method="POST">
        @csrf
        <a href="{{ url('/studio') }}" class="btn btn-secondary">Batal</a>
        <button type="submit" class="btn btn-danger">Ya, Hapus</button>
    </form>
</div>
@endsection
