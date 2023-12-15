<?php

include 'koneksi.php';

$nama = $_GET['nama'];
$nim = $_GET['nim'];
$tempat_lahir = $_GET['tempat_lahir'];
$tanggal_lahir = $_GET['tanggal_lahir'];
$jk = $_GET['jk'];
$kewarganegaraan = $_GET['kewarganegaraan'];
$agama = $_GET['agama'];
$upload_foto = $_GET['upload_foto'];
$email = $_GET['email'];
$password = $_GET['password'];
$no_telp = $_GET['no_telp'];
$nama_ortu = $_GET['nama_ortu'];
$nomor_ortu = $_GET['nomor_ortu'];
$alamat = $_GET['alamat'];
$kode_pos = $_GET['kode_pos'];
$provinsi = $_GET['provinsikecamatan'];
$kecamatan = $_GET['kecamatan'];
$pendidikan = $_GET['pendidikan'];
$sekolah = $_GET['sekolah'];
$jurusan = $_GET['jurusan'];
$semester = $_GET['semester'];
$prodi = $_GET['prodi'];

$kueri = mysqli_query($conn, "INSERT INTO user (nama, nim, tempat_lahir, tanggal_lahir, jk, kewarganegaraan, agama, upload_foto, email, password, no_telp, nama_ortu, nomor_ortu, alamat, kode_pos, provinsi, kecamatan, pendidikan, sekolah, jurusan, semester, prodi) 
VALUES ('$nama', '$nim', '$tempat_lahir', '$tanggal_lahir', '$jk', '$kewarganegaraan', '$agama', '$upload_foto', '$email', '$password', '$no_telp', '$nama_ortu', '$nomor_ortu', '$alamat', '$kode_pos', '$provinsi', '$kecamatan', '$pendidikan', '$sekolah', '$jurusan', '$semester', '$prodi')");
header("location:../login.php");
?>
