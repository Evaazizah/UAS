<?php
session_start();
$name = htmlspecialchars($_POST['name']);
$gender = htmlspecialchars($_POST['gender']);
$flight = htmlspecialchars($_POST['flight']);
$date = htmlspecialchars($_POST['date']);
$time = htmlspecialchars($_POST['time']);
$seats = (int)$_POST['seats'];

$prices = [
    "Surabaya - Bali" => 500000,
    "Surabaya - Jakarta" => 800000,
    "Bali - NTB" => 1000000,
];

$total_price = $seats * $prices[$flight];
if (!isset($_SESSION['pesanan'])) {
    $_SESSION['pesanan'] = [];
}

$_SESSION['pesanan'][] = [
    'nama' => $name,
    'penerbangan' => $flight,
    'tanggal' => $date,
    'jam' => $time,
    'jumlah_tiket' => $seats,
    'total_harga' => $total_price,
    'waktu_pesan' => time(),
];

header("location: process_pesanan.php");
exit();
?>