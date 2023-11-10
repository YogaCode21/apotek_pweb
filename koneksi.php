<?php
$host = "localhost";
$username = "root";
$password = "";
$db = "db_apotek";
$koneksi = mysqli_connect($host, $username, $password, $db);

if (!$koneksi) {
    die("koneksi database gagal:" . mysqli_connect_error());
}

$data_karyawan = mysqli_query($koneksi, "select * from tb_karyawan");