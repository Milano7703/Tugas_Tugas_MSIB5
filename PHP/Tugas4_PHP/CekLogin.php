<?php
session_start();

function cekLogin($username, $password) {
    $adminUsername = 'admin';
    $adminPassword = 'mimin';

    if ($username === $adminUsername && $password === $adminPassword) {
        $_SESSION['username'] = $username;
        return true;
    } else {
        return false;
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if (cekLogin($username, $password)) {
        header('Location: admin.php');
        exit();
    } else {
        echo 'Login gagal. Silakan coba lagi.';
    }
}
?>
