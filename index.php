<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link rel="stylesheet" href="asset/bootsrap/css/bootstrap.min.css">
</head>
<body style="background-color:#F8EDFF;">
        <div class="container h-100 d-flex justify-content-center align-items-center" style="margin-top:5rem;">
                <div class="card shadow p-4 rounded w-100 bg-white" style="background-opacity: .75;">
                <div class="row">
                    <div class="col" style="margin-left:5rem">
                        <img src="asset/img/smk5.png" style="width:400px;" alt="smk 5">
                    </div>
                    <div class="col mb-4" style="margin-left:4rem; margin-right:4rem">
                        <h1 class="text-center mt-3">Login</h1>
                        <form method="post" action="aksi/cek_login.php">
                            <div class="form-group mt-3">
                                <label for="username" class="form-label">Username</label>
                                <input type="text" id="username" name="username" placeholder="input username" class="form-control" required>
                            </div>
                            <div class="form-group mt-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" id="password" name="password" placeholder="input password" class="form-control" required>
                            </div>
                            <div class="form-group text-center">
                                <button type="submit" class="btn btn-danger" style="margin-top:2rem;">Login</button>
                            </div>
                            <p class="mt-3 text-center"  >Belum punya akun? <a href="register.php" class="btn btn-outline-danger">Register</a></p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
