<?php
if(isset($_POST['submit'])){
    $file = $_FILES['gambar_obat'];

    $fileName = $file['name'];
    $fileTmpName = $file['tmp_name'];
    $fileSize = $file['size'];
    $fileError = $file['error'];
    $fileType = $file['type'];

    if($fileError === 0){
        $fileDestination = 'uploads/'. $fileName;
        move_uploaded_file($fileTmpName, $fileDestination);
        echo "Upload Berhasil!";
    }else{
        echo "Terjadi Erorr saat upload : (";
    }
}
?>