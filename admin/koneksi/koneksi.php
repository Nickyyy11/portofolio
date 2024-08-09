<?php
$host_koneksi = "localhost";
$user_koneksi = "u408889676_nicky_usr";
$password_koneksi = "Bakoyeah281@@";
$database_koneksi = "u408889676_nicky_db";

$koneksi = mysqli_connect(
    $host_koneksi,
    $user_koneksi,
    $password_koneksi,
    $database_koneksi,
);

if (!$koneksi) {
    die('Koneksi Error : ' . mysqli_connect_error());
}
