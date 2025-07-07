<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Kontak - KELOMPOK 1</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: #f5f5f5;
        }
        .topbar {
            background-color: #007BFF;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 30px;
            color: white;
        }
        .topbar .brand {
            font-size: 20px;
            font-weight: bold;
        }
        .topbar .menu a {
            color: white;
            text-decoration: none;
            padding: 10px 15px;
            font-weight: bold;
            border-radius: 5px;
        }
        .topbar .menu a:hover {
            background-color: rgba(255,255,255,0.2);
        }
        .topbar .menu .logout {
            background: #dc3545;
        }
        .content {
            padding: 20px;
            max-width: 900px;
            margin: 20px auto;
            background: white;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        h2 { color: #333; }
        p { color: #555; line-height: 1.6; }
        ul {
            list-style: none;
            padding: 0;
        }
        ul li {
            margin-bottom: 10px;
        }
        b {
            color: #333;
        }
    </style>
</head>
<body>

<div class="topbar">
    <div class="brand">KELOMPOK 1</div>
    <div class="menu">
        <a href="beranda.php">Beranda</a>
        <a href="artikel.php">Artikel</a>
        <a href="kontak.php">Kontak</a>
        <a href="logout.php" class="logout">Logout</a>
    </div>
</div>

<div class="content">
    <h2>Kontak Kami</h2>
    <p>Silakan hubungi kami melalui informasi berikut:</p>

    <ul>
        <li><b>Alamat:</b> Jl. Pendidikan No. 123, Mawasangka</li>
        <li><b>Email:</b> </li>
        <li><b>Telepon:</b> (021) 1234567</li>
        <li><b>Jam Operasional:</b> Senin - Jumat: 08.00 - 15.00 WIB</li>
    </ul>
</div>

</body>
</html>
