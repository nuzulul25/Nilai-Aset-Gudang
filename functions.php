<?php
// Fungsi untuk mengkalkulasi total nilai aset gudang
function hitungTotalNilaiStok($products) {
    $total = 0;
    foreach ($products as $product) {
        $total += $product['harga'] * $product['stok'];
    }
    return $total;
}