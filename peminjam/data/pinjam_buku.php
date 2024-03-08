<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Form Pinjam Buku</title>
    <link rel="stylesheet" href="../../asset/bootsrap/css/bootstrap.min.css">
</head>

<body>
    <div class="container" style="width:50rem">
        <div class="content">
            <div class="card rounded border-dark shadow mb-3 mt-4" >
                <div class="row">
                    <div class="col mb-4" style="margin-left:4rem; margin-right:4rem">
                        <h1 class="text-center mt-3">Form Peminjaman</h1>
                        <a href="../buku.php" class="text-center">Kembali</a>
                        <?php
                        session_start();
                        include '../../koneksi.php';
                        $iduser = $_SESSION['id_user'];
                        $idbuku1=$_GET['idbuku'];
                        $cekstatus=mysqli_query($koneksi,"SELECT * from peminjaman where IDuser='$iduser'and IDbuku='$idbuku1'and status_peminjaman='dipinjam'");
                        if(mysqli_num_rows($cekstatus)>0){
                            header("location:../buku.php?status=dipinjam");
                        }

                        if (isset($_GET['idbuku'])) {
                            $idbuku = $_GET['idbuku'];
                        } else {
                            die("error, data tidak ditemukan");
                        }
                        $data = mysqli_query($koneksi, "SELECT * from buku where IDbuku=$idbuku");
                        $d = mysqli_fetch_assoc($data);
                        ?>
                        <form method="post" action="t_pinjam.php">
                            <div class="form-group mt-2">
                                <label for="username" class="form-label">ID Buku</label>
                                <input type="text" id="username" name="idbuku" value="<?php echo $d['IDbuku']; ?>" readonly class="form-control" required>
                            </div>
                            <div class="form-group mt-2">
                                <label for="username" class="form-label">ID user</label>
                                <input type="text" id="username" name="iduser" class="form-control" value="<?php echo $iduser ?>" readonly  required>
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
                                <button type="submit" class="btn btn-danger mt-3" >Pinjam</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
