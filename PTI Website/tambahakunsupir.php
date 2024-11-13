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

<body>
<div class="navbar">
        <div class="menu">
            <ul>
                <li><a href="#">Admin</a><img src="bp.png" alt=""></li>
                <li><a href="logout.php">Logout</a></li>
            </ul>
        </div>
    </div>

    <!-- Daftar Akun Tender -->
    <div class="akun">
        <h2>Buat Akun Vendor</h2>
        <div class="form-container">
            <form action="proses_input.php" method="POST">
                    <tr>
                        <th>Nama Supir</th>
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
                        <th>Password</th>
                        <td><input type="password" id="password" name="password"></td>
                    </tr>

                    <label for="jenis_kendaraan">Jenis Kendaraan</label>
            <select name="jenis_kendaraan" id="jenis_kendaraan" required>
                <option value="">Pilih pengalaman</option>
                <option value="Trailer">>Trailer</option>
                <option value="Tronton">Tronton</option>
                <option value="Dumptruck">Dumptruck</option>
                <option value="Highblow">Highblow</option>
                <option value="Wingbox">Wingbox</option>
            </selec>
                    <div class="form-buttons">
                <button type="submit" class="submit-button">Simpan</button>
                <button type="button" class="cancel-button" onclick="window.history.back()">Batal</button>
            </form>
        </div>
    </div>

</body>
</html>
