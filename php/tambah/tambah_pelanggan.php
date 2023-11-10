<?php
session_start();
include '../../koneksi.php';
if(!@$_SESSION['username']){
    echo "
    <script>
        alert('login terlebih dahulu');
        location.href = '../../login.php';
    </script>
    ";
}else{
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tambah Pelanggan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>
  <div class="container">
    <form class="tambah-pelanggan" action="../tambah/proses_tambah_pelanggan.php" method="post" enctype="multipart/form-data">
        <h1>Tambah Data Pelanggan</h1>
        <div class="mb-3">
            <label for="namalengkap" class="form-label">nama lengkap</label>
            <input type="text" class="form-control" id="namalengkap" name="namalengkap" autocomplete="off" require>
        </div>
        <div class="mb-3">
            <label for="alamat" class="form-label">alamat</label>
            <input type="text" class="form-control" id="alamat" name="alamat" autocomplete="off" require>
        </div>
        <div class="mb-3">
            <label for="telp" class="form-label">telp</label>
            <input type="text" class="form-control" id="telp" name="telp" autocomplete="off" require>
        </div>
        <div class="mb-3">
            <label for="usia" class="form-label">usia</label>
            <input type="text" class="form-control" id="usia" name="usia" autocomplete="off" require>
        </div>
        <div class="mb-3">
            <label for="bukti" class="form-label">bukti</label>
            <input type="file" class="form-control" id="bukti" name="bukti" autocomplete="off" require>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>
<?php 
}
?>