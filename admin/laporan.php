<?php
include 'layout/header.php';
?>
<?php
include '../koneksi.php';
$buku = mysqli_query($koneksi, "SELECT * from buku");
$anggota = mysqli_query($koneksi, "SELECT * from user");
$peminjaman = mysqli_query($koneksi, "SELECT * from peminjaman");
$b = mysqli_num_rows($buku);
$a = mysqli_num_rows($anggota);
$p = mysqli_num_rows($peminjaman);
?>
<div class="container">
        <div class="row mt-3">
        <div class="col-sm-4 mt-3 text-center">
            <div class="card border-dark text-danger">
                <h2>Laporan Buku</h2>
                <h1><?php echo $b ?></h1>
                <a href="data/laporan_db.php" class="btn btn-light" style="background-color:#ea9999">Lihat Disini</a>
            </div>
        </div>
        <div class="col-sm-4 mt-3 text-center">
            <div class="card border-dark text-danger">
                <h2>Laporan Anggota</h2>
                <h1><?php echo $a ?></h1>
                <a href="data/laporan_da.php" class="btn btn-light"  style="background-color:#e06666">Lihat Disini</a>
            </div>
        </div>
        <div class="col-sm-4 mt-3 text-center">
            <div class="card border-dark text-danger bg-opacity-75"  >
                <h2 class="text-danger">Laporan Peminjaman</h2>
                <h1><?php echo $p ?></h1>
                <a href="data/laporan_dp.php" class="btn btn-light"  style="background-color:#ea9999">Lihat Disini</a>
            </div>
        </div>
    </div>
</div>
<?php
include 'layout/footer.php';
?>