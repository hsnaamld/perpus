<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Form Pinjam Buku</title>
    <link rel="stylesheet" href="../../asset/bootsrap/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <div class="content">
            <div class="card rounded border-dark shadow" style="margin-top:8rem">
                <div class="row">
                    <div class="col mb-4" style="margin-left:4rem; margin-right:4rem">
                        <h1 class="text-center mt-3">Form Peminjaman</h1>
                        <a href="../buku.php">Kembali</a>
                        <?php
                        session_start();
                        $iduser = $_SESSION['id_user'];
                        include '../../koneksi.php';
                        if (isset($_GET['idbuku'])) {
                            $idbuku = $_GET['idbuku'];
                        } else {
                            die("error, data tidak ditemukan");
                        }
                        $data = mysqli_query($koneksi, "SELECT * from buku where IDbuku=$idbuku");
                        $d = mysqli_fetch_array($data);
                        ?>
                        <form method="post" action="t_pinjam.php">
                            <div class="form-group mt-2">
                                <label for="username" class="form-label">ID Buku</label>
                                <input type="text" id="username" name="idbuku" value="<?php echo $d['IDbuku']; ?>" readonly class="form-control" required>
                            </div>
                            <div class="form-group mt-2">
                                <label for="username" class="form-label">IDuser</label>
                                <input type="text" id="username" name="iduser" placeholder="input IDuser" class="form-control" required>
                            </div>
                            <div class="form-group mt-2">
                                <label for="username" class="form-label">Nama</label>
                                <input type="text" id="username" name="nama" placeholder="input nama" class="form-control" required>
                            </div>
                            <div class="form-group mt-2">
                                <label for="username" class="form-label">Tanggal Pengembalian</label>
                                <input type="date" id="username" name="tgl_pengembalian" placeholder="input tanggal pengembalian" class="form-control" required>
                            </div>
                            <div class="form-group mt-2">
                                <label for="username" class="form-label">Status Peminjaman</label>
                                <select class="form-select" name="status">
                                    <option selected="level">Status peminjaman</option>
                                    <option value="dipinjam">Pinjam</option>
                                </select>
                            </div>
                            <div class="form-group text-center">
                                <button type="submit" class="btn btn-danger" style="margin-top:3rem;">Pinjam</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>