<?php
include '../../koneksi.php';

$judul = $_POST['judul'];
$penulis = $_POST['penulis'];
$penerbit = $_POST['penerbit'];
$tahunterbit = $_POST['tahunterbit'];
$foto = $_FILES['foto']['name'];
$buku = $_FILES['buku']['name'];
$file = $_FILES['foto']['tmp_name'];
$file_tmp = $_FILES['buku']['tmp_name'];
$ektensi_diperbolehkan = array('pdf');

move_uploaded_file($file, '../asset/sampul/' . $foto);
move_uploaded_file($file_tmp, '../asset/buku/' . $buku);
mysqli_query($koneksi, "INSERT into buku values('','$judul','$penulis','$penerbit','$tahunterbit','buku','$foto')");
header("location:../buku.php");
?>

