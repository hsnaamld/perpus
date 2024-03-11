<?php
include '../../koneksi.php';

$iduser = $_GET['iduser'];

mysqli_query($koneksi, "DELETE from user where IDuser='$iduser'");

header("location:../banggota.php");
