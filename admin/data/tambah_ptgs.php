<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Form Tambah Petugas</title>
    <link rel="stylesheet" href="../../asset/bootsrap/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <div class="content">
            <div class="card rounded border-dark shadow" style="margin-top:3rem">
                <div class="row">
                    <div class="col mb-4" style="margin-left:4rem; margin-right:4rem">
                        <h1 class="text-center mt-3">Form Tambah Petugas</h1>
                        <a href="../buku.php">Kembali</a>
                        <form method="post" action="t_ptgs.php" enctype="multipart/form-data">
                            <div class="form-group mt-2">
                            <label for="exampleInputEmail1" class="form-label">Nama Lengkap</label>
                  <input type="text" name="namalengkap" class="form-control" required id="exampleInputEmail1" aria-describedby="emailHelp">
                            </div>
                            <div class="form-group mt-2">
                            <label for="exampleInputEmail1" class="form-label">Email</label>
                  <input type="text" name="email" class="form-control" required id="exampleInputEmail1" aria-describedby="emailHelp">
                            </div>
                                    <div class="form-group mt-2">
                                    <label for="exampleInputEmail1" class="form-label">Alamat</label>
                  <input type="text" name="alamat"class="form-control" required id="exampleInputEmail1" aria-describedby="emailHelp">
                                </div>
                                    <div class="form-group mt-2">
                                    <label for="exampleInputEmail1" class="form-label">Username</label>
                                    <input type="text" name="username" class="form-control" required id="exampleInputEmail1" aria-describedby="emailHelp">
                                    </div>
                            <div class="form-group mt-2">
                            <label for="exampleInputPassword1" class="form-label">Password</label>
                             <input type="password" name="password" class="form-control" required id="exampleInputPassword1">
                        </div>
                        <div class="form-group mt-2">
                    <label for="exampleInputPassword1" class="form-label">Level</label>
                    <select class="form-select" name="level" aria-label="Default select example">
                    <option selected>-</option>
                    <option value="peminjam">Pengguna</option>
                    <option value="petugas">Petugas</option>
                    <option value="admin">Admin</option>
                </select>
                </div>
                </div>
                            <div class="form-group text-center">
                                <button type="submit" class="btn btn-danger mb-5" style="margin-top:2rem;">Tambah</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>