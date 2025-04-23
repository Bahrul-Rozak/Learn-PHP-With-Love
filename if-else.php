<?php
// if else -> t dan f

// if(kondisi){
//     // kode jika kondisi bernilai true
// }else{
//     // kode ini jika kondisi bernilai false
// }

// pengecekan kadauluarsa obat
// nama obat
// tanggal kadaluarsanya

$nama_obat = "Antasida";
$tanggal_kadaluarsa = "2026-04-01";

// ambil tanggal hari ini
$tanggal_sekarang = date('Y-m-d');

if($tanggal_sekarang > $tanggal_kadaluarsa){
    echo "Obat $nama_obat sudah kadaluarsa";
}else{
    echo "Obat $nama_obat masih layak digunakan";
}

// validasi email dan password
$akun_email = "ratna@gmail.com";
$akun_password = "ratnacantik123";

// simulasi input
$input_email = "ratna@gmail.com";
$input_password = "ratnacantik123";

// if else validasi

if($input_email == $akun_email && $input_password == $akun_password){
    echo "Login berhasil. Selamat datang di sistem";
}else{
    echo "Email atau password salah, coba lagi yaaaa";
}

?>