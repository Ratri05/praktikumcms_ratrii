@extends('layouts.app')

@section('title', 'Beranda')

@section('content')
<div class="container">
    <h1>Dashboard Sistem Reservasi Bioskop</h1>

    <div style="display: flex; gap: 20px; flex-wrap: wrap; margin-top: 30px;">
        <a href="{{ route('films.index') }}" class="menu-tile">Film</a>
        <a href="{{ route('karyawan.index') }}" class="menu-tile">Karyawan</a>
        <a href="{{ route('tiket.index') }}" class="menu-tile">Tiket</a>
        <a href="{{ route('transaksi.index') }}" class="menu-tile">Transaksi</a>
        <a href="{{ route('pengguna.index') }}" class="menu-tile">Pengguna</a>
    </div>
</div>

<style>
    .menu-tile {
        flex: 1 1 200px;
        background: #b8860b;
        color: white;
        text-align: center;
        padding: 30px 0;
        border-radius: 8px;
        text-decoration: none;
        font-weight: bold;
        font-size: 1.2rem;
    }
</style>
@endsection
