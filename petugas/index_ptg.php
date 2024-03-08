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
    <div class="row">
        <div class="col">
            <div class="card border-dark" style="margin-top:3rem; text-align:center;">
                <h2>Selamat Datang di Halaman Petugas</h2>
                <h4> Perpustakaan Digital SMK Negeri 5 Bekasi</h4>
            </div>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-sm-4 mt-3 text-center">
            <div class="card border-dark text-white" style="background-color:#ea9999">
                <h2>Data Buku</h2>
                <h1><?php echo $b ?></h1>
                <a href="buku.php" class="btn btn-light">Lihat Disini</a>
            </div>
        </div>
        <div class="col-sm-4 mt-3 text-center">
            <div class="card border-dark text-white" style="background-color:#e06666">
                <h2>Data Anggota</h2>
                <h1><?php echo $a ?></h1>
                <a href="buku.php" class="btn btn-light">Lihat Disini</a>
            </div>
        </div>
        <div class="col-sm-4 mt-3 text-center">
            <div class="card border-dark bg-danger text-white bg-opacity-75">
                <h2 class="text-white">Data Peminjaman</h2>
                <h1><?php echo $p ?></h1>
                <a href="buku.php" class="btn btn-light">Lihat Disini</a>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-6" style="margin-top:4rem">
            <div class="card">
                <samp class="m-3"> Sebagai petugas di Perpustakaan Digital kami, Anda memiliki akses penuh untuk mengelola dan mengawasi berbagai kegiatan yang terjadi di perpustakaan. Dengan alat dan fitur yang disediakan, Anda dapat dengan mudah menjalankan tugas-tugas Anda untuk memastikan layanan yang optimal kepada pengguna kami.</samp>
            </div>
        </div>
        <div class="col" style="margin-left:10rem; margin-top:2rem">
            <img src="../asset/img/readd.png" width="300" alt="">
        </div>
    </div>
</div>
<?php
include 'layout/footer.php';
?>
