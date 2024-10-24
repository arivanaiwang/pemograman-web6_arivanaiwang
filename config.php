<?php

$host = "localhost";
$user = "root";
$password = "";
$database = "tugas6_wp";

$koneksi = mysqli_connect($host, $user, $password, $database);

if(!$koneksi){
    die("koneksi gagal:" .mysqli_connect_error());
}

?>