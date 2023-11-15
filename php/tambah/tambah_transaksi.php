<div class="container">
    <div class="row">
        <div class="col-4"></div>
        <div class="col-4">
            <form action="" method="post">
                <select name="kategoripelanggan" class="mt-2 mb-2 form-select" aria-label="Default select example">
                    <option selected disabled hidden>Open this select menu</option>
                    <option value="umum">umum</option>
                    <option value="khusus">khusus</option>
                </select>
                <input type="submit" class="btn btn-success" value="selanjutnya"></input>
            </form>
            <?php 
            if(@$_POST['kategoripelanggan']=='khusus'){
            ?>
            <form action="../view/dashboard.php?page=proses_tambah_transaksi&kategoripelanggan=khusus" method="post">
                <div class="input-group flex-nowrap mt-5">
                    <span class="input-group-text" id="addon-wrapping">Tanggal Transaksi</span>
                    <input name="tanggal" value="<?= date("Y-m-d") ?>" type="date" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="addon-wrapping">
                </div>
                <div class="input-group flex-nowrap mt-5">
                    <span class="input-group-text" id="addon-wrapping">Nama Pelanggan</span>
                    <input name="nama-pelanggan" type="text" list="nama_pelanggan" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="addon-wrapping">
                </div>
                <datalist id="nama_pelanggan">
                    <?php
                    $result = mysqli_query($koneksi, "SELECT namalengkap FROM tb_pelanggan");
                    while ($row = mysqli_fetch_assoc($result)) {
                    ?>
                        <option value="<?= $row['namalengkap'] ?>"><?= $row['namalengkap'] ?></option>
                    <?php
                    }
                    ?>
                </datalist>
                <input type="submit" class="btn btn-success" value="selanjutnya"></input>
                
            </form>
                    <?php 
            }elseif(@$_POST['kategoripelanggan']=='umum'){
                header('Location:../view/dashboard.php?page="proses_tambah_transaksi&kategoripelanggan=umum"');
            }
                    ?>
        </div>
        <div class="col-4"></div>
    </div>
</div>