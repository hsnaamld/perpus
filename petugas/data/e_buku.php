<?php
// koneksi database
include '../../koneksi.php';

// menangkap data yang di kirim dari form
if(isset($_POST['update']))
{
    $id = $_POST['IDbuku'];
    $judul = $_POST['judul'];
    $penulis = $_POST['penulis'];
    $penerbit = $_POST['penerbit'];
    $tahunterbit = $_POST['tahunterbit'];
    

    // update data ke database
    $query = mysqli_query($koneksi, "UPDATE buku SET judul='$judul', penulis='$penulis', penerbit='$penerbit', tahunterbit='$tahunterbit' WHERE IDbuku='$id'");

    if($query) {
        // Redirect ke halaman buku.php jika query berhasil
        header("location:../buku.php");
    } else {
        // Tampilkan pesan kesalahan jika query gagal dieksekusi
        echo "Error: " . mysqli_error($koneksi);
    }
}
?>
