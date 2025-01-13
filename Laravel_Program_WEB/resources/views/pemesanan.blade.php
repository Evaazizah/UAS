@extends('layout')

@section('content')
<div class="content">
    <h2>Pemesanan Tiket Pesawat</h2>
    <form action="{{ route('proses.pemesanan') }}" method="POST">
        @csrf
        <label for="name">Nama Lengkap:</label>
        <input type="text" id="name" name="name" required>

        <label for="flight">Pilih Penerbangan:</label>
        <select id="flight" name="flight" required>
            <option value="Surabaya - Bali">Surabaya - Bali</option>
            <option value="Surabaya - Jakarta">Surabaya - Jakarta</option>
            <option value="Bali - NTB">Bali - NTB</option>
        </select>

        <label for="date">Tanggal Keberangkatan:</label>
        <input type="date" id="date" name="date" required>

        <label for="time">Jam Penerbangan:</label>
        <select id="time" name="time" required>
            <option value="07:00">07:00</option>
            <option value="12:00">12:00</option>
            <option value="20:00">20:00</option>
        </select>

        <label for="seats">Jumlah Tiket:</label>
        <input type="number" id="seats" name="seats" min="1" required>

        <button type="submit">Pesan</button>
    </form>
</div>
@endsection
