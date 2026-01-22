<?php
$host = "localhost";
$user = "root";
$pass = "";
$db   = "keamanan_siber";

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Koneksi gagal");
}
?>
