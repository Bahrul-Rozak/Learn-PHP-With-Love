<?php
// mengatur agar semua dilaporkan
error_reporting(E_ALL);
ini_set('display_errors', 1);

// fungsi untuk validasi harga obat
function validasiHarga($harga){
    if(!is_numeric($harga) || $harga <= 0){
        return false; // jika harga tidak valid
    }

    return true;
}

// Misalnya, user memasukkan harga obat
$hargaObat = "abc"; // -> validasi dibagian form inputnya, agar kejadian seperti is_numeric tidak terjadi dan mengakibatkan sebuah anomali

if(!validasiHarga($hargaObat)){
    echo "Harga Obat Tidak Valid! Harus Berupa Angka";
}else{
    echo "Harga Obat Valid". $hargaObat;
}
?>