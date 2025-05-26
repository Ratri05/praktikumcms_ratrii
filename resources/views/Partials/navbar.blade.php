<nav class="navbar navbar-expand-lg navbar-dark custom-navbar">
    <div class="container">
        <a class="navbar-brand d-flex align-items-center" href="/">
            <img src="https://img.icons8.com/emoji/36/000000/clapper-board-emoji.png" alt="Logo" class="me-2">
            <span class="fw-bold text-gold">Sistem Bioskop</span>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link" href="/karyawan">👥 Karyawan</a></li>
                <li class="nav-item"><a class="nav-link" href="/studio">🏟️ Studio</a></li>
                <li class="nav-item"><a class="nav-link" href="/films">🎞️ Film</a></li>
                <li class="nav-item"><a class="nav-link" href="/pengguna">🧑‍💻 Pengguna</a></li>
                <li class="nav-item"><a class="nav-link" href="/tiket">🎟️ Tiket</a></li>
                <li class="nav-item"><a class="nav-link" href="/transaksi">💳 Transaksi</a></li>
            </ul>
        </div>
    </div>
</nav>

<style>
    .custom-navbar {
        background-color: #1a1a1a;
        border-bottom: 2px solid gold;
        box-shadow: 0 2px 10px rgba(0,0,0,0.7);
    }

    .navbar-brand span.text-gold {
        color: gold;
        font-family: 'Cinzel', serif;
        font-size: 1.4rem;
    }

    .nav-link {
        color: #ffffffcc !important;
        font-weight: 500;
        transition: color 0.3s, transform 0.3s;
        font-size: 1.05rem;
    }

    .nav-link:hover {
        color: gold !important;
        transform: scale(1.05);
    }

    .navbar-toggler {
        border: none;
    }

    .navbar-toggler-icon {
        background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 30 30' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath stroke='gold' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 7h22M4 15h22M4 23h22'/%3E%3C/svg%3E");
    }
</style>
