<?php
session_start();
include "koneksi.php";

if (isset($_POST['login'])) {

    $username = mysqli_real_escape_string($koneksi, $_POST['username']);
    $password = mysqli_real_escape_string($koneksi, $_POST['password']);

    $query = mysqli_query($koneksi, "SELECT * FROM tbl_user_fardan 
                                     WHERE username='$username' 
                                     AND password='$password'");

    $cek = mysqli_num_rows($query);

    if ($cek > 0) {
        $_SESSION['username'] = $username;
        echo "<script>alert('Login berhasil!'); window.location='index.php';</script>";
    } else {
        echo "<script>alert('Username atau Password salah!');</script>";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>
    <h2>Form Login</h2>
    <form method="POST" action="">
        <label>Username</label><br>
        <input type="text" name="username" required><br><br>

        <label>Password</label><br>
        <input type="password" name="password" required><br><br>

        <button type="submit" name="login">Login</button>
    </form>
</body>
</html>