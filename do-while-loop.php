<?php
// do{
//     // kode yang akan dijalankan
// }while(kondisi);

// tambah obat

$daftarObat = [];

do{
    // input data obat
    echo "Masukkan nama obat : ";
    $nama = trim(fgets(STDIN));
    echo "Masukkan Jumlah Stock :";
    $stock = (int)trim(fgets(STDIN));

    // simpan obat ke array
    $daftarObat[] = [
        'nama' => $nama,
        'stock' => $stock
    ];

    // Tanya user apakah ingin input lagi
    echo "Apakah ingin menambah obat lagi? (ya/tidak): ";
    $jawaban = strtolower(trim(fgets(STDIN)));
// Ya-> ya
}while($jawaban == 'ya');

// Tampilkan daftar obat yang dimasukkan
foreach($daftarObat as $obat){
    echo "Nama : ". $obat['nama'] . "| Stock : " . $obat['stock'] . "\n";
}
?>