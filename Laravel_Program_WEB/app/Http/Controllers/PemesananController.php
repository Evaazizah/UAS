<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class PemesananController extends Controller
{
    public function index()
    {
        return view('beranda');
    }

    public function formPemesanan()
    {
        return view('pemesanan');
    }

    public function prosesPemesanan(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'flight' => 'required|string',
            'date' => 'required|date',
            'time' => 'required|string',
            'seats' => 'required|integer|min:1',
        ]);

        $prices = [
            "Surabaya - Bali" => 500000,
            "Surabaya - Jakarta" => 800000,
            "Bali - NTB" => 1000000,
        ];

        $data['total_price'] = $data['seats'] * $prices[$data['flight']];
        $data['waktu_pesan'] = time();

        $pesanan = Session::get('pesanan', []);
        $pesanan[] = $data;
        Session::put('pesanan', $pesanan);

        return redirect()->route('daftar.pesanan');
    }

    public function daftarPesanan()
    {
        $pesanan = Session::get('pesanan', []);
        $validPesanan = array_filter($pesanan, function ($p) {
            return time() - $p['waktu_pesan'] <= 86400;
        });

        Session::put('pesanan', $validPesanan);

        return view('daftar_pesanan', ['pesanan' => $validPesanan]);
    }
}
