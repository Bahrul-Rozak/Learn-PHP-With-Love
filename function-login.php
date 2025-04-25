<?php
function loginUser($email, $password){
    // data user yang valid
    $validEmail = "ratna@gmail.com";
    $validPassword = "ratnacantik";

    // proses validasi
    if($email == $validEmail && $password == $validPassword){
        return true; // login berhasil
    }else{
        return false; // login gagal
    }
}

$userEmail = "ratna@gmail.com";
$userPassword = "ratnacantik1234";

$loginStatus = loginUser($userEmail, $userPassword);

if($loginStatus){
    echo "Login berhasil";
}else{
    echo "Gagal";
}
?>