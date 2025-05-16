@extends('layouts.app')

@section('content')
<div class="container">
    <div class="bg-gold p-3 text-white rounded mb-4">
        <h2>Daftar Studio</h2>
    </div>

    <a href="{{ url('/studio/create') }}" class="btn btn-gold mb-3">+ Tambah Studio</a>

    <div class="row">
        @foreach($studio as $s)
            <div class="col-md-4">
                <div class="card shadow mb-4">
                    <div class="card-header bg-gold text-white">
                        Studio {{ $s->nomor_studio }}
                    </div>
                    <div class="card-body">
                        <p><strong>Kapasitas:</strong> {{ $s->kapasitas }}</p>
                        <p><strong>Tipe Studio:</strong> {{ $s->tipe_studio }}</p>
                        <a href="{{ url('/studio/'.$s->id) }}" class="btn btn-primary btn-sm">Lihat</a>
                        <a href="{{ url('/studio/'.$s->id.'/edit') }}" class="btn btn-warning btn-sm">Edit</a>
                        <a href="{{ url('/studio/'.$s->id.'/delete') }}" class="btn btn-danger btn-sm">Hapus</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
