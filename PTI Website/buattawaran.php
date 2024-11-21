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
<!-- Sidebar -->
<?php include 'sidebar.php' ?>
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
