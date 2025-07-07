

<!DOCTYPE html>
<html>
<head>
    <title>Artikel - SIAKAD</title>
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
            max-width: 1000px;
            margin: 20px auto;
        }
        .article-card {
            background: white;
            padding: 20px;
            margin-bottom: 20px;
            border-radius: 10px;
            box-shadow: 0 0 8px rgba(0,0,0,0.1);
        }
        .article-card h3 {
            color: #333;
            margin-top: 0;
        }
        .article-card p {
            color: #555;
            line-height: 1.6;
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
    <h2>Artikel Pilihan</h2>

    <div class="article-card">
        <h3>1. 💡 Digitalisasi Data Sekolah untuk Era Modern</h3>
        <p>
            Perkembangan teknologi menuntut sekolah untuk bertransformasi 
            digital dalam pengelolaan data akademik. Sistem Informasi Akademik 
            (SIAKAD) hadir untuk mempermudah proses administrasi seperti 
            pencatatan nilai, absensi, hingga pengaturan jadwal, sehingga segala 
            informasi dapat diakses dengan cepat, akurat, dan transparan oleh 
            guru, siswa, dan wali murid.
        </p>
    </div>

    <div class="article-card">
        <h3>2. Peran Guru dalam Penggunaan Teknologi</h3>
        <p>
            Guru sebagai pendidik perlu beradaptasi dengan teknologi agar mampu memanfaatkan berbagai platform digital dalam proses pembelajaran maupun pengelolaan data akademik secara online.
        </p>
    </div>

    <div class="article-card">
        <h3>3. Manfaat SIAKAD bagi Sekolah dan Siswa</h3>
        <p>
            Dengan adanya SIAKAD, pengelolaan nilai, kehadiran, dan jadwal menjadi lebih cepat, transparan, dan akurat. Hal ini mendukung transparansi informasi dan efektivitas kegiatan belajar-mengajar.
        </p>
    </div>

</div>

</body>
</html>
