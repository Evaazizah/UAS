<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pesan Tiket</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <header>
        <h1>Pesan Tiket Baru</h1>
    </header>
    <main>
        <form action="{{ route('tickets.store') }}" method="POST">
            @csrf
            <label for="name">Nama:</label>
            <input type="text" name="name" id="name" required>
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" required>
            <label for="destination">Tujuan:</label>
            <input type="text" name="destination" id="destination" required>
            <label for="departure_date">Tanggal Keberangkatan:</label>
            <input type="date" name="departure_date" id="departure_date" required>
            <button type="submit">Simpan</button>
        </form>
    </main>
    <footer>
        &copy; 2025 Tiket Pesawat. All rights reserved.
    </footer>
</body>
</html>
