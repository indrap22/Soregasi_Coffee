<?php

//Buat koneksi
$host = "localhost";
$username = "root";
$password = "";
$database = "coffee";

//Cek koneksi
//if (mysqli_connect_errno()) {
//    echo "Gagal koneksi ke database";
//} else {
//    echo "Berhasil koneksi";
//}
$koneksi = mysqli_connect($host, $username, $password, $database);


?>