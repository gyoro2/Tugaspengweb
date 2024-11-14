<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran Tawaran</title>
    <link rel="stylesheet" href="styledash.css">
</head>
<div>

<!-- Sidebar -->
<div class="sidebar">
    <ul>
        <h2>SIVASAK</h2>
        <li><img src="home.png" alt=""><a href="DashboardVendor.php">Dashboard</a></li>
        <li><img src="sh.png" alt=""><a href="negosiasivendor.php">Negosiasi</a></li>
        <li><img src="pb.png" alt=""><a href="daftartawaran.php">Daftar Tawaran Perusahaan</a></li>
    </ul>
</div>

<!-- Navbar -->
<div class="navbar">
    <div class="menu">
        <ul>
            <li><a href="#">Vendor</a><img src="bp.png" alt=""></li>
            <li><a href="logout.php">Logout</a></li>
        </ul>
    </div>
</div>

<!-- Daftar Tawaran Section -->
<div class="content">   
    <div class="offer-list">
        <h2>Daftar Tawaran</h2>

         <!-- Tombol Pencari -->
    <div class="search-container">
        <input type="text" placeholder="">
        <button class="search-button">Cari</button>
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
                        <th>Deskripsi</th>
                        <th>Lampiran</th>
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
                        <td>contoh</td>
                        <td> - </td>
                        <td><a href="detailtawaran.php"><button class="apply-btn">Cek</button></a></td>
                    </tr>
                    <tr>
                        <td><input type="checkbox"></td>
                        <td>Medical Equipment</td>
                        <td>Peralatan Medis</td>
                        <td>Rp5.000.000 - Rp10.000.000</td>
                        <td>01/06/2023</td>
                        <td> contoh </td>
                        <td> -</td>
                        <td><a href="detailtawaran.php"><button class="apply-btn">Cek</button></a></td>
                    </tr>
                    <!-- Add more rows as needed -->
                </tbody>
            </table>
        </div>
    </div>
</div>
</body>
</html>
