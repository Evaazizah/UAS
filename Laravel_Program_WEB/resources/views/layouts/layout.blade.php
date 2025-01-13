<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pemesanan Tiket Pesawat</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <nav class="menu">
        <ul>
            <li><a href="{{ route('beranda') }}">Beranda</a></li>
            <li><a href="{{ route('form.pemesanan') }}">Pemesanan</a></li>
            <li><a href="{{ route('daftar.pesanan') }}">Daftar Pesanan</a></li>
        </ul>
    </nav>
    @yield('content')
    <footer>
        <p>2024-2025 @pesawat.com</p>
    </footer>
</body>
</html>
