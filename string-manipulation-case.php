<?php
// fungsi untuk register
function register(){
    // input username dan password dari user
    echo "Masukkan username: ";
    $username = trim(fgets(STDIN));
    echo "Masukkan password : ";
    $password = trim(fgets(STDIN));

    // manipulasi string
    $username = strtolower($username);

    session_start();
    $_SESSION['username'] = $username;
    $_SESSION['password'] = $password;

    echo "Registrasi Berhasil, selamat datang, $username";
}

// function untuk login
function login(){
    session_start();

    // input username dan password
    echo "Masukkan username: ";
    $username_input = trim(fgets(STDIN));
    echo "Masukkan password : ";
    $password_input = trim(fgets(STDIN));

    // manipulasi string
    $username_input = strtolower($username_input);

    // cek apakah username dan password cocok dengan session yang dilakukan diregister
    if($username_input == $_SESSION['username'] && $password_input == $_SESSION['password']){
        echo "Login berhasil! Selamat datang kembali, $username_input";
    }else{
        echo "Username atau password salah";
    }

    // menu pilihan
    echo "Pilih: \n1. Registrasi \n2. Login \nPilihan";
    $choice = trim(fgets(STDIN));

    if($choice == 1){
        register();
    }elseif($choice == 2){
        login();
    }else{
        echo "Pilihan tidak valid";
    }

}

register();
login();
?>