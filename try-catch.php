<?php
function validasiHarga($harga){
    if($harga <= 0){
        throw new Exception("Harga obat tidak valid! harus lebih besar dari Rp 0");
    }

    return true; // harga valid
}

try{
    // misalnya, harga obat yang dimasukkan user
    $hargaObat = 100;

    // validasi harga obat
    validasiHarga($hargaObat);
    echo "Harga Obat Valid" . $hargaObat;
}catch(Exception $e){
    // Menampilkan pesan error, jika harga obat tidak valid
    echo "Terjadi kesalahan" . $e->getMessage();
}
?>