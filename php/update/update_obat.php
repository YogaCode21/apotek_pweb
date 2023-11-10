<?php
include '../../koneksi.php';
$id = $_GET['idobat'];
$query = mysqli_query($koneksi, "SELECT tb_obat.idobat, tb_obat.namaobat, tb_obat.kategoriobat, tb_obat.hargajual, tb_obat.hargabeli, tb_obat.stok_obat, tb_obat.keterangan, tb_supplier.perusahaan FROM tb_obat JOIN tb_supplier ON tb_obat.idsupplier = tb_supplier.idsupplier WHERE tb_obat.idobat = $id");
$hasil = mysqli_fetch_assoc($query);
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Update Data obat</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>
  <div class="container">
    <form class="update" action="proses_update_obat.php" method="post" enctype="multipart/form-data">
    <h1>Update Data obat</h1>
    <div class="mb-3">
            <fieldset disabled>
            <label for="supplier" class="form-label">supplier</label>
                <input type="text" class="form-control" name="supplier" id="supplier" placeholder="nama perusahaan" autocomplete="off"
                value="<?= $hasil['perusahaan'] ?>" disabled>

                
            </fieldset>
    </div>
    <div class="mb-3">
            <label for="nama_obat" class="form-label">nama_obat</label>
            <input type="text" class="form-control" id="nama_obat" name="nama_obat" aria-describedby="emailHelp" autocomplete="off" value="<?= $hasil['namaobat']?>">
    </div>
    <div class="mb-3">
            <label for="kategori" class="form-label">kategori</label>
            <input type="text" class="form-control" id="kategori" name="kategori" aria-describedby="emailHelp" autocomplete="off" value="<?= $hasil['kategoriobat']?>">
    </div>
    <div class="mb-3">
            <label for="harga_jual" class="form-label">harga_jual</label>
            <input type="text" class="form-control" id="harga_jual" name="harga_jual" aria-describedby="emailHelp" autocomplete="off" value="<?= $hasil['hargajual']?>">
    </div>
    <div class="mb-3">
            <label for="harga_beli" class="form-label">harga_beli</label>
            <input type="text" class="form-control" id="harga_beli" name="harga_beli" aria-describedby="emailHelp" autocomplete="off" value="<?= $hasil['hargabeli']?>">
        </div>
        <div class="mb-3">
                <label for="stok_obat" class="form-label">stok_obat</label>
                <input type="text" class="form-control" id="stok_obat" name="stok_obat" aria-describedby="emailHelp" autocomplete="off" value="<?= $hasil['stok_obat']?>">
    </div>
        <div class="mb-3">
                <label for="keterangan" class="form-label">keterangan</label>
                <input type="text" class="form-control" id="keterangan" name="keterangan" aria-describedby="emailHelp" autocomplete="off" value="<?= $hasil['keterangan']?>">
    </div>
    <input type="hidden" name="idobat" value="<?= $hasil['idobat'] ?>">
    <button type="submit" class="btn btn-primary">Submit</button>

    </form>
</div>
  </body>
</html>