@extends('layout')

@section('content')
<div class="content">
    <h2>Daftar Pesanan</h2>
    <table border="1">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Penerbangan</th>
                <th>Tanggal</th>
                <th>Jam</th>
                <th>Jumlah Tiket</th>
                <th>Total Harga</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($pesanan as $p)
            <tr>
                <td>{{ $p['name'] }}</td>
                <td>{{ $p['flight'] }}</td>
                <td>{{ $p['date'] }}</td>
                <td>{{ $p['time'] }}</td>
                <td>{{ $p['seats'] }}</td>
                <td>Rp. {{ number_format($p['total_price'], 0, ',', '.') }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
