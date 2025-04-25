<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $nama = htmlspecialchars($_POST['nama']); // xss
    echo "<h1> Halo $nama</h1>";
    echo "<p>Data kamiu berhasil dikirim ke sistem kami</p>";
}
?>