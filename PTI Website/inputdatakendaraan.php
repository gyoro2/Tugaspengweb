<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
    <link rel="stylesheet" href="styledash.css">
</head>

<header>
<div class="sidebar">
        <ul>
            <h2>SIVASAK</h2>
            <li><img src="home.png" alt=""><a href="dashboard.php">Dashboard</a></li>
            <li><img src="pb.png" alt=""><a href="buattawaran.php">Buat Tawaran</a></li>
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

<body>
<div class="navbar">
        <div class="menu">
            <ul>
                <li><a href="#">Admin</a><img src="bp.png" alt=""></li>
                <li><a href="logout.php">Logout</a></li>
            </ul>
        </div>
    </div>

    <!-- Daftar Akun Supir -->
    <div class="akun">
        <h2>Edit Akun Supir</h2>
        <div class="form-container">
            <form action="proses_input.php" method="POST">
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
                        <td><input type="text" name="jenis_kendaraan"></td>
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
                    <div class="form-buttons">
                <button type="submit" class="submit-button">Simpan</button>
                <button type="button" class="cancel-button" onclick="window.history.back()">Batal</button>
            </form>
        </div>
    </div>

</body>
</html>
