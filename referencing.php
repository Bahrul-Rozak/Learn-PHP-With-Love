<?php
// function namaFungsi(&$variabel){

// }

// ubah harga obat langsung dalam fungsi

$hargaObat = 50000;

// fungsi untuk memberikan diskon 20%
function diskonPromoObat(&$harga){
    $harga = $harga * 0.8; // kurangi harga 20%
}

// function diskonObat($harga){
//     return $harga = $harga * 0.8; // kurangi harga 20%
// }

// tampilkan harga sebelum diskon
echo "Harga Sebelum Diskon : Rp" . number_format($hargaObat, 0, ',', ',') . "<br>";

// terapkan diskon
diskonPromoObat($hargaObat);

// tampilkan harga setelah diskon
echo "Harga Setelah Diskon : Rp" . number_format($hargaObat, 0, ',', ',') . "<br>";

?>