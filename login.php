<?php
session_start();
include 'config.php';

if (isset($_POST['login'])) {
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? ''; 

    $sql = "SELECT * FROM login2 WHERE username='$username' AND password='$password'";
    $result = mysqli_query($koneksi, $sql);
    $user = mysqli_fetch_assoc($result);

    if ($user) {
        $_SESSION['username'] = $user['username'];
        header('Location: index.php'); 
        exit();
    } else {
        echo "Username atau password salah!";
    }
}
?>


<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" href="css/login.css">
</head>
<body>
    <form method="POST" action="">
        <h2>Form Login</h2>
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" autocomplete="username" required><br><br>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" autocomplete="current-password" required><br><br>

        <input type="submit" name="login" value="login">
        <p>Belum punya akun? <a href="register.php">Daftar di sini</a></p> 
    </form>
</body>
</html>
