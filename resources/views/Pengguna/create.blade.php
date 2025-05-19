@extends('layouts.app')

@section('content')

<div class="container py-4"> <h2>Tambah Pengguna</h2> @include('pengguna.form', ['action' => route('pengguna.store'), 'method' => 'POST', 'submit' => 'Simpan']) </div> @endsection