<?php include_once "../template/header.php"?>
<?php include_once "../template/navbar.php"?>
<div class="container">
        <h1>Data Pelanggan</h1>
        <a href="../view/dashboard.php?page=tambah_obat">Tambah Data</a>
        <table class="table table-striped">
        <thead>
            <tr>
            <th scope="col">No</th>
            <th scope="col">Nama Perusahaan</th>
            <th scope="col">Nama</th>
            <th scope="col">Kategori</th>
            <th scope="col">Harga Jual</th>
            <th scope="col">Stok obat</th>
            <th scope="col">Keterangan</th>
            <th scope="col">Aksi</th>
            </tr>
        </thead>
        <?php 
                $query = mysqli_query($koneksi,"SELECT idobat, namaobat, kategoriobat, hargajual, hargabeli, stok_obat, tb_obat.keterangan, perusahaan, tb_supplier.idsupplier FROM tb_obat INNER JOIN tb_supplier ON tb_obat.idsupplier = tb_supplier.idsupplier ORDER BY idobat DESC");
                while ($hasil = mysqli_fetch_array($query)) {
        ?>
        <tbody>
            <tr>
            <th scope="row"><?= $hasil['idobat'] ?></th>
            <td><?= $hasil['perusahaan']; ?></td>
            <td><?= $hasil['namaobat']; ?></td>
            <td><?= $hasil['kategoriobat']; ?></td>
            <td><?= $hasil['hargajual']; ?></td>
            <td><?= $hasil['hargabeli']; ?></td>
            <td><?= $hasil['stok_obat']; ?></td>
            <td class="aksi_td">
                    <a href="./dashboard.php?page=edit_obat&idobat=<?= $hasil['idobat']; ?>">EDIT</a>
                </td>
                <?php 
                $idobat = $hasil['idobat'];
                $hide_delete = mysqli_query($koneksi,"SELECT * FROM tb_detail_transaksi INNER JOIN tb_obat ON tb_detail_transaksi.idobat = tb_obat.idobat WHERE tb_obat.idobat=$idobat");
                $cek = mysqli_num_rows($hide_delete);
                if($cek == 0){
                    ?>
                <td class="aksi_td">
                    <a href="../delete/delete_obat.php?id=<?= $hasil['idobat']; ?>">DELETE
                </td>
                <?php
                }else{
                    ?>
                <td class="aksi_td-None">
                    <a>NONE</a>
                </td>
                <?php 
                }
                ?>
            </tr>
        </tbody>
        <?php 
        }
        ?>
        </table>
</div>
<?php include_once "../template/footer.php"?>
