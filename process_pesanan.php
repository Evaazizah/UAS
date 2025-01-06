<?php
session_start();

$pesanan = isset($_SESSION['pesanan']) ? $_SESSION['pesanan'] : [];
$validpesanan = array_filter($pesanan, function ($p) {
    return time() - $p['waktu_pesan'] <= 86400;
});

$_SESSION['pesanan'] = $validpesanan;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Pesanan</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <nav class="menu">
        <ul>
            <li><a href="index.html">Beranda</a></li>
            <li><a href="index3.html">Pemesanan</a></li>
            <li><a href="process_pesanan.php">Daftar Pesanan</a></li>
        </ul>
    </nav>
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
                    <th>Sisa Waktu</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($validpesanan as $p): ?>
                    <tr>
                        <td><?= $p['nama']; ?></td>
                        <td><?= $p['penerbangan']; ?></td>
                        <td><?= $p['tanggal']; ?></td>
                        <td><?= $p['jam']; ?></td>
                        <td><?= $p['jumlah_tiket']; ?></td>
                        <td>Rp. <?= number_format($p['nama'], 0, ',', '.'); ?></td>
                        <td>
                            <span class="time" data_endtime="<?= $p['waktu_pesan'] + 86400; ?>"></span>
                        </td>
                    </tr>
                    <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <a href="index.html" class="btn">Kembali Keberanda</a>
</body>
</html>