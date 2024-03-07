<?php
include '../koneksi.php';

$nama = $_POST['namalengkap'];
$username = $_POST['username'];
$email = $_POST['email'];
$alamat = $_POST['alamat'];
$password = md5($_POST['password']);
$level = $_POST['level'];

mysqli_query($koneksi, "INSERT into user(namalengkap, email, alamat, username, password, level)
                            values('$nama','$email','$alamat','$username','$password','$level')");

header("location:../index.php");
