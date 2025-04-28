<?php

abstract class Obat{
    protected $nama;
    protected $jenis;
    protected $dosis;

    public function __construct($nama, $jenis, $dosis)
    {
        $this->nama = $nama;
        $this-> jenis = $jenis;
        $this->dosis = $dosis;
    }

    abstract public function tampilkanDetailObat();
}

class ObatTablet extends Obat{
    private $warnaTablet;

    public function __construct($nama, $jenis, $dosis, $warnaTablet)
    {
        parent::__construct($nama, $jenis, $dosis);
        $this->warnaTablet = $warnaTablet;
        
    }

    public function tampilkanDetailObat()
    {
        echo "Nama Obat : { $this->nama } <br>";
        echo "Jenis Obat : { $this->jenis } <br>";
        echo "Dosis Obat : { $this->dosis } <br>";
        echo "Warna Obat : { $this->warnaTablet } <br>";
    }
}

$obat1 = new ObatTablet("PCT", "Tablet", "3x Sehari", "Putiih");
$obat1->tampilkanDetailObat();

?>