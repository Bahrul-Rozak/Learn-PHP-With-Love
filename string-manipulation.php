<?php
// paracetamol Tablet
// Nama : Paracetamol | Jenis Sediaan : Tablet

// memisahkan string -> explode() -> delimeter " " 

$nama_obat = "Paracetamol Tablet";
$parts = explode(" ", $nama_obat);

$nama = $parts[0];
$jenis_sediaan = $parts[1];

echo "Nama : $nama | Jenis Sediaan : $jenis_sediaan"; 

$nama_obat = "Amoxicilin 500mg Kapsul";
$parts = explode(" ", $nama_obat);

$nama = implode(" ", $parts);
$jenis_sediaan = array_pop($parts);
echo "Nama : $nama | Jenis Sediaan : $jenis_sediaan"; 

//strlen() -> menghitung string
$nama_obat = "Amoxicilin 500mg Kapsul";
echo strlen($nama_obat);

// strtolower(); // TABLET -> tablet
$nama_obat = "Amoxicilin 500mg Kapsul";
echo strtolower($nama_obat);

// strtoupper(); // tablet -> TABLET
$nama_obat = "Amoxicilin 500mg Kapsul";
echo strtoupper($nama_obat);

// substr() -> ambil sebagian string
$nama_obat = "Amoxicilin 500mg Kapsul";
$sub = substr("Amoxicilin", 0, 10);
echo $sub;

// str_replace() -> ganti sebagian string
$nama_obat = "Amoxicilin 500mg Kapsul";
$replace = str_replace("Kapsul", "Tablet", "Amoxicilin 500mg Tablet");
echo $replace;





?>