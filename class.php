<?php
class Obat{
    // property 
    public $nama;
    public $harga;
    public $stock;

    // constructor
    public function __construct($nama, $harga, $stock){
        $this->nama = $nama;
        $this->harga = $harga;
        $this->stock = $stock;
    }

    // method
    public function tampilkanInfo(){
        echo "Nama Obat : {$this->nama} <br>";
        echo "Harga Obat : {$this->harga} <br>";
        echo "Stock Obat : {$this->stock} <br>";
    }
}

$obat1 = new Obat("Paracetamol", 5000, 100);
$obat2 = new Obat("Amoxicilin", 5000, 100);
$obat3 = new Obat("Antasida", 5000, 100);
$obat4 = new Obat("OBH", 5000, 100);
$obat5 = new Obat("Vitamin D", 5000, 100);

$obat1->tampilkanInfo();
$obat2->tampilkanInfo();
$obat3->tampilkanInfo();
$obat4->tampilkanInfo();
$obat5->tampilkanInfo();

?>