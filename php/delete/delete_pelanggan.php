<?php
    include "../../koneksi.php";
    $id = $_GET["id"];
    $hasil_select = mysqli_query($koneksi,"SELECT buktifotoresep FROM tb_pelanggan WHERE idpelanggan = $id");
    $baris = mysqli_fetch_assoc($hasil_select);
    $delete_gambar = unlink("../images/".$baris['buktifotoresep']);

    $hasil = mysqli_query($koneksi,"DELETE FROM tb_pelanggan WHERE idpelanggan = $id"); 
    
    if(!$hasil){
        echo "gagal menghapus data obat" . mysqli_error($koneksi);
    }else if(!$delete_gambar){
        echo "Gagal menghapus gambar" . mysqli_error($koneksi);
    }else{
        header('Location:../view/view-data-pelanggan.php');
        exit;
    }
?>