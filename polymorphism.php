<?php
class Obat{
    public function caraPakai(){
        echo "Cara pakai umum untuk semua obat <br>";
    }
}

// child class
class ObatTablet extends Obat{
    public function caraPakai()
    {
        echo "Minum obat tablet dengan Air <br>";
    }
}

// child class
class ObatSyrup extends Obat{
    public function caraPakai()
    {
        echo "Kocok Terlebih Dahulu <br>";
    }
}

// child class
class ObatKapsul extends Obat{
    public function caraPakai()
    {
        echo "Telan Kapsul Utuh <br>";
    }
}

function instruksi(Obat $obat){
    $obat->caraPakai();
}

$obat1 = new ObatTablet();
$obat2 = new ObatSyrup();

instruksi($obat1);
instruksi($obat2);
?>
