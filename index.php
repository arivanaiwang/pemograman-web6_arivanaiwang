<?php
session_start();
if (!isset($_SESSION['username'])) {
    header('location: login.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman</title>
</head>
<body>
    <h2>Selamat Datang, <?php echo $_SESSION['username']; ?></h2>
    <a href="logout.php">Logout</a>
    <p>Belum punya akun? <a href="register.php">Daftar di sini</a></p>
    <p>Sudah punya akun? <a href="login.php">Login di sini</a></p>
</body>
</html>
