<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    // cek apakah form telah disubmit
    if(isset($_POST['obat'])){
        $obat_terpilih = $_POST['obat'];

        // menentukan harga dan deskripsi obat dari yang dipilih tadi
        switch($obat_terpilih){
            case 'paracetamol':
                $harga = "Rp. 10.000";
                $deskripsi = "Obat pereda nyeri dan penurun panas.";
                break;
            case 'ibuprofen':
                 $harga = "Rp. 15.000";
                 $deskripsi = "Obat anti inflamasi dan analgetik.";
                break;
            case 'amoxicilin':
                $harga = "Rp. 20.000";
                $deskripsi = "Anti Biotik";
                break;
            default:
                $harga = "Tidak Tersedia";
                $deskripsi = "Obat Tidak Ditemukan";
                break;
        }

        // menampilkan hasilnya
        echo "<h2>Obat yang kamu pilih: </h2>";
        echo "<p>Nama Obat: " . ucfirst($obat_terpilih) . "</p>";
        echo "<p> Harga : " . $harga . "</p>";
        echo "<p> Deskripsi : " . $deskripsi . "</p>";
    }else{
        echo "Tidak ada obat yang dipilih";
    }
}
?>