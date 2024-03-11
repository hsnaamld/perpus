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
                <h2>Selamat Datang di Halaman Admin</h2>
                <h4> Perpustakaan Digital SMK Negeri 5 Bekasi</h4>
            </div>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-sm-3 mt-3 text-center">
            <div class="card border-dark text-white" style="background-color:#ea9999">
                <h2>Data Buku</h2>
                <h1><?php echo $b ?></h1>
                <a href="buku.php" class="btn btn-light">Lihat Disini</a>
            </div>
        </div>
        <div class="col-sm-3 mt-3 text-center">
            <div class="card border-dark text-white" style="background-color:#e06666">
                <h2>Data Anggota</h2>
                <h1><?php echo $a ?></h1>
                <a href="anggota.php" class="btn btn-light">Lihat Disini</a>
            </div>
        </div>
        <div class="col-sm-3 mt-3 text-center">
            <div class="card border-dark text-white bg-opacity-75"  style="background-color:#e06666" >
                <h2 class="text-white">Data Peminjaman</h2>
                <h1><?php echo $p ?></h1>
                <a href="peminjaman.php" class="btn btn-light">Lihat Disini</a>
            </div>
        </div>
        <div class="col-sm-3 mt-3 text-center">
            <div class="card border-dark text-white bg-opacity-75" style="background-color:#ea9999">
                <h2 class="text-white">Laporan</h2>
                <h1>3</h1>
                <a href="laporan.php" class="btn btn-light">Lihat Disini</a>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-6" style="margin-top:4rem">
            <div class="card">
                <samp class="m-3"> Di sini, Anda memiliki akses lengkap untuk mengelola perpustakaan kami. Dari mengatur koleksi buku hingga mengelola data anggota, serta bahkan mencetak laporan ke PDF, semuanya dapat Anda lakukan di sini. Terima kasih atas dedikasi Anda dalam menjaga layanan perpustakaan kami tetap teratur dan efisien. Selamat bekerja! </samp>
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