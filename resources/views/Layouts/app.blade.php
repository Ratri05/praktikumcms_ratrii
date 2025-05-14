<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Bioskop</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f9f6ef;
            color: #333;
        }
        .navbar {
            background-color: #D4AF37;
        }
        .navbar-brand, .nav-link, footer {
            color: white !important;
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
