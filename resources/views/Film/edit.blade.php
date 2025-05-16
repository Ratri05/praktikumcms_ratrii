@extends('layouts.app')
@section('content')
<div class="container">
    <div class="bg-gold p-3 text-white rounded mb-4">
        <h2>Edit Film</h2>
    </div>
    <form action="{{ url('/film/'.$film->id) }}" method="POST">
        @csrf
        @include('film.form', ['film' => $film])
        <button type="submit" class="btn btn-gold">Update</button>
    </form>
</div>
@endsection
