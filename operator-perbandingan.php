<?php
// true dan false

// sama dengan == membandingkan apakah dua nilai sama, tanpa peduli tipe data
$paracetamol = 5000;
$ibuprofen = 5000;
var_dump($paracetamol == $ibuprofen);

// identik === mengecek nilai dan tipe datanya
$hargaObatA = 5000; // integer
$hargaObatB = "5000"; // string
var_dump($hargaObatA === $hargaObatB);

// != Tidak sama dengan, apakah dua nilai berbeda
$dexamethasone = 20000;
$antasida = 20000; // beda -> false -> true
// true -> false

var_dump($dexamethasone != $antasida);

// !== tidak sama dengan identik, tipe datanya
$obatA = "5000"; // string
$obatB = 5000; // int

var_dump($obatA !== $obatB);

// > lebih besar, ngecek apakah nilai sebelah kiri lebih besar dari kanan
$harga_pct = 8500;
$harga_obh = 7500;

var_dump($harga_pct > $harga_obh);

// < lebih kecil, ngecek apakah nilai sebelah kiri lebih kecil dari kanan

$harga_pct = 6500;
$harga_obh = 7500;


var_dump($harga_pct < $harga_obh);

// >= lebih besar atau sama dengan
$vitamin = 10000;
$kalsium = 10000;
var_dump($vitamin >= $kalsium);

// <= lebih kecil atau sama dengan
$vitamin = 10000;
$kalsium = 10000;
var_dump($vitamin <= $kalsium);

// if else dan switch
?>