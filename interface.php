<?php

// interface NamaInterface{
//     public function namaMethod1();
// }

interface PenyimpananObat {
    public function simpanObat($namaObat, $jumlah);
    public function ambilObat($namaObat, $jumlah);
    public function cekStock($namaObat);
}

class LemariPendingin implements PenyimpananObat{
    private $stock = [];

    public function simpanObat($namaObat, $jumlah)
    {
        echo "Menyimpan $jumlah unit $namaObat di lemari pendingin.....";
        if(isset($this->stock[$namaObat])){
            $this->stock[$namaObat] += $jumlah;
        }else{
            $this->stock[$namaObat] = $jumlah;
        }
    }

    public function ambilObat($namaObat, $jumlah)
    {
        if(isset($this->stock[$namaObat]) && $this->stock[$namaObat] >= $jumlah){
            $this->stock[$namaObat] -= $jumlah;
            echo "Mengambil $jumlah unit $namaObat dari lemari pendingin...";
        }else{
            echo "Stock $namaObat tidak cukup di lemari pendingin";
        }
    }

    public function  cekStock($namaObat)
    {
        $stock = $this->stock[$namaObat] ?? 0;
        echo "Stock $namaObat di lemari pendingin: $stock";
        return $stock;
    }
}

$lemari = new LemariPendingin();
$lemari->simpanObat("Paracetamol", 50);
$lemari->ambilObat("Paracetamol", 10);
$lemari->cekStock("Paracetamol");
?>