<?php
session_start();
if (!isset($_SESSION['user_nama'])) {
    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard Administrator</title>
    <style>
        body {
            font-family: Arial;
            background: #f2f2f2;
        }

        .wrapper {
            width: 90%;
            margin: 20px auto;
            border: 2px solid black;
            background: white;
            min-height: 500px;
        }

        .navbar {
            padding: 10px;
            border-bottom: 2px solid black;
            background: #ddd;
        }

        .navbar a {
            text-decoration: none;
            padding: 8px 15px;
            border: 1px solid black;
            background: #eee;
            margin-right: 5px;
            color: black;
        }

        .navbar a.active {
            background: #87CEFA;
        }

        .navbar .right {
            float: right;
        }

        .content {
            padding: 25px;
        }

        .footer {
            border-top: 2px solid black;
            text-align: center;
            padding: 10px;
            background: #ddd;
            position: relative;
            bottom: 0;
        }

        .clear {
            clear: both;
        }
    </style>
</head>
<body>

<div class="wrapper">

    <div class="navbar">
        <a href="home.php" class="active">Home</a>
        <a href="#">Pengguna</a>
        <a href="#">Jabatan</a>
        <a href="#">Karyawan</a>
        <a href="#">Transaksi</a>
        <a href="#">Laporan</a>
        <a href="logout.php" class="right">Keluar</a>
        <div class="clear"></div>
    </div>

    <div class="content">
        <h3>Halaman Dashboard</h3>
        <p>
            Selamat datang 
            <b style="color:blue;">
                <?php echo $_SESSION['user_nama']; ?>
            </b> 
            di dashboard app exam
        </p>
    </div>

    <div class="footer">
        Copyright &copy; <?php echo date("Y"); ?> 
        namamahasiswa_nim
    </div>

</div>

</body>
</html>