<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Sistem Bioskop')</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Font Bioskop -->
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@700&display=swap" rel="stylesheet">

    <style>
        body {
            background-color: #121212;
            color: #f8f9fa;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        .navbar {
            background-color: #1a1a1a;
            border-bottom: 2px solid gold;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.7);
        }

        .navbar-brand {
            font-family: 'Cinzel', serif;
            color: gold !important;
            font-size: 1.5rem;
        }

        .nav-link {
            color: #f0e68c !important;
            font-weight: 500;
            transition: 0.3s ease;
        }

        .nav-link:hover {
            color: gold !important;
            transform: scale(1.05);
        }

        .btn-gold {
            background-color: #D4AF37;
            color: white;
            border: none;
        }

        .btn-gold:hover {
            background-color: #B89B2E;
            color: white;
        }

        .card-header.bg-gold {
            background-color: #D4AF37;
            color: white;
        }

        footer {
            background-color: #1a1a1a;
            color: #f5f5f5;
            text-align: center;
            padding: 20px 0;
            border-top: 2px solid gold;
        }

        a {
            text-decoration: none;
        }

        main.py-4 {
            padding-bottom: 40px;
        }
    </style>
</head>
<body>

    @include('partials.navbar')

    <main class="py-4">
        @yield('content')
    </main>

    @include('partials.footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
