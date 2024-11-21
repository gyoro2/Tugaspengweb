<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Daftar Supir</title>
    <link rel="stylesheet" href="styledash.css">
</head>
<body>

<!-- Sidebar -->
<?php include 'sidebar.php'?>

<!-- Navbar -->
<div class="navbar">
    <div class="menu">
        <ul>
            <li><a href="#">Admin</a><img src="bp.png" alt=""></li>
            <li><a href="logout.php">Logout</a></li>
        </ul>
    </div>
</div>

<!-- Detail Tawaran Section -->
<div class="content">
        <h2>Detail Data Supir</h2>
        <div class="details-box">
            <table>
                <tr>
                    <td>Nomor Polisi</td>
                    <td>BE 9090 XX</td>
                </tr>
                <tr>
                    <td>Tahun Pembuatan</td>
                    <td>2019</td>
                </tr>
                <tr>
                    <td>Jenis Kendaraan</td>
                    <td>Dumptruck</td>
                </tr>
                <tr>
                    <td>No.STNK</td>
                    <td>STNK-001</td>
                </tr>
                <tr>
                    <td>Masa Berlaku STNK</td>
                    <td>2025/05/10</td>
                </tr>
                <tr>
                    <td>Masa Berlaku Pajak</td>
                    <td>2025/05/10</td>
                </tr>
                <tr>
                    <td>Masa Berlaku Keur Kepala</td>
                    <td>2025/05/10</td>
                </tr>
                <tr>
                    <td>Masa Berlaku Keur Ekor</td>
                    <td>2025/05/10</td>
                </tr>
                <tr>
                    <td>Keterangan</td>
                    <td>Kendaraan Operasional</td>
                </tr>
            </table>
        </div>
        <button class="back-tombol" onclick="window.history.back()" style="margin-left: 291px; margin-top: 20px;">Kembali</button>
</div>

<script>
    function openIsiModal() {
        document.getElementById('isi-modal').style.display = 'flex';
    }

    function closeIsiModal() {
        document.getElementById('isi-modal').style.display = 'none';
    }
</script>

</body>
</html>
