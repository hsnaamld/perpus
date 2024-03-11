<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Detail Anggota</title>
    <link rel="stylesheet" href="../../asset/bootsrap/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card border-dark" style="margin-top:3rem; height:5rem; text-align:center;">
                    <h2 class="mt-1">Detail Anggota</h2>
                    <a href="../anggota.php">Kembali</a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <?php
                include '../../koneksi.php';
                if (isset($_GET['iduser'])) {
                    $iduser = $_GET['iduser'];
                } else {
                    die("error, data tidak ditemukan");
                }
                $data = mysqli_query($koneksi, "SELECT * from user where IDuser='$iduser'");
                $d = mysqli_fetch_array($data);
                ?>
                <div class="col" style="margin-top:3rem">
                    <div class="card border-dark ">
                        <div class="row">
                            <div class="col m-3">
                                <table>
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
                                            <h5>Nama Lengkap</h5>
                                        </td>
                                        <td>
                                            <h5>:</h5>
                                        </td>
                                        <td>
                                            <h5><?php echo $d['namalengkap']; ?></h5>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <h5>Username</h5>
                                        </td>
                                        <td>
                                            <h5>:</h5>
                                        </td>
                                        <td>
                                            <h5><?php echo $d['username']; ?></h5>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <h5>Email</h5>
                                        </td>
                                        <td>
                                            <h5>:</h5>
                                        </td>
                                        <td>
                                            <h5><?php echo $d['email']; ?></h5>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <h5>Alamat</h5>
                                        </td>
                                        <td>
                                            <h5>:</h5>
                                        </td>
                                        <td>
                                            <h5><?php echo $d['alamat']; ?></h5>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <h5>Password</h5>
                                        </td>
                                        <td>
                                            <h5>:</h5>
                                        </td>
                                        <td>
                                            <h5><?php echo $d['password']; ?></h5>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <h5>Level</h5>
                                        </td>
                                        <td>
                                            <h5>:</h5>
                                        </td>
                                        <td>
                                            <h5><?php echo $d['level']; ?></h5>
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