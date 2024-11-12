<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $flight = htmlspecialchars($_POST['flight']);
    $date = htmlspecialchars($_POST['date']);
    $seats = (int)$_POST['seats'];

    echo "<!DOCTYPE html>
    <html>
    <head>
        <title>Pesanan Anda Berhasil</title>
        <link rel='stylesheet' href='style.css'>
    </head>
    <body>
        <div class='container'>
            <h2>Pesanan Anda Berhasil!</h2>
            <p>Nama : $name</p>
            <p>Penerbangan : $flight</p>
            <p>Tanggal Keberangkatan : $date</p>
            <p>Jumlah Tiket : $seats</p>
        </div>
        <footer>
            <h1>Terima kasih telah bergabung dengan layanan pemesanan tiket kami. Nikmati kemudahan perjalanan dengan berbagai penawaran menarik.</h1>
            <p>2024 @pesawat.com</p>
        </footer>
    </body>
    </html>";
}
?>