<?php
session_start();

$conn = mysqli_connect("localhost", "root", "", "webasrama");
if (!$conn) {
    die("Error");
}

?>