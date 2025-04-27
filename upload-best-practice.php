<?php
if (isset($_POST['submit'])) {
    $file = $_FILES['gambar_obat'];

    $fileName = $file['name'];
    $fileTmpName = $file['tmp_name'];
    $fileSize = $file['size'];
    $fileError = $file['error'];
    $fileType = $file['type'];

    // extensi file
    $fileExt = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));

    // extensi file jpg, jpe, png
    $allowed = ['jpg', 'jpeg', 'png'];

    if (in_array($fileExt, $allowed)) {
        if ($fileError === 0) {
            if ($fileSize <= 2 * 1024 * 1024) {
                $fileNewName = uniqid('obat_', true) . '.' . $fileExt;
                $fileDestination = 'uploads/' . $fileNewName;

                if (move_uploaded_file($fileTmpName, $fileDestination)) {
                    echo "Upload Berhasil! File Tersimpan sebagai: " . $fileNewName;
                } else {
                    echo "Gagal Memindahkan File";
                }
            } else {
                echo "File Terlalu Besar maksimal 2mb";
            }
        } else {
            echo "Terjadi Kesalahan Saat Upload!";
        }
    } else {
        echo "Tipe File Tidak Diperbolehkan, hanya boleh JPG, JPEG, dan PNG";
    }
}
