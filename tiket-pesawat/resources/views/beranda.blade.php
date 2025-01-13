<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beranda</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <header>
        <h1>Selamat Datang di Aplikasi Pemesanan Tiket</h1>
    </header>
    <main>
        <p>Lihat dan pesan tiket pesawat anda</p>
        <a href="{{ route('tickets.index') }}">Lihat Tiket</a>
        <a href="{{ route('tickets.create') }}">Pesan Tiket</a>
    </main>
    <footer>
        <p>&copy; 2025 Pemesanan Tiket</p>
    </footer>
</body>
</html>
