<?php
// Menghubungkan komponen Data dan Processing Layer
require_once 'products.php';
require_once 'functions.php';

// Menghitung total nilai aset gudang
$totalAset = hitungTotalNilaiStok($products);
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Product Information System</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; }
        table { width: 100%; border-collapse: collapse; margin-top: 15px; }
        th, td { border: 1px solid #ddd; padding: 10px; text-align: left; }
        th { background-color: #f4f4f4; }
        /* Style untuk penanda stok kritis (< 3) */
        .stok-kritis { background-color: #f8d7da; color: #721c24; font-weight: bold; }
    </style>
</head>
<body>

    <h2>Product Information System</h2>
    <h3>Total Nilai Aset Gudang: Rp <?= number_format($totalAset, 0, ',', '.'); ?></h3>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama Produk</th>
                <th>Kategori</th>
                <th>Harga</th>
                <th>Stok</th>
                <th>Deskripsi</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($products as $product): ?>
                <?php 
                    // Logika conditional untuk menyaring warna baris jika stok kritis (< 3)
                    $rowClass = ($product['stok'] < 3) ? 'stok-kritis' : '';
                ?>
                <tr class="<?= $rowClass; ?>">
                    <td><?= $product['id']; ?></td>
                    <td><?= $product['nama']; ?></td>
                    <td><?= $product['kategori']; ?></td>
                    <td>Rp <?= number_format($product['harga'], 0, ',', '.'); ?></td>
                    <td><?= $product['stok']; ?></td>
                    <td><?= $product['deskripsi']; ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

</body>
</html>