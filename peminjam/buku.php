<?php
include 'layout/header.php';
?>
<div class="container">
    <div class="row">
        <div class="col">
            <div class="card border-dark" style="margin-top:3rem; height:5rem; text-align:center;">
                <h2 class="mt-3">Daftar Buku</h2>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <?php
        include '../koneksi.php';
        $no = 1;
        $data = mysqli_query($koneksi, "SELECT * from buku");
        while ($d = mysqli_fetch_array($data)) {
        ?>
            <div class="card mt-4" style="width:14rem; height:20rem; margin-right: 2rem">
                <img src="<?php echo "../petugas/asset/sampul/$d[foto]"; ?>" class="m-2" alt="" width="200">
                <div class="card-title m-2">
                    <h5><?php echo $d['judul']; ?></h5>
                    <h6><?php echo $d['tahunterbit']; ?></h6>
                    <a href="data/detail.php?idbuku=<?php echo $d['IDbuku']; ?>" class="btn btn-outline-danger mt-3" style="width:85px">Detail</a>
                    <a href="data/pinjam_buku.php?idbuku=<?php echo $d['IDbuku']; ?>" class="btn btn-danger mt-3" style=" width:90px">Pinjam</a>
                </div>
            </div>
        <?php
        }
        ?>
    </div>
</div>
<?php
include 'layout/footer.php';
?>