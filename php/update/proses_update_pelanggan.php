<?php 
include "../../koneksi.php";

$id = $_POST['idpelanggan'];

$nama_pelanggan = $_POST['namalengkap'];
$alamat = $_POST['alamat'];
$telp = $_POST['telp'];
$usia = $_POST['usia'];
$bukti = $_FILES['bukti']['name'];

move_uploaded_file($_FILES['bukti']['tmp_name'], "../images/" . $_FILES['bukti']['name']);

$query = "UPDATE tb_pelanggan SET namalengkap='$nama_pelanggan',alamat='$alamat',telp='$telp',usia='$usia',buktifotoresep='$bukti' WHERE idpelanggan='$id'";

$hasil = mysqli_query($koneksi, $query);

header("Location:../view/view-data-pelanggan.php");
