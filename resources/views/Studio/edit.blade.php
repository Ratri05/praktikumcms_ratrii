@extends('layouts.app')

@section('content')
<div class="container">
    <div class="bg-gold p-3 text-white rounded mb-4">
        <h2>Edit Studio</h2>
    </div>

    <form action="{{ url('/studio/'.$studio->id) }}" method="POST">
        @csrf
        @include('studio.form', ['studio' => $studio])
        <button type="submit" class="btn btn-gold">Update</button>
    </form>
</div>
@endsection
