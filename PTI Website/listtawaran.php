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
    <title>Daftar Tawaran</title>
    <link rel="stylesheet" href="styledash.css">
</head>

<header>
    <!-- Sidebar -->
    <div class="sidebar">
        <ul>
            <h2>SIVASAK</h2>
            <li><img src="home.png" alt=""><a href="dashboard.php">Dashboard</a></li>
            <li><img src="pb.png" alt=""><a href="listtawaran.php">Buat Tawaran</a></li>
            <li><img src="cb.png" alt=""><a href="seleksivendor.php">Seleksi Vendor</a></li>
            <li><img src="sh.png" alt=""><a href="negoisasi.php">Negoisasi</a></li>
            <li><img src="undo.png" alt=""><a href="kontroltender.php">Kontrol Tender</a></li>
            <li><img src="bat.png" alt=""><a href="pembuatantender.php">Buat Akun Tender</a></li>
            <li><img src="as.png" alt=""><a href="buatakunsupir.php">Buat Akun Supir</a></li>
            <li><img src="file.png" alt=""><a href="datakendaraan.php">Data Kendaraan</a></li>
            <li><img src="alert.png" alt=""><a href="daftarkomplain.php">Daftar Komplain</a></li>
        </ul>
    </div>
</header>

    <!-- Main Content -->
    <div class="navbar">
    <div class="menu">
        <ul>
            <li><a href="#">Admin</a><img src="bp.png" alt=""></li>
            <li><a href="logout.php">Logout</a></li>
        </ul>
    </div>
</div>

<div class="main-content vendor">
    <h2>Daftar Tawaran</h2>

<div class="search-container">
        <input type="text" placeholder="Cari Vendor">
        <button class="search-button">Cari</button>
    </div>

    <div class="table-container">
        <table>
            <thead>
                <tr>
                    <th>Judul Tawaran</th>
                    <th>Jenis Barang</th>
                    <th>Range Harga</th>
                    <th>Masa Berlaku</th>
                    <th>Masa Berakhir</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
            <td>Dibutuhkan Air Mineral</td>
            <td>Minuman</td>
            <td>RP 1.000.000</td>
            <td>1/1/1999</td>
            <td>31/31/1999</td>
                    <td>
                        <button class="edit-button" onclick="window.location.href='editvendor.php'">Edit</button>
                        <button class="cek-button" onclick="openModal()">Cek</button>
                        <button class="delete-button" onclick="openDeleteModal()">Hapus</button>
                    </td>
            </tbody>
        </table>
    </div>
</div>
</h>
</html>
