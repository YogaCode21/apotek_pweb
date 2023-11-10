<?php
if(!@$_SESSION['username']){
    echo "
    <script>
        alert('login terlebih dahulu');
        location.href = '../../login.php';
    </script>
    ";
}else{
include '../../koneksi.php';
$id = $_GET['idpelanggan'];
$query = mysqli_query($koneksi, "SELECT idpelanggan, namalengkap, alamat, telp, usia, buktifotoresep FROM tb_pelanggan WHERE idpelanggan = $id");
$hasil = mysqli_fetch_assoc($query);
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Update Data Pelanggan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>
  <div class="container">
    <form class="update" action="../view/dashboard.php?page=proses_update_pelanggan" method="post" enctype="multipart/form-data">
    <h1>Update Data Pelanggan</h1>
    <div class="mb-3">
            <label for="namalengkap" class="form-label">namalengkap</label>
            <input type="text" class="form-control" id="namalengkap" name="namalengkap" aria-describedby="emailHelp" autocomplete="off" value="<?= $hasil['namalengkap']?>">
    </div>
    <div class="mb-3">
            <label for="alamat" class="form-label">alamat</label>
            <input type="text" class="form-control" id="alamat" name="alamat" aria-describedby="emailHelp" autocomplete="off" value="<?= $hasil['alamat']?>">
    </div>
    <div class="mb-3">
            <label for="telp" class="form-label">telp</label>
            <input type="text" class="form-control" id="telp" name="telp" aria-describedby="emailHelp" autocomplete="off" value="<?= $hasil['telp']?>">
    </div>
    <div class="mb-3">
            <label for="usia" class="form-label">usia</label>
            <input type="text" class="form-control" id="usia" name="usia" aria-describedby="emailHelp" autocomplete="off" value="<?= $hasil['usia']?>">
    </div>
    <div class="mb-3">
            <label for="bukti" class="form-label">bukti</label>
            <img src="../images/<?= $hasil['buktifotoresep']?>" alt="">
            <input type="file" class="form-control" id="bukti" name="bukti" aria-describedby="emailHelp" autocomplete="off">
    </div>
    <input type="hidden" name="idpelanggan" value="<?= $hasil['idpelanggan'] ?>">
    <button type="submit" class="btn btn-primary">Submit</button>

    </form>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>
<?php 
}
?>