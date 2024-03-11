<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Form Edit Buku</title>
    <link rel="stylesheet" href="../../asset/bootsrap/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <div class="content">
            <div class="card rounded border-dark shadow" style="margin-top:3rem">
                <div class="row">
                    <div class="col mb-4" style="margin-left:4rem; margin-right:4rem">
                        <h1 class="text-center mt-3">Form Edit Buku</h1>
                        <a href="../buku.php">Kembali</a>
                        <form method="post" action="e_buku.php">
                        <?php
                    include '../../koneksi.php';
                    $id = $_GET['idbuku'];
                    $data = mysqli_query($koneksi,"SELECT * from buku where IDbuku='$id'");
                    while($d = mysqli_fetch_array($data)){
                ?>
                        <div class="form-group mt-2">
                        <label for="idbuku" class="form-label">ID Buku</label>
                            <input type="text" name="IDbuku" class="form-control" required value="<?php echo $d['IDbuku']; ?>" readonly>
                            </div>
                            <div class="form-group mt-2">
                            <label for="exampleInputEmail1" class="form-label">Judul Buku</label>
                            <input type="text" name="judul" class="form-control" required value="<?php echo $d['judul']; ?>" id="exampleInputEmail1" aria-describedby="emailHelp">
                            </div>
                            <div class="form-group mt-2">
                            <label for="exampleInputEmail1" class="form-label">Penulis Buku</label>
                            <input type="text" name="penulis" class="form-control" required value="<?php echo $d['penulis']; ?>" id="exampleInputEmail1" aria-describedby="emailHelp">
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group mt-2">
                                        <label for="username" class="form-label">Penerbit Buku</label>
                                  <input type="text" name="penerbit" class="form-control" required value="<?php echo $d['penerbit']; ?>" id="exampleInputEmail1" aria-describedby="emailHelp">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group mt-2">
                                        <label for="username" class="form-label">Tahun Terbit</label>
                                 <input type="text" name="tahunterbit" class="form-control" required value="<?php echo $d['tahunterbit']; ?>" id="exampleInputEmail1" aria-describedby="emailHelp">
                                    </div>
                                </div>
                            </div>

                            <label for="username" class="form-label mt-2">Upload Sampul</label>
                            <div class="input-group mt-2">
                                <input type="file" id="username" name="foto" placeholder="input tanggal pengembalian" class="form-control" >
                            </div>

                            <label for="username" class="form-label mt-2">Upload Buku *pdf</label>
                            <div class="input-group mt-2 ">
                                <input type="file" id="username" name="buku" placeholder="input tanggal pengembalian" class="form-control" >
                            </div>
                            <div class="form-group text-center">
                                <button type="submit" class="btn btn-danger"name="update" style="margin-top:3rem;">Tambah</button>
                            </div>
                        </form>
                        <?php
                    }
                ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>