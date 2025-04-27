<?php
// fopen() -> buka file

$file = fopen('namaFile.txt', 'mode'); // r, w, a

// fwrite() -> nulis file
$file = fwrite($file, 'isi yang mau ditulis');

// fclose() -> tutup file
fclose($file);
?>