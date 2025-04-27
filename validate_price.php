<?php
if($_SERVER["REQUEST_METHOD"] == 'POST'){
    // mengambil data dari input user
    $harga = $_POST['harga'];

    // validasi untuk check sebenarnya yang diinput angka / bukan
    if(is_numeric($harga)){
        echo "Harga obat yang dimasukkan adalah valid: " . $harga;
    }else{
        echo "Harga obat harus berupa angka";
    }
}
?>