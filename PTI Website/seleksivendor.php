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
    <title>Daftar Vendor</title>
    <link rel="stylesheet" href="styledash.css">
</head>
<body>

<div class="sidebar">
    <ul>
        <h2>SIVASAK</h2>
        <li><img src="home.png" alt=""><a href="dashboard.php">Dashboard</a></li>
        <li><img src="pb.png" alt=""><a href="listtawaran.php">Buat Tawaran</a></li>
        <li><img src="cb.png" alt=""><a href="seleksivendor.php">Seleksi Vendor</a></li>
        <li><img src="sh.png" alt=""><a href="negoisasi.php">Negosiasi</a></li>
        <li><img src="undo.png" alt=""><a href="kontroltender.php">Kontrol Tender</a></li>
        <li><img src="bat.png" alt=""><a href="pembuatantender.php">Buat Akun Tender</a></li>
        <li><img src="as.png" alt=""><a href="buatakunsupir.php">Buat Akun Supir</a></li>
        <li><img src="file.png" alt=""><a href="datakendaraan.php">Data Kendaraan</a></li>
        <li><img src="alert.png" alt=""><a href="daftarkomplain.php">Daftar Komplain</a></li>
    </ul>
</div>

<div class="navbar">
    <div class="menu">
        <ul>
            <li><a href="#">Admin</a><img src="bp.png" alt=""></li>
            <li><a href="logout.php">Logout</a></li>
        </ul>
    </div>
</div>

<!-- Daftar Vendor -->
<div class="main-content vendor">
    <h2>Seleksi Vendor</h2>
    
    <!-- Search Bar -->
    <div class="search-container">
        <input type="text" placeholder="Cari Vendor">
        <button class="search-button">Cari</button>
    </div>

    <div class="table-container">
        <table>
            <thead>
                <tr>
                    <th>Nama Perusahaan</th>
                    <th>NIB Perusahaan</th>
                    <th>Alamat Perusahaan</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Vendor A</td>
                    <td>1234567890</td>
                    <td>Jl. Manggis Raya</td>
                    <td>
                        <button class="delete-button" onclick="openDeleteModal()">Hapus</button>
                        <button class="cek-button" onclick="window.location.href='cekseleksivendor.php' ">Cek</button>
                    </td>
                </tr>
                <tr>
                <!-- Tambahkan baris data vendor lainnya -->
            </tbody>
        </table>
    </div>
</div>

<!-- Modal Pop-up untuk Hapus Vendor -->
<div class="delete-modal" id="delete-modal">
    <div class="delete-modal-content">
        <p>Hapus data vendor?</p>
        <div class="delete-modal-buttons">
            <button class="confirm-button" onclick="deleteVendor()">Hapus</button>
            <button class="cancel-button" onclick="closeDeleteModal()">Batal</button>
        </div>
    </div>
</div>

<script>
    function openModal() {
        document.getElementById('modal').style.display = 'flex';
    }

    function closeModal() {
        document.getElementById('modal').style.display = 'none';
    }

    function openDeleteModal() {
        document.getElementById('delete-modal').style.display = 'flex';
    }

    function closeDeleteModal() {
        document.getElementById('delete-modal').style.display = 'none';
    }

    function deleteVendor() {
        alert("Data vendor dihapus");
        closeDeleteModal();
    }
</script>

</body>
</html>
