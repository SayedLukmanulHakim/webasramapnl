<?php
include 'koneksi.php';

$id = $_GET['id'];
$password = $_GET['password'];

$kueri = mysqli_query($conn, "SELECT * FROM user WHERE nomor_identitas = '$id' AND password = '$password'");
$cek = mysqli_num_rows($kueri);
$row = mysqli_fetch_array($kueri);

if ($cek > 0) {
    $_SESSION['id_user'] = $row['id_user'];
    $_SESSION['nama_user'] = $row['nama_user'];
    $_SESSION['nomor_identitas'] = $row['nomor_identitas'];
    $_SESSION['username'] = $row['username'];
    $_SESSION['level'] = $row['level'];

    $level = $row['level'];
    if ($level == 'admin') {
        header('location:../index.php?status=welcome');

    } else if ($level == 'pengelola') {
        header('location:../index.php?status=welcome');

    } else if ($level == 'mahasiswa') {
        header('location:../mahasiswa/user_mhs.html?status=welcome');

    }
} else {
    header('location:../login.php?status=gagal');
}

?>