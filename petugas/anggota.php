<?php
include 'layout/header.php';
?>
<div class="container">
    <div class="row">
        <div class="col">
            <div class="card border-dark" style="margin-top:3rem; text-align:center;">
                <h2>Data Anggota</h2>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col">

            <table class="table mt-3">

                <thead class="table table-danger text-center">
                    <tr>
                        <th scope="col">ID User</th>
                        <th scope="col">Nama Lengkap</th>
                        <th scope="col">Username</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody class=" text-center">
                    <?php
                    include '../koneksi.php';
                    $no = 1;
                    $data = mysqli_query($koneksi, "SELECT * from user");
                    while ($d = mysqli_fetch_array($data)) {
                    ?>
                        <tr>
                            <th scope="row"><?php echo $d['IDuser']; ?></th>
                            <td><?php echo $d['namalengkap']; ?></td>
                            <td><?php echo $d['username']; ?></td>
                            <td>
                                <a href="data/detail_anggota.php?iduser=<?php echo $d['IDuser']; ?>" class="btn" style="background-color:#ea9999">Detail</a>
                            </td>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>

        </div>
    </div>
</div>
<?php
include 'layout/footer.php';
?>