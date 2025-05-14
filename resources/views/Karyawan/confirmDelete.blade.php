@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="text-danger">Hapus Karyawan</h2>
    <p>Apakah Anda yakin ingin menghapus <strong>{{ $karyawan['nama'] }}</strong>?</p>
    <form method="POST" action="{{ url('/karyawan/'.$karyawan['id'].'/delete') }}">
        @csrf
        <button type="submit" class="btn btn-danger">Ya, Hapus</button>
        <a href="{{ url('/karyawan') }}" class="btn btn-secondary">Batal</a>
    </form>
</div>
@endsection
