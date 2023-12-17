<?php
session_start();

$conn = mysqli_connect("localhost", "root", "", "webasrama");
if (!$conn) {
    die("Error");
}


function format_rupiah($angka)
{
    $rupiah = "Rp " . number_format($angka, 0, ',', '.');
    return $rupiah;
}


function get_api_data($api_url)
{
    // Mengambil data dari API menggunakan file_get_contents
    $response = file_get_contents($api_url);

    // Mengubah JSON menjadi array PHP
    $data = json_decode($response, true);

    // Mengembalikan data hasil penguraian JSON
    return $data;
}

function open_json($file_path)
{
    // Membaca isi file JSON
    $json_data = file_get_contents($file_path);

    // Mengonversi JSON ke dalam bentuk array PHP
    $decoded_data = json_decode($json_data, true);

    // Mengembalikan data yang sudah di-decode
    return $decoded_data;
}


?>