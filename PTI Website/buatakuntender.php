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
            <li><img src="as.png" alt=""><a href="buatakunsupir.php">Buat Akun Supir</a></li>
            <li><img src="file.png" alt=""><a href="datakendaraan.php">Data Kendaraan</a></li>
            <li><img src="alert.png" alt=""><a href="daftarkomplain.php">Daftar Komplain</a></li>
            <li><img src="bat.png" alt=""><a href="pembuatantender.php">Buat Akun Tender</a></li>
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
                        <th>Nama Tender</th>
                        <td><input type="text" id="nama" name="nama"></td>
                    </tr>
                    <tr>
                        <th>No. Telpon</th>
                        <td><input type="text" id="telpon" name="telpon"></td>
                    </tr>
                    <tr>
                        <th>Email</th>
                        <td><input type="email" id="email" name="email"></td>
                    </tr>
                    <tr>
                        <th>Jenis</th>
                        <td><input type="text" id="jenis" name="jenis"></td>
                    </tr>
                    <tr>
                        <th>Alamat</th>
                        <td><input type="text" id="alamat" name="alamat"></td>
                    </tr>
                    <div class="form-buttons">
                <button type="submit" class="submit-button">Simpan</button>
                <button type="button" class="cancel-button" onclick="window.history.back()">Batal</button>
            </form>
        </div>
    </div>

</body>
</html>
