<?php
include 'layout/header.php';
?>
<div class="container">
    <div class="row">
        <div class="col">
            <div class="card border-dark" style="margin-top:3rem; text-align:center;">
                <h2>Data Peminjaman</h2>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col">

            <table class="table mt-3">

                <thead class="table table-danger text-center">
                    <tr>
                        <th scope="col">ID Peminjaman</th>
                        <th scope="col">Nama Peminjam</th>
                        <th scope="col">Status Peminjaman</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody class=" text-center">
                    <?php
                    include '../koneksi.php';
                    $no = 1;
                    $data = mysqli_query($koneksi, "SELECT * from peminjaman");
                    while ($d = mysqli_fetch_array($data)) {
                    ?>
                        <tr>
                            <th scope="row"><?php echo $d['IDpeminjaman']; ?></th>
                            <td><?php echo $d['nama']; ?></td>
                            <td><?php echo $d['status_peminjaman']; ?></td>
                            <td>
                                <a href="data/detail_peminjaman.php?idp=<?php echo $d['IDpeminjaman']; ?>" class="btn" style="background-color:#ea9999">Detail</a>
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