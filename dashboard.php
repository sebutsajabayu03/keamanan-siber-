<?php
session_start();

if (!isset($_SESSION['login'])) {
    header("Location: index.php");
    exit;
}
?>

<h2>Dashboard</h2>
<p>Selamat datang, <?= $_SESSION['user']; ?></p>
<a href="auth/logout.php">Logout</a>
