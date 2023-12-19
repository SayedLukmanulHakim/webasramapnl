<?php
include 'koneksi.php';

$nama = $_GET['nama'];
$lantai = $_GET['lantai'];
$kapasitas = $_GET['kapasitas'];
$tarif = $_GET['tarif'];

$kueri = mysqli_query($conn, "INSERT INTO kamar (nama_kamar, lantai, kapasitas, tarif, full) VALUES ('$nama', '$lantai', $kapasitas, $tarif, 'false')");

header('location:../add_kamar.php?status=ditambahkan');

?>