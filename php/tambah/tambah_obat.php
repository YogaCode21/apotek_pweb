<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tambah Obat</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>
  <div class="container">
    <form class="tambah-Obat" action="../tambah/proses_tambah_obat.php" method="post" enctype="multipart/form-data">
        <h1>Tambah Data Obat</h1>
        <div class="mb-3">
            <label for="supplier" class="form-label">Id supplier</label>
            <select name="supplier" id="supplier">
                        <option value="" disabled selected hidden>isi id supplier</option>
                        <?php 
                                  include "../../koneksi.php";
                                  $data = mysqli_query($koneksi, "SELECT * FROM tb_supplier");
                                  while ($data_ambil = mysqli_fetch_assoc($data)) { 
                        ?>
                        <option value="<?= $data_ambil['idsupplier'] ?>"><?= $data_ambil['perusahaan'] ?></option>
                        <?php 
                        }
                        ?>
                </select>
        </div>
        <div class="mb-3">
            <label for="nama_obat" class="form-label">nama_obat</label>
            <input type="text" class="form-control" id="nama_obat" name="nama_obat" autocomplete="off" require>
        </div>
        <div class="mb-3">
            <label for="kategori" class="form-label">kategori Obat</label>
            <input type="text" class="form-control" id="kategori" name="kategori" autocomplete="off" require>
        </div>
        <div class="mb-3">
            <label for="harga_jual" class="form-label">harga_jual</label>
            <input type="text" class="form-control" id="harga_jual" name="harga_jual" autocomplete="off" require>
        </div>
        <div class="mb-3">
            <label for="harga_beli" class="form-label">harga_beli</label>
            <input type="text" class="form-control" id="harga_beli" name="harga_beli" autocomplete="off" require>
        </div>
        <div class="mb-3">
            <label for="stok_obat" class="form-label">stok_obat</label>
            <input type="text" class="form-control" id="stok_obat" name="stok_obat" autocomplete="off" require>
        </div>
        <div class="mb-3">
            <label for="keterangan" class="form-label">keterangan</label>
            <input type="text" class="form-control" id="keterangan" name="keterangan" autocomplete="off" require>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    </body>
</html>
