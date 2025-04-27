<?php
// nama file yang mau dibaca
$namaFile = "data_obat.txt";

// buka file untuk dibaca dalam mode
$fileHandle = fopen($namaFile, "r");

if($fileHandle){
    // ambil ukuran file
    $ukuranFile = filesize($namaFile);
    
    if($ukuranFile >0){
        // baca keseluruhan isi file
        $isiFile = fread($fileHandle, $ukuranFile);

        // tampilkan isi file
        echo nl2br($isiFile); // \n -> <br>
    }else{
        echo "FIle Kosong";
    }

    // Tutup file
    fclose($fileHandle);

}else{
    echo "Gagal Membuka File";
}
?>