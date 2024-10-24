<?php
include 'config.php';

if (isset($_POST['register'])) {
    $nama = $_POST['nama'];
    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT); 

    $sql = "INSERT INTO login2 (nama, username, password) VALUES ('$nama', '$username', '$password')";

    if (mysqli_query($koneksi, $sql)) {
        header('Location: login.php');
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($koneksi);
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Registrasi</title>
</head>
<body>
    <h2>Form Registrasi</h2>
    <form method="POST" action="">
        <label>Nama:</label>
        <input type="text" name="nama" required><br><br>
        <label>Username:</label>
        <input type="text" name="username" required><br><br>
        <label>Password:</label>
        <input type="password" name="password" required><br><br>
        <input type="submit" name="register" value="Daftar">
    </form>
    <br>
    <p>Sudah punya akun? <a href="login.php">Login di sini</a></p>
</body>
</html>
