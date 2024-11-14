<?php
session_start();
include 'database.php'; // Pastikan ini adalah koneksi ke database

// Cek apakah user adalah admin
if (!isset($_SESSION['role']) || $_SESSION['role'] != 'admin') {
    header('Location: index.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buat Tawaran</title>
    <link rel="stylesheet" href="styledash.css">
</head>

<header>
    <div class="sidebar">
        <ul>
            <h2>SIVASAK</h2>
            <li><img src="home.png" alt=""><a href="dashboard.php">Dashboard</a></li>
        <li><img src="pb.png" alt=""><a href="listtawaran.php">Buat Tawaran</a></li>
        <li><img src="cb.png" alt=""><a href="seleksivendor.php">Seleksi Vendor</a></li>
        <li><img src="sh.png" alt=""><a href="negoisasi.php">Negosiasi</a></li>
        <li><img src="undo.png" alt=""><a href="kontroltender.php">Kontrol Tender</a></li>
        <li><img src="file.png" alt=""><a href="daftarquestioner.php">Questioner</a></li>
        <li><img src="bat.png" alt=""><a href="pembuatantender.php">Buat Akun Vendor</a></li>
        <li><img src="bat.png" alt=""><a href="datacalonvendor.php">Data Calon Vendor</a></li>
        <li><img src="as.png" alt=""><a href="buatakunsupir.php">Buat Akun Supir</a></li>
        <li><img src="file.png" alt=""><a href="datakendaraan.php">Data Kendaraan</a></li>
        <li><img src="alert.png" alt=""><a href="daftarkomplain.php">Daftar Komplain</a></li>
        </ul>
    </div>
</header>

<body>
    <div class="navbar">
        <div class="menu">
            <ul>
                <li><a href="#">Admin</a><img src="bp.png" alt=""></li>
                <li><a href="logout.php">Logout</a></li>
            </ul>
        </div>
    </div>

    <div class="content">
        <h2>Buat Tawaran</h2>
        <form action="submit_tawaran.php" method="post" enctype="multipart/form-data">
            <label for="judul-tawaran">Judul Tawaran</label>
            <input type="text" id="judul-tawaran" name="judul-tawaran" required>

            <label for="kendaraan">Jenis Barang</label>
            <input type="text" id="judul-tawaran" name="judul-tawaran" required>

            <label for="deskripsi">Deskripsi</label>
            <textarea id="deskripsi" name="deskripsi" rows="4" required></textarea>

            <label for="harga-total">Harga Total (Rp)</label>
            <input type="number" id="harga-total" name="harga-total" required>

            <label for="masa-berlaku">Masa Berlaku</label>
            <input type="date" id="masa-berlaku" name="masa-berlaku" required>

            <label for="lampiran">Lampiran</label>
            <input type="file" id="lampiran" name="lampiran">

            <button type="submit">Ajukan Tawaran</button>
        </form>
    </div>

</body>
</html>
