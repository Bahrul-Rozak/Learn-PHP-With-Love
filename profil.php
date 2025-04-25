<?php
if(isset($_GET['nama']) && isset($_GET['deskripsi'])){
    // ambil nilai dari URL
    $nama = htmlspecialchars($_GET['nama']);
    $deskripsi = htmlspecialchars($_GET['deskripsi']);

    // tamppilkan halaman
    echo "<h2>Profil</h2>";
    echo "<p>Nama : $nama </p>";
    echo "<p>Deskripsi : $deskripsi </p>";
}
?>