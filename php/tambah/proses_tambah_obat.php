<?php
include '../../koneksi.php';

$idsupplier = $_POST['supplier'];
$nama_obat = $_POST['nama_obat'];
$kategori = $_POST['kategori'];
$harga_jual = $_POST['harga_jual'];
$harga_beli = $_POST['harga_beli'];
$stok_obat = $_POST['stok_obat'];
$keterangan = $_POST['keterangan'];

$query = "INSERT INTO tb_obat (idsupplier, namaobat, kategoriobat, hargajual, hargabeli, stok_obat, keterangan) VALUES ('$idsupplier', '$nama_obat', '$kategori', '$harga_jual', '$harga_beli', '$stok_obat', '$keterangan')";


$hasil = mysqli_query($koneksi, $query);

if ($hasil) {
    echo "
    <script>
    alert('Data berhasil disimpan');
    window.location.href = '../view/view-data-obat.php';
    </script>";
} else {
    echo "Terjadi kesalahan saat menyimpan data: " . mysqli_error($koneksi);
}