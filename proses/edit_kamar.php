<?php
include 'koneksi.php';

$id = $_GET['id'];
$nama = $_GET['nama'];
$lantai = $_GET['lantai'];
$kapasitas = $_GET['kapasitas'];

$kueri = mysqli_query($conn, "UPDATE kamar SET nama_kamar = '$nama', lantai = '$lantai', kapasitas = $kapasitas WHERE id_kamar = $id");

header('location:../edit_kamar.php?id=' . $id . '&status=berhasil');

?>