<?php
// && AND True jika semua kondisi True 

// ! NOT Membalik nilai boolean (true-> false, sebaliknya)

// || OR 

// Tampilkan pesan "Obat bisa dijual" jika:
// stock lebih dari 0
// harga kurang dari Rp. 100.0000

$nama_obat = "Ibuprofen";
$stock = 15; // true
$harga = 75000; // true -> true

// Mengecek apakah stock tersedia DAN (AND) harga kurang dari 100 ribu
if($stock > 0 && $harga < 100000){
    echo "Obat '$nama_obat' bisa dijual";
}else{
    echo "Obat '$nama_obat' tidak memenuhi syarat penjualan";
}

// jika stock tidak habis, maka bisa diproses
if(!($stock == 0)){
    echo "Stock obat '$nama_obat' masih ada";
}

// obat bisa dijual jika salah satu dari dua kondisi terpenuhi

if($stock > 0 || $harga < 100000){
    echo "Obat '$nama_obat' Masih layak dijual";
}
?>