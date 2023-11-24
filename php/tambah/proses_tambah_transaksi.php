<?php 
 $kategori = $_GET['kategoripelanggan'];
 $tanggal = $_POST['tanggal'];
 $nama_pelanggan = $_POST['nama-pelanggan'];
 $id_karyawan = $_SESSION['idkaryawan'];

$id_pel = mysqli_fetch_assoc(
    mysqli_query($koneksi,"SELECT idpelanggan FROM tb_pelanggan WHERE namalengkap='$nama_pelanggan'")
);

$id_pelanggan = $id_pel['idpelanggan'];
mysqli_query($koneksi,"INSERT INTO tb_transaksi VALUES(NULL,'$id_pelanggan','$id_karyawan','$tanggal','$kategori',0,0,0)");
?>