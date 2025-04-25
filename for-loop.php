<?php
// for(inisialisasi; kondisi; increment/decrement){
//     // blok kode yang akan diulang
// }

use function PHPSTORM_META\map;

for($i = 1; $i <= 5; $i++){
    echo "Ini perulangan ke - $i <br>";
}

// Menampilkan Daftar Obat
// 1 buat array berisi nama-nama obat
// 2 Gunakan for loop u/ menampilkan daftar obat dengan nomor urut

$obatList = [
    "Paracetamol",
    "Amoxicilin",
    "Cetirizine",
    "Ibuprofen",
    "Omeprazole"
];

echo "<h3>Daftar Obat Yang Tersedia</h3>";
echo "<ol>";
for($i = 0; $i < count($obatList); $i++){
    echo "<li>" . $obatList[$i] . "</li>";
}
echo "</ol>";
?>