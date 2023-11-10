<?php
    include "../../koneksi.php";
    $id = $_GET["id"];
    $hasil = mysqli_query($koneksi,"DELETE FROM tb_obat WHERE idobat = $id");
    
    if(!$hasil){
        echo "gagal menghapus data obat" . mysqli_error($koneksi);
    }else{
        header('Location:../view/view-data-obat.php');
        exit;
    }
?>