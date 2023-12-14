<?php
include 'koneksi.php';

$nama = $_GET['nama'];
$nip = $_GET['nip'];
$username = $_GET['username'];
$password = $_GET['password'];

$level = 'pengelola';

$query = mysqli_query($conn, "INSERT INTO  user (nama_user, nomor_identitas, username, level, password) VALUES ('$nama', $nip,'$username','$level','$password')");
header('location:../add_pengelola.php?status=berhasil');

?>