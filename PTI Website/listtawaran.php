<?php
// session_start(); // Un-comment this line if sessions are needed
include 'database.php'; // Assumes you have a database connection file

// Fetching data from database
$sql = "SELECT * FROM tawaran"; // Replace "tawaran" with your actual table name
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Tawaran</title>
    <link rel="stylesheet" href="style.css"> <!-- Link ke file CSS Anda -->
</head>

<body>
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

    <!-- Main Content -->
    <div class="navbar">
    <div class="menu">
        <ul>
            <li><a href="#">Admin</a><img src="bp.png" alt=""></li>
            <li><a href="logout.php">Logout</a></li>
        </ul>
    </div>
</div>

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
                <?php
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>
                                <td><input type='checkbox'></td>
                                <td>{$row['judul_tawaran']}</td>
                                <td>{$row['jenis_barang']}</td>
                                <td>Rp" . number_format($row['range_harga'], 0, ',', '.') . "</td>
                                <td>" . date('d/m/Y', strtotime($row['masa_berlaku'])) . "</td>
                                <td>" . date('d/m/Y', strtotime($row['masa_berakhir'])) . "</td>
                                <td class='action-buttons'>
                                    <a href='edit.php?id={$row['id']}' class='btn btn-edit'>✏️</a>
                                    <a href='delete.php?id={$row['id']}' class='btn btn-delete'>🗑️</a>
                                    <a href='cek.php?id={$row['id']}' class='btn btn-check'>Cek</a>
                                </td>
                              </tr>";
                    }
                } else {
                    echo "<tr><td colspan='7'>Tidak ada data tawaran.</td></tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>
