@extends('layouts.app')
@section('content')
<div class="container">
    <div class="bg-gold p-3 text-white rounded mb-4">
        <h2>Daftar Film</h2>
    </div>
    <a href="{{ url('/film/create') }}" class="btn btn-gold mb-3">+ Tambah Film</a>
    <div class="row">
        @foreach($film as $f)
        <div class="col-md-4">
            <div class="card mb-4 shadow">
                <div class="card-header bg-gold text-white">
                    <strong>{{ $f->judul }}</strong>
                </div>
                <div class="card-body">
                    <p><strong>Durasi:</strong> {{ $f->durasi }} menit</p>
                    <p><strong>Sutradara:</strong> {{ $f->sutradara }}</p>
                    <p><strong>Bahasa:</strong> {{ $f->bahasa }}</p>
                    <a href="{{ url('/film/'.$f->id) }}" class="btn btn-sm btn-primary">Lihat</a>
                    <a href="{{ url('/film/'.$f->id.'/edit') }}" class="btn btn-sm btn-warning">Edit</a>
                    <a href="{{ url('/film/'.$f->id.'/delete') }}" class="btn btn-sm btn-danger">Hapus</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
