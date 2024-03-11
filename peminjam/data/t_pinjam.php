<?php
include '../../koneksi.php';

$idbuku = $_POST['idbuku'];
$iduser = $_POST['iduser'];
$nama = $_POST['nama'];
$tgl_pengembalian = $_POST['tgl_pengembalian'];
$status = $_POST['status'];
mysqli_query($koneksi, "INSERT into peminjaman (IDbuku, IDuser, nama,tgl_peminjaman, tgl_pengembalian,status_peminjaman)
                            values('$idbuku','$iduser','$nama',now(),'$tgl_pengembalian','$status')");

header("location:../buku.php");
