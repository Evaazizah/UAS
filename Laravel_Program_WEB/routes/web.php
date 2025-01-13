<?php

use App\Http\Controllers\PemesananController;

Route::get('/', function () {
    return view('index');
});

Route::get('/', [PemesananController::class, 'index'])->name('beranda');
Route::get('/pemesanan', [PemesananController::class, 'formPemesanan'])->name('form.pemesanan');
Route::post('/pemesanan', [PemesananController::class, 'prosesPemesanan'])->name('proses.pemesanan');
Route::get('/daftar-pesanan', [PemesananController::class, 'daftarPesanan'])->name('daftar.pesanan');