@extends('layouts.app')

@section('title', 'Beranda')

@section('content')
<div class="cinema-home">
    <div class="cinema-header">
        <img src="https://img.icons8.com/emoji/48/000000/popcorn-emoji.png" alt="Popcorn" class="popcorn-icon">
        <h1>🎬 Selamat Datang di Sistem Reservasi Bioskop 🍿</h1>
        <p class="tagline">Nikmati pengalaman nonton yang luar biasa!</p>
    </div>

    <div class="menu-grid">
        <a href="{{ route('films.index') }}" class="menu-card">
            <img src="https://img.icons8.com/ios-filled/50/ffffff/movie-projector.png" alt="Film">
            <span>Film</span>
        </a>
        <a href="{{ route('karyawan.index') }}" class="menu-card">
            <img src="https://img.icons8.com/ios-filled/50/ffffff/staff.png" alt="Karyawan">
            <span>Karyawan</span>
        </a>
        <a href="{{ route('tiket.index') }}" class="menu-card">
            <img src="https://img.icons8.com/ios-filled/50/ffffff/ticket.png" alt="Tiket">
            <span>Tiket</span>
        </a>
        <a href="{{ route('transaksi.index') }}" class="menu-card">
            <img src="https://img.icons8.com/ios-filled/50/ffffff/money-transfer.png" alt="Transaksi">
            <span>Transaksi</span>
        </a>
        <a href="{{ route('pengguna.index') }}" class="menu-card">
            <img src="https://img.icons8.com/ios-filled/50/ffffff/user-group-man-man.png" alt="Pengguna">
            <span>Pengguna</span>
        </a>
    </div>
</div>

<style>
    .cinema-home {
        background: linear-gradient(rgba(0, 0, 0, 0.85), rgba(0, 0, 0, 0.9)),
                    url('https://images.unsplash.com/photo-1581905764498-bf6c8f98b3c5?ixlib=rb-4.0.3&auto=format&fit=crop&w=1950&q=80') no-repeat center center;
        background-size: cover;
        color: #fff;
        padding: 40px 20px;
        min-height: 100vh;
    }

    .cinema-header {
        text-align: center;
        margin-bottom: 40px;
    }

    .cinema-header h1 {
        font-size: 2.5rem;
        color: gold;
    }

    .cinema-header .tagline {
        font-style: italic;
        font-size: 1.1rem;
        color: #f5f5f5;
        margin-top: 10px;
    }

    .popcorn-icon {
        width: 48px;
        height: 48px;
        vertical-align: middle;
        margin-bottom: 10px;
    }

    .menu-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(180px, 1fr));
        gap: 25px;
        padding: 0 20px;
    }

    .menu-card {
        background: #b8860b;
        color: white;
        text-decoration: none;
        border-radius: 12px;
        padding: 25px 15px;
        text-align: center;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        box-shadow: 0 4px 12px rgba(0,0,0,0.3);
    }

    .menu-card:hover {
        transform: translateY(-8px);
        box-shadow: 0 6px 16px rgba(0,0,0,0.5);
        background: #daa520;
    }

    .menu-card img {
        margin-bottom: 10px;
        width: 40px;
        height: 40px;
    }

    .menu-card span {
        display: block;
        font-size: 1.1rem;
        font-weight: bold;
    }
</style>
@endsection
