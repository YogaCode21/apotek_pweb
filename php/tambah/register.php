<?php
session_start();
if (!@$_SESSION['username']) {
    echo "
    <script>
        alert('login terlebih dahulu');
        location.href = '../../login.php';
    </script>
    ";
} elseif (@$_SESSION['level_user'] == 'karyawan') {
    echo "<script>
    alert('Anda Karyawan');
    location.href = '../../login.php';
    </script>";
} else {
?>
    <!doctype html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Register</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    </head>

    <body>
        <div class="container">
            <form class="register" action="proses_register_enkripsi.php" method="post" enctype="multipart/form-data">
                <h1>Register</h1>
                <div class="mb-3">
                    <label for="nama karyawan" class="form-label">nama karyawan</label>
                    <select name="id_karyawan" id="id_karyawan" class="form-select text-secondary">
                        <option value="" hidden></option>
                        <?php
                        include '../../koneksi.php';
                        $data = mysqli_query($koneksi, "SELECT * FROM tb_karyawan WHERE idkaryawan NOT IN (SELECT idkaryawan FROM tb_login)");
                        $cek = mysqli_num_rows($data);
                        if ($cek > 0) {
                            while ($hasil = mysqli_fetch_assoc($data)) {
                        ?>
                                <option value="<?= $hasil['idkaryawan'] ?>"><?= $hasil['namakaryawan'] ?></option>
                        <?php
                            }
                        }
                        ?>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="username" class="form-label">username</label>
                    <input type="text" class="form-control" id="username" name="username" aria-describedby="emailHelp" autocomplete="off">
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">password</label>
                    <input type="password" class="form-control" id="password" name="password" aria-describedby="emailHelp" autocomplete="off">
                </div>
                <div class="mb-3">
                    <label for="level" class="form-label">Level User</label>
                    <select name="level" id="level" class="form-select text-secondary">
                        <option value="" hidden></option>
                        <option value="admin">Admin</option>
                        <option value="karyawan">Karyawan</option>
                    </select>
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