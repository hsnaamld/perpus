<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Register</title>
    <link rel="stylesheet" href="asset/bootsrap/css/bootstrap.min.css">
</head>

<body style="background-color:#F8EDFF;">
    <div class="container">
        <div class="content">
            <div class="card rounded shadow" style="margin-top:3rem; margin-bottom:3rem" >
                <div class="row">
                    <div class="col" style="margin-left:5rem; margin-top:5rem">
                        <img src="asset/img/smk5.png" width="400" style="margin-left:1rem;" alt="smk 5">
                    </div>
                    <div class="col mb-4" style="margin-left:4rem; margin-right:4rem">
                        <h1 class="text-center mt-3">Register</h1>
                        <form method="post" action="aksi/proses_daftar.php">
                            <div class="form-group">
                                <label for="username" class="form-label">Nama Lengkap</label>
                                <input type="text" id="username" name="namalengkap" placeholder="input namalengkap" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="username" class="form-label">Username</label>
                                <input type="text" id="username" name="username" placeholder="input username" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="username" class="form-label">Email</label>
                                <input type="text" id="username" name="email" placeholder="input email" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="username" class="form-label">Alamat</label>
                                <input type="text" id="username" name="alamat" placeholder="input alamat" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" id="password" name="password" placeholder="input password" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="username" class="form-label">Level</label>
                                <select class="form-select" name="level">
                                    <option selected="level">Level</option>
                                    <option value="peminjam">Pengguna</option>
                                    <option value="admin">Admin</option>
                                </select>
                            </div>
                            <div class="form-group text-center">
                                <button type="submit" class="btn btn-danger" style="margin-top:2rem;">Register</button>
                            </div>
                            <p class="mt-3 text-center">Sudah punya akun? <a href="index.php" class="btn btn-outline-danger">Login</a></p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>