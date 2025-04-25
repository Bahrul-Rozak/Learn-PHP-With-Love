<?php
// while(kondisi){
//     // blok kode yang akan diulangg
// }

$counter = 1;

while($counter <= 5){
    echo "Ini perulangan ke $counter <br>";
    $counter++;
}

// Tampilkan stock obat yang ada di apotek selama masih ada sisa
// kita punya sebuah obat bernama "PCT"
// total stock 10 strip
// setiap transaksasi pembelian akan - 1 strip
// kita ingin menampilkan informasi "Stock masih tersedia" selama stock belum habis

$nama_obat = "Paracetamol";
$stock_obat = 10;

while($stock_obat > 0){
    echo "Obat: $nama_obat - Stock Tersisa: $stock_obat <br>";
    $stock_obat--;
}

echo "Stock obat $nama_obat sudah habis";
?>