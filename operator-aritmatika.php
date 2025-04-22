<?php
// penjumlahan +
// $a = 1;
// $b = 2;
// echo $a + $b;

// pengurangan -

// perkalian x *

// pembagian /

// modulus %

// Hitung Total Harga Obat dengan Diskon 10%
// Rp.20000
// Jumlah beli : 3
// Diskon : 10% 

// Total Harga = Harga Satuan * jumlah beli
// Diskon = Total Harga * 10 %
// Total Bayar = Total Harga - Diskon

$harga_satuan = 20000; // Harga 1 obat
$jumlah_beli = 3; //Jumlah obat yang dibeli 0leh customer

// Hitung total sebelum diskon
$total_sebelum_diskon = $harga_satuan * $jumlah_beli;

// Hitung diskon 10%
$diskon = $total_sebelum_diskon * 0.10;

// Hitung total yang harus dibayar
$total_bayar = $total_sebelum_diskon - $diskon;

// Output

echo "Harga Satuan Obat: Rp $harga_satuan<br>";
echo "Jumlah Beli : $jumlah_beli<br>";
echo "Total Sebelum Diskon: Rp $total_sebelum_diskon<br>";
echo "Diskon 10%: Rp $diskon<br>";
echo "Total Bayar Setelah Diskon: Rp $total_bayar<br>";


?>