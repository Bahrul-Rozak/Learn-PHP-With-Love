<?php
// local scope
function cekStockObat(){
    $stock = 100; // ini variabel local
    echo "Stock obat di dalam fungsi : $stock <br>";
}

cekStockObat();

// echo "Stock obat di dalam fungsi : $stock <br>";


// Global Scope -> global

$stockObatGlobal = 500; // ini variabel global

function cekStockGlobal(){
    global $stockObatGlobal;
    echo "Stock obat dari gudang pusat: $stockObatGlobal <br>";
}

cekStockGlobal();

// Static Scope -> static

function hitungStock(){
    static $jumlah = 0; // static variabel
    $jumlah++;
    echo "Jumlah Obat dikelola saat ini : $jumlah <br>";
}

hitungStock();
hitungStock();
hitungStock();

?>