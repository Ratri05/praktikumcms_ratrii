@extends('layouts.app')
@section('content')
<div class="container">
    <div class="bg-gold p-3 text-white rounded mb-4">
        <h2>Edit Tiket</h2>
    </div>
    <form action="{{ url('/tiket/'.$tiket->id) }}" method="POST">
        @csrf
        @include('tiket.form', ['tiket' => $tiket])
        <button type="submit" class="btn btn-gold">Update</button>
    </form>
</div>
@endsection
