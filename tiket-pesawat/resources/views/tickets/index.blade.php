<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Tiket</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <header>
        <h1>Daftar Tiket Pesawat</h1>
    </header>
    <main>
        <a href="{{ route('tickets.create') }}">Pesan Tiket</a>
        @if (session('success'))
            <p>{{ session('success') }}</p>
        @endif
        <table>
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Tujuan</th>
                    <th>Tanggal Keberangkatan</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($tickets as $ticket)
                    <tr>
                        <td>{{ $ticket->name }}</td>
                        <td>{{ $ticket->email }}</td>
                        <td>{{ $ticket->destination }}</td>
                        <td>{{ $ticket->departure_date }}</td>
                        <td>
                            <a href="{{ route('tickets.edit', $ticket->id) }}">Edit</a>
                            <div class="delete-button-container">
                                <form action="{{ route('tickets.destroy', $ticket->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn-delete">Hapus</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </main>
    <footer>
        &copy; 2025 Tiket Pesawat. All rights reserved.
    </footer>
</body>
</html>