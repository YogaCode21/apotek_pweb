<?php 
include "../../koneksi.php";

$nama_pelanggan = $_POST['namalengkap'];
$alamat = $_POST['alamat'];
$telp = $_POST['telp'];
$usia = $_POST['usia'];
$bukti = $_FILES['bukti']['name'];

move_uploaded_file($_FILES['bukti']['tmp_name'], "../images/" . $_FILES['bukti']['name']);

$query = "INSERT INTO tb_pelanggan (namalengkap, alamat, telp, usia, buktifotoresep) VALUES ('$nama_pelanggan', '$alamat', '$telp', '$usia', '$bukti')";

$hasil = mysqli_query($koneksi, $query);

header("Location:../view/view-data-pelanggan.php");