<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran Tawaran</title>
    <link rel="stylesheet" href="styledash.css">
</head>
<body>

<!-- Sidebar -->
<div class="sidebar">
    <ul>
        <h2>SIVASAK</h2>
        <li><img src="home.png" alt=""><a href="dashboardvendor.php">Dashboard</a></li>
        <li><img src="register.png" alt=""><a href="pendaftaran.php">Pendaftaran</a></li>
        <li><img src="negoisasi.png" alt=""><a href="negosiasi.php">Negosiasi</a></li>
        <li><img src="announcement.png" alt=""><a href="pengumuman_pemenang.php">Pengumuman Pemenang Tender</a></li>
        <li><img src="offer.png" alt=""><a href="daftar_tawaran.php">Daftar Tawaran Perusahaan</a></li>
    </ul>
</div>

<!-- Navbar -->
<div class="navbar">
    <div class="menu">
        <ul>
            <li><a href="#">Vendor</a><img src="vendor_icon.png" alt=""></li>
            <li><a href="logout.php">Logout</a></li>
        </ul>
    </div>
</div>

<!-- Daftar Tawaran Section -->
<div class="offer-list main-content">
    <h2>Daftar Tawaran</h2>
    <div class="search-bar">
        <input type="text" placeholder="Search...">
    </div>
    <div class="table-container">
        <table>
            <thead>
                <tr>
                    <th><input type="checkbox"></th>
                    <th>Judul Tawaran</th>
                    <th>Jenis Barang</th>
                    <th>Range Harga</th>
                    <th>Masa Berlaku</th>
                    <th>Masa Berakhir</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <!-- Example rows, these should be populated dynamically -->
                <tr>
                    <td><input type="checkbox"></td>
                    <td>Education Supply</td>
                    <td>Alat Tulis</td>
                    <td>Rp1.000.000 - Rp5.000.000</td>
                    <td>25/05/2023</td>
                    <td>25/06/2023</td>
                    <td><a href="detailtawaran.php"><button class="apply-btn">Cek</button></a></td>
                </tr>
                <tr>
                    <td><input type="checkbox"></td>
                    <td>Medical Equipment</td>
                    <td>Peralatan Medis</td>
                    <td>Rp5.000.000 - Rp10.000.000</td>
                    <td>01/06/2023</td>
                    <td>01/07/2023</td>
                    <td><a href="detailtawaran.php"><button class="apply-btn">Cek</button></a></td>
                </tr>
                <!-- Add more rows as needed -->
            </tbody>
        </table>
    </div>
</div>

</body>
</html>
