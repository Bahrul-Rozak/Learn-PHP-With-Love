<?php
// function namaFungsi(param1, param2, ...){
    // blok kode
//     return $hasil
// }

// Harga obat setelah diskon
// obat punya harga normal, misalkan 100.000
// diskon diberikan dalam persentase, misalkan 10%
// kita butuh fungsi yang bisa menerima harga asli dan diskon
// lalu mengembalikan harga setelah diskon

function hitungHargaSetelahDiskon($hargaObat, $persenDiskon){
    $jumlahDiskon = $hargaObat * ($persenDiskon / 100);
    $hargaSetelahDiskon = $hargaObat - $jumlahDiskon;

    return $hargaSetelahDiskon;
}

$hargaAwal = 100000;
$diskon = 10;
$hargaAkhir = hitungHargaSetelahDiskon($hargaAwal, $diskon);

echo "Harga setelah diskon : Rp. " . number_format($hargaAkhir, 0, ',','.');

function sayHello($nama, $asal){
    return "Halo nama saya adalah :  $nama dan saya berasal dari $asal";
}

echo sayHello("Ratna", "Tangerang");
?>