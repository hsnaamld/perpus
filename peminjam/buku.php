<?php
include 'layout/header.php';
?>
<div class="container">
    <div class="content">
        <div class="row">
            <div class="col">
                <div class="card border-dark" style="margin-top:2rem; text-align:center;">
                    <h2 class="mt-3">Daftar Buku</h2>
                </div>
            </div>
        </div>
     <div class="row">
        <?php
        include '../koneksi.php';
        $no = 1;
        $data = mysqli_query($koneksi, "SELECT * from buku");
        while ($d = mysqli_fetch_array($data)) {
        ?>
            <div class="card mt-4" style="width:14rem; margin-left: 3px">
                <img src="<?php echo "../petugas/asset/sampul/$d[foto]"?>" class="card-img-top" style="margin-top:1rem; margin-right:1rem;" alt="">
                <div class="card-body">
                <div class="card-title ">
                    <h5><?php echo $d['judul'] ?></h5>
                    <h6><?php echo $d['tahunterbit'] ?></h6>
                    <a href="data/detail.php?idbuku=<?php echo $d['IDbuku']; ?>" class="btn btn-outline-danger" style="margin-right:21px">Detail</a>
                    <a href="data/pinjam_buku.php?idbuku=<?php echo $d['IDbuku']; ?>" class="btn btn-danger " >Pinjam</a>
                </div>
            </div>
        <?php
        }
        ?>
        <div>
    </div>
</div>
<?php
include 'layout/footer.php';
?>
