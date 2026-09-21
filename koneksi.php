<?php
$host = "localhost";
$user = "root";
$pass = "";
$db   = "ilvorasolutions"; // Sesuaikan dengan nama databasemu

$conn = mysqli_connect($host, $user, $pass, $db);

if (!$conn) {
    die("Koneksi database gagal: " . mysqli_connect_error());
}
?>