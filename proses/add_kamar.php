<?php
include 'koneksi.php';

$nama = $_GET['nama'];
$lantai = $_GET['lantai'];
$kapasitas = $_GET['kapasitas'];
$tarif = $_GET['tarif'];
$jenis = $_GET['jenis'];

$kueri = mysqli_query($conn, "INSERT INTO kamar (nama_kamar, lantai, kapasitas, jenis, full) VALUES ('$nama', '$lantai', $kapasitas, '$jenis', 'false')");

header('location:../add_kamar.php?status=ditambahkan');

?>