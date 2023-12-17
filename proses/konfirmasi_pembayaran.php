<?php
include 'koneksi.php';

$id = $_GET['id'];
$konfirmasi = $_GET['konfirmasi'];

if ($konfirmasi == 'true') {
    $kueri = mysqli_query($conn, "UPDATE tagihan SET konfirmasi = 'true' WHERE id_tagihan = $id");
} else {
    $kueri = mysqli_query($conn, "UPDATE tagihan SET konfirmasi = 'false' WHERE id_tagihan = $id");
}
header('location:../konfirmasi.php?x=konfirmasi');


?>