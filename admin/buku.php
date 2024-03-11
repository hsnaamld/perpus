<?php
include 'layout/header.php';
?>
<div class="container">
    <div class="row">
        <div class="col">
            <div class="card border-dark" style="margin-top:3rem; text-align:center;">
                <h2>Data Buku</h2>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col">

            <table class="table mt-3">

                <thead class="table table-danger text-center">
                    <tr>
                        <th scope="col">ID Buku</th>
                        <th scope="col">Judul</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody class=" text-center">
                    <?php
                    include '../koneksi.php';
                    $no = 1;
                    $data = mysqli_query($koneksi, "SELECT * from buku");
                    while ($d = mysqli_fetch_array($data)) {
                    ?>
                        <tr>
                            <th scope="row"><?php echo $d['IDbuku']; ?></th>
                            <td><?php echo $d['judul']; ?></td>
                            <td>
                                <a href="data/detail.php?idbuku=<?php echo $d['IDbuku']; ?>" class="btn" style="background-color:#ea9999">Detail</a>
                               
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