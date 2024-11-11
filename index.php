<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $flight = htmlspecialchars($_POST['flight']);
    $date = htmlspecialchars($_POST['date']);
    $seast = (int)$_POST['seats'];

    echo"<h2>Pesanan Anda Berhasil!</h2>";
    echo"<p>Nama: $name</p>";
    echo"<p>Penerbangan: $flight</p>";
    echo "<p>Tanggal Keberangkatan: $date</p>";
    echo "<p>Jumlah Tiket: $seats</p>";
}
?>