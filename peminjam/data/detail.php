<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Detail Buku</title>
    <link rel="stylesheet" href="../../asset/bootsrap/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card border-dark mt-4" style="height:5rem; text-align:center;">
                    <h2 class="mt-1">Detail Buku</h2>
                    <a href="../buku.php">Kembali</a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <?php
                include '../../koneksi.php';
                if (isset($_GET['idbuku'])) {
                    $idbuku = $_GET['idbuku'];
                } else {
                    die("error, data tidak ditemukan");
                }
                $data = mysqli_query($koneksi, "SELECT * from buku where IDbuku=$idbuku");
                $d = mysqli_fetch_array($data);
                ?>
                <div class="col mt-4" >
                    <div class="card border-dark " style="height:26rem;">
                        <div class="row">
                            <div class="col m-3">
                                <img src="<?php echo "../../petugas/asset/sampul/$d[foto]"; ?>" class="mb-2" width="490" alt="">
                            </div>
                            <div class="col m-3">
                                <table>
                                    <tr>
                                        <td>
                                            <h5>Judul   </h5>
                                        </td>
                                        <td>
                                            <h5>   : </h5>
                                        </td>
                                        <td>
                                            <h5><?php echo $d['judul']; ?></h5>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <h5>Penulis</h5>
                                        </td>
                                        <td>
                                            <h5>  : </h5>
                                        </td>
                                        <td>
                                            <h5><?php echo $d['penulis']; ?></h5>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <h5>penerbit</h5>
                                        </td>
                                        <td>
                                            <h5>   : </h5>
                                        </td>
                                        <td>
                                            <h5><?php echo $d['penerbit']; ?></h5>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <h5>Tahun Terbit</h5>
                                        </td>
                                        <td>
                                            <h5>   : </h5>
                                        </td>
                                        <td>
                                            <h5><?php echo $d['tahunterbit']; ?></h5>
                                        </td>
                                    </tr>
                                </table>
                                <a href="baca.php" class="btn btn-danger mt-4">Baca Sekarang</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>