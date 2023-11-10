<?php
include '../../koneksi.php';

$id = $_POST['idobat'];

$idsupplier = $_POST['supplier'];
$nama_obat = $_POST['nama_obat'];
$kategori = $_POST['kategori'];
$harga_jual = $_POST['harga_jual'];
$harga_beli = $_POST['harga_beli'];
$stok_obat = $_POST['stok_obat'];
$keterangan = $_POST['keterangan'];

$insert = mysqli_query($koneksi, "UPDATE tb_obat SET idsupplier='$idsupplier',namaobat='$nama_obat',kategoriobat='$kategori',hargajual='$harga_jual',hargabeli='$harga_beli',stok_obat='$stok_obat',keterangan='$keterangan' WHERE idobat='$id'");

if ($insert) {
    echo "
    <script>
    alert('Data berhasil disimpan');
    window.location.href = '../../index.php';
    </script>";
} else {
    echo "Terjadi kesalahan saat menyimpan data: " . mysqli_error($koneksi);
}