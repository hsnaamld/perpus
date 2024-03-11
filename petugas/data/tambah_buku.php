<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Form Tambah Buku</title>
    <link rel="stylesheet" href="../../asset/bootsrap/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <div class="content">
            <div class="card rounded border-dark shadow" style="margin-top:3rem">
                <div class="row">
                    <div class="col mb-4" style="margin-left:4rem; margin-right:4rem">
                        <h1 class="text-center mt-3">Form Tambah Buku</h1>
                        <a href="../buku.php">Kembali</a>
                        <form method="post" action="t_buku.php" enctype="multipart/form-data">
                            <div class="form-group mt-2">
                                <label for="username" class="form-label">Judul</label>
                                <input type="text" id="username" name="judul" class="form-control" required>
                            </div>
                            <div class="form-group mt-2">
                                <label for="username" class="form-label">Penulis</label>
                                <input type="text" id="username" name="penulis" placeholder="input IDuser" class="form-control" required>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group mt-2">
                                        <label for="username" class="form-label">Penerbit</label>
                                        <input type="text" id="username" name="penerbit" placeholder="input nama" class="form-control" required>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group mt-2">
                                        <label for="username" class="form-label">Tahun Terbit</label>
                                        <input type="text" id="username" name="tahunterbit" placeholder="input tahun terbit" class="form-control" required>
                                    </div>
                                </div>
                            </div>

                            <label for="username" class="form-label mt-2">Upload Sampul</label>
                            <div class="input-group mt-2">
                                <input type="file" id="username" name="foto" placeholder="input tanggal pengembalian" class="form-control" required>
                            </div>

                            <label for="username" class="form-label mt-2">Upload Buku *pdf</label>
                            <div class="input-group mt-2 ">
                                <input type="file" id="username" name="buku" placeholder="input tanggal pengembalian" class="form-control" required>
                            </div>
                            <div class="form-group text-center">
                                <button type="submit" class="btn btn-danger" style="margin-top:3rem;">Tambah</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>