@extends('layouts.app')

@section('content')

<div class="container py-4"> <h2>Edit Pengguna</h2> @include('pengguna.form', [ 'action' => route('pengguna.update', $pengguna->id), 'method' => 'PUT', 'submit' => 'Update', 'pengguna' => $pengguna ]) </div> @endsection