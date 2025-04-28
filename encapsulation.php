<?php
// public 

// protected

// private

class Obat{
    private $nama;
    private $harga;
    private $stock;

    // constructor
    public function __construct($nama, $harga, $stock)
    {
        $this->nama = $nama;
        $this->harga = $harga;
        $this->stock = $stock;
    }

    // getter untuk nama
    public function getNama(){
        return $this->nama;
    }

    // getter untuk harga
    public function getHarga(){
        return $this->harga;
    }

    // setter untuk harga dengan validasi
    public function setHarga($hargaBaru){
        if($hargaBaru > 0){
            $this->harga = $hargaBaru;
        }else{
            echo "Harga obat tidak valid! Harus lebih dari 0";
        }
    }

    // getter untuk stock
    public function getStock(){
        return $this->stock;
    }

    // setter untuk stock dengan validasi
    public function setStock($stockBaru){
        if($stockBaru >= 0){
            $this->stock = $stockBaru;
        }else{
            echo "Stock Obat Tidak Boleh negatif";
        }

    }
}

    // membuat objeck baru
    $paracetamol = new Obat("Paracetamol", 5000, 100);

    // menampilkan data obat
    echo "Nama Obat : " . $paracetamol->getNama() . "<br>";
    echo "Harga Obat : " . $paracetamol->getHarga() . "<br>";
    echo "Stock Obat : " . $paracetamol->getStock() . "<br>";

    // mengubah harga
    $paracetamol->setHarga(5500);

    // mengubah stock
    $paracetamol->setStock(120);

    // menampilkan data obat setelah perubahan
    echo "Nama Obat : " . $paracetamol->getNama() . "<br>";
    echo "Harga Obat : " . $paracetamol->getHarga() . "<br>";
    echo "Stock Obat : " . $paracetamol->getStock() . "<br>";

?>