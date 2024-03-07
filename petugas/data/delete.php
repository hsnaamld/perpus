<?php
include '../../koneksi.php';

$idbuku = $_GET['idbuku'];

mysqli_query($koneksi, "DELETE from buku where IDbuku='$idbuku'");

header("location:../buku.php");
