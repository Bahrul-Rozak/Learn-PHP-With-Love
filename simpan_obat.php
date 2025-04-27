<?php
// ambil data dari form

$nama = $_POST['nama_obat'];
$harga = $_POST['harga_obat'];
$deskripsi = $_POST['deskripsi'];

// format data obat
$data_obat = "Nama: $nama | Harga : $harga | Deskripsi $deskripsi \n";

// buka file dalam mode append
$file = fopen("data_obat.txt", "a");

if($file){
    // tulis data ke dalma file data_obat.txt
    fwrite($file, $data_obat);

    // close
    fclose($file);

    echo "Data Obat Berhasil Disimpan";
}else{
    echo "Gagal Membuka File!";
}
?>