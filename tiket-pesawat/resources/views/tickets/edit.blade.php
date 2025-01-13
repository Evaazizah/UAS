<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Tiket</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <h1>Edit Tiket</h1>
    <form action="{{ route('tickets.update', $ticket->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="name">Nama:</label>
        <input type="text" name="name" id="name" value="{{ $ticket->name }}" required><br>
        <label for="email">Email:</label>
        <input type="email" name="email" id="email" value="{{ $ticket->email }}" required><br>
        <label for="destination">Tujuan:</label>
        <input type="text" name="destination" id="destination" value="{{ $ticket->destination }}" required><br>
        <label for="departure_date">Tanggal Keberangkatan:</label>
        <input type="date" name="departure_date" id="departure_date" value="{{ $ticket->departure_date }}" required><br>
        <button type="submit">Simpan</button>
    </form>
</body>
</html>