<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Akun Supir</title>
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

<!-- Edit Akun Supir Form -->
<div class="content">
    <h2>Edit Data Kendaraan</h2>
    <div class="form-container">
        <form action="proses-edit-data-kendaraan.php" method="POST">
        <tr>
                        <th>Nomor Polisi</th>
                        <td><input type="text" name="nomor_polisi"></td>
                    </tr>
                    <tr>
                        <th>Tahun Pembuatan</th>
                        <td><input type="text" name="tahun_pembuatan"></td>
                    </tr>
                    <tr>
                        <th>Jenis Kendaraan</th>
                        <select name="jenis_kendaraan" id="jenis_kendaraan" required>
                            <option value="">Pilih Jenis Kendaraan...</option>
                            <option value="Trailer">Trailer</option>
                            <option value="Tronton">Tronton</option>
                            <option value="Dumptruck">Dumptruck</option>
                            <option value="Highblow">Highblow</option>
                            <option value="Wingbox">Wingbox</option>
                        </select>
                    </tr>
                    <tr>
                        <th>No.STNK</th>
                        <td><input type="text" name="no_stnk"></td>
                    </tr>
                    <tr>
                        <th>Masa Berlaku STNK</th>
                        <td><input type="text" name="masa_berlaku_stnk"></td>
                    </tr>
                    <tr>
                        <th>Masa Berlaku Pajak</th>
                        <td><input type="text" name="masa_berlaku_pajak"></td>
                    </tr>
                    <tr>
                        <th>Masa Berlaku Keur Kepala</th>
                        <td><input type="text" name="masa_berlaku_keur_kepala"></td>
                    </tr>
                    <tr>
                        <th>Masa Berlaku Keur Ekor</th>
                        <td><input type="text" name="masa_berlaku_keur_ekor"></td>
                    </tr>
                    <tr>
                        <th>Keterangan</th>
                        <td><input type="text" name="keterangan"></td>
                    </tr>
            <div class="form-buttons" style="background-color: #29A009;">
                <button type="submit" class="submit-button">Buat Akun</button>
            </div>
    </form>    
    </div>
    <button class="back-tombol" onclick="window.history.back()" style="margin-left: 291px; margin-top: 20px;">Kembali</button>
</div>

</body>
</html>
