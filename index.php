<?php
include 'proses/koneksi.php';
session_start();

if (!isset($_GET['x'])) {
  header('location:home.php?x=home');
} else {
  if ($_GET['x'] == 'home') {
    header('location:home.php?x=' . $_GET['x']);
  } else if ($_GET['x'] == 'mahasiswa') {
    header('location:mahasiswa.php?x=' . $_GET['x']);

  } else if ($_GET['x'] == 'kamar') {
    header('location:dt_kamar.php?x=' . $_GET['x']);

  } else if ($_GET['x'] == 'pembayaran') {
    header('location:dt_pembayaran.php?x=' . $_GET['x']);

  } else if ($_GET['x'] == 'konfirmasi') {
    header('location:konfirmasi.php?x=' . $_GET['x']);

  } else if ($_GET['x'] == 'kelola_user') {
    header('location:kelola_user.php?x=' . $_GET['x']);

  } else if ($_GET['x'] == 'profiladm') {
    header('location:profiladm.php?x=' . $_GET['x']);
  }

}

?>