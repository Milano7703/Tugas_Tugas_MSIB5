<?php
session_start();

if (!isset($_SESSION['username']) || $_SESSION['username'] !== 'admin') {
    header('Location: form_login.php');
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Halaman Admin</title>
</head>
<body>
    <h2>Selamat datang, Admin!</h2>
    <p>Ini adalah halaman landing page admin.</p>
    <a href="logout.php">Logout</a>
</body>
</html>
