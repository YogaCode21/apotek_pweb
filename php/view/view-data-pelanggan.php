<?php include_once "../template/header.php"?>
<?php include_once "../template/navbar.php"?>
    <div class="container">
        <h1>Data Pelanggan</h1>
        <a href="../tambah/tambah_pelanggan.php">Tambah Data</a>
        <table class="table table-striped">
        <thead>
            <tr>
            <th scope="col">No</th>
            <th scope="col">Nama Pelanggan</th>
            <th scope="col">Alamat</th>
            <th scope="col">No Telepon</th>
            <th scope="col">Usia Pelanggan</th>
            <th scope="col">Foto Bukti</th>
            <th scope="col">Aksi</th>
            </tr>
        </thead>
        <?php
        $query = mysqli_query($koneksi,"SELECT idpelanggan, namalengkap, alamat, telp, usia, buktifotoresep FROM tb_pelanggan ORDER BY idpelanggan DESC");
        while ($hasil = mysqli_fetch_array($query)) {

        ?>
        <tbody>
            <tr>
            <th scope="row"><?= $hasil['idpelanggan'] ?></th>
            <td><?= $hasil['namalengkap']; ?></td>
            <td><?= $hasil['alamat']; ?></td>
            <td><?= $hasil['telp']; ?></td>
            <td><?= $hasil['usia']; ?></td>
            <td class="img-container">
                <img width="200px" src="../images/<?= $hasil['buktifotoresep']; ?>" alt="Foto Resep">
            </td>
            <td class="aksi_td">
                    <a class="yes" href="./dashboard.php?page=edit_pelanggan&idpelanggan=<?= $hasil['idpelanggan']; ?>">EDIT</a>
                        <?php 
                        $idobat = $hasil['idpelanggan'];
                        $hide_delete = mysqli_query($koneksi,"SELECT * FROM tb_detail_transaksi INNER JOIN tb_obat ON tb_detail_transaksi.idobat = tb_obat.idobat WHERE tb_obat.idobat=$idobat");
                        $cek = mysqli_num_rows($hide_delete);
                        if($cek == 0){
                            ?>
                            <a class="no" href="../delete/delete_pelanggan.php?id=<?= $hasil['idpelanggan']; ?>">DELETE
                        <?php
                        }else{
                            ?>
                            <a>NONE</a>
                        <?php 
                        }
                        ?>
        </td>
            </tr>
        </tbody>
        <?php 
        }
        ?>
        </table>
    </div>
    <?php include_once "../template/footer.php"?>
