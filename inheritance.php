<?php

class Obat{
    public $nama;
    public $dosis;

    public function infoObat(){
        return "Nama {$this->nama}, Dosis {$this->dosis}";
    }
}

class ObatPenenang extends Obat{
    public $efekSamping;

    public function infoPenenang(){
        return $this->infoObat() . "Efek Samping {$this->efekSamping}";
    }
}
?>