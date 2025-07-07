<!DOCTYPE html>
<html>
<head>
    <title>Beranda</title>
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
    </style>
</head>
<body>

<div class="topbar">
    <div class="brand">KELOMPOK 1</div>
    <div class="menu">
        <a href="beranda.php">Beranda</a>
        <a href="artikel.php">Artikel</a>
        <a href="kontak.php">Kontak</a>
        <a href="index.php" class="logout">Login</a>
    </div>
</div>

<div class="content">
    <h2>Selamat Datang di Website Kami!</h2>
    <p>Ini adalah halaman beranda website artikel yang bisa diakses tanpa login.</p>

    <h3 id="artikel">Artikel</h3>
    <p>
        Sistem Informasi Akademik (SIAKAD) memudahkan pengelolaan data siswa, guru, absensi, nilai, dan jadwal.
    </p>

    <h3 id="kontak">Kontak</h3>
    <p>
        Hubungi kami di email: <b>info@sekolah.ac.id</b> atau telepon <b>(021) 1234567</b>.
    </p>
</div>

</body>
</html>
