<?php
// echo time();

// echo date("d-m-y");

// data and time kombinasi
// $timestamp = time();
// echo date("d M Y, H:i:s", $timestamp);

// menampilkan tanggal kadaluarsa obat

date_default_timezone_set("Asia/Jakarta");
$tanggal_produksi = strtotime("2023-04-27");
$tanggal_kadaluarsa = strtotime("+2 years", $tanggal_produksi);

echo "Tanggal Produksi: " . date("d-m-Y", $tanggal_produksi) . "<br>";
echo "Tanggal Kadauluaras: " . date("d-m-Y", $tanggal_kadaluarsa) . "<br>";


?>