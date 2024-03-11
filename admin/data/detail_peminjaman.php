<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Detail Peminjaman</title>
    <link rel="stylesheet" href="../../asset/bootsrap/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card border-dark" style="margin-top:3rem; height:5rem; text-align:center;">
                    <h2 class="mt-1">Detail Peminjaman</h2>
                    <a href="../anggota.php">Kembali</a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <?php
                include '../../koneksi.php';
                if (isset($_GET['idp'])) {
                    $idp = $_GET['idp'];
                } else {
                    die("error, data tidak ditemukan");
                }
                $data = mysqli_query($koneksi, "SELECT * from peminjaman where IDpeminjaman='$idp'");
                $d = mysqli_fetch_array($data);
                ?>
                <div class="col" style="margin-top:3rem">
                    <div class="card border-dark ">
                        <div class="row">
                            <div class="col m-3">
                                <table>
                                    <tr>
                                        <td>
                                            <h5>ID Peminjaman</h5>
                                        </td>
                                        <td>
                                            <h5>:</h5>
                                        </td>
                                        <td>
                                            <h5><?php echo $d['IDpeminjaman']; ?></h5>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <h5>ID Buku</h5>
                                        </td>
                                        <td>
                                            <h5>:</h5>
                                        </td>
                                        <td>
                                            <h5><?php echo $d['IDbuku']; ?></h5>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <h5>ID User</h5>
                                        </td>
                                        <td>
                                            <h5>:</h5>
                                        </td>
                                        <td>
                                            <h5><?php echo $d['IDuser']; ?></h5>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <h5>Nama Peminjam</h5>
                                        </td>
                                        <td>
                                            <h5>:</h5>
                                        </td>
                                        <td>
                                            <h5><?php echo $d['nama']; ?></h5>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <h5>Tanggal Peminjaman</h5>
                                        </td>
                                        <td>
                                            <h5>:</h5>
                                        </td>
                                        <td>
                                            <h5><?php echo $d['tgl_peminjaman']; ?></h5>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <h5>Batas waktu pengembalian</h5>
                                        </td>
                                        <td>
                                            <h5>:</h5>
                                        </td>
                                        <td>
                                            <h5><?php echo $d['tgl_pengembalian']; ?></h5>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <h5>Status Peminjaman</h5>
                                        </td>
                                        <td>
                                            <h5>:</h5>
                                        </td>
                                        <td>
                                            <h5><?php echo $d['status_peminjaman']; ?></h5>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>