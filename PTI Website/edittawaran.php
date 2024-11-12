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
            <li><img src="alert.png" alt=""><a href="daftarkomplain.php">Daftar Komplain</a><
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

<!-- Edit Akun Supir Form -->
<div class="main-content vendor">
<h2>Edit Akun Supir</h2>
<form action="proses-edit-akun-supir.php" method="POST">
    <label for="nama">Deskripsi</label>
    <input type="text" id="nama" name="nama" required value="Dibutuhkan Air Mineral">
    <br><br>

    <label for="telpon">Masa Berlaku</label>
    <input type="text" id="telpon" name="telpon" required value="1/1/1999">
    <br><br>

    <label for="email">Masa Berakhir</label>
    <input type="email" id="email" name="email" required value="31/31/1999">
    <br><br>

    <div class="form-buttons">
                <button type="submit" class="submit-button" onclick="window.location.href='listtawaran.php' " >Simpan</button>
                <button type="button" class="cancel-button" onclick="window.history.back()">Batal</button>
            </div>
</form>
</div>

</body>
</html>
