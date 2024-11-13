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
<html>
<head>
    <title>Dashboard Admin</title>
    <link rel="stylesheet" href="styledash.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>

<!-- Sidebar -->
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

<!-- Navbar -->
<div class="navbar">
    <div class="menu">
        <ul>
            <li><a href="#">Admin</a><img src="bp.png" alt=""></li>
            <li><a href="logout.php">Logout</a></li>
        </ul>
    </div>
</div>

<!-- Main Content -->
<div class="main-content">
    <!-- Dashboard Cards Section -->
    <div class="dashboard-cards">
        <div class="card card-1">
            <h3>Data Supir</h3>
            <p>30</p>
            <button>More Info</button>
        </div>
        <div class="card card-2">
            <h3>Data Vendor</h3>
            <p>15</p>
            <button>More Info</button>
        </div>
        <div class="card card-3">
            <h3>Daftar Komplain</h3>
            <p>5</p>
            <button>More Info</button>
        </div>
    </div>

    <!-- Traffic Chart Section -->
    <div class="traffic-chart">
        <canvas id="trafficChart"></canvas>
    </div>
</div>

<!-- Include script to render the chart using Chart.js -->
<script>
    var ctx = document.getElementById('trafficChart').getContext('2d');
    var trafficChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['Data Supir', 'Data Vendor', 'Daftar Komplain'],
            datasets: [{
                label: 'Traffic',
                data: [30, 15, 5], // Replace with dynamic values if needed
                backgroundColor: [
                    '#007bff', // Blue
                    '#dc3545', // Red
                    '#28a745'  // Green
                ],
                borderColor: [
                    '#004085', '#721c24', '#155724'
                ],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
</script>

</body>
</html>
