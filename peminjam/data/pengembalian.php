<?php
session_start();
include '../../koneksi.php';
$iduser = $_SESSION['id_user'];
$idbuku = $_GET['idbuku'];

$update = "UPDATE peminjaman SET status_peminjaman='dikembalikan' WHERE IDuser='$iduser' AND IDbuku='$idbuku'";
mysqli_query($koneksi, $update);
header("location:../bukusaya.php");
