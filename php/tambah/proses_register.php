<?php

include '../../koneksi.php';

$id_karyawan = $_POST['id_karyawan'];
$username = $_POST['username'];
$password = $_POST['password'];
$level = $_POST['level'];

$query_username = mysqli_query($koneksi, "SELECT COUNT(*) FROM tb_login WHERE username='$username'");
$cek_username = mysqli_fetch_row($query_username);

if ($cek_username['0'] != 0) {
    echo "<script>alert('Username sudah ada, silahkan menggunakan username yang lain');window.location.href='register.php';</script>";
} else {
    $query = "INSERT INTO tb_login VALUES('$username', '$password', '$level', '$id_karyawan')";
    $hasil = mysqli_query($koneksi, $query);
    header('Location:../../login.php');
}