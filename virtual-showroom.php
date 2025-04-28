<?php
class Mobil{
    public $nama;

    public function __construct($nama){
        $this->nama = $nama;
    }

    public function jalan(){
        echo "{ $this->nama } sedang berjalan di jalan umum";
    }

}

class Camry extends Mobil{
    public function jalan(){
        echo "{ $this->nama } sedang berjalan di jalan umum";
    }
}

class C200 extends Mobil{
    public function jalan(){
        echo "{ $this->nama } sedang berjalan di jalan umum";
    }
}

class Audi extends Mobil{
    public function jalan(){
        echo "{ $this->nama } sedang berjalan di jalan umum";
    }
}

function testDrive(Mobil $mobil){
    $mobil->jalan();
}

$camry = new Camry("Toyota Camry");

testDrive($camry);
?>