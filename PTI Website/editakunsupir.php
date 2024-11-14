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
    <h2>Edit Akun Supir</h2>
    <div class="form-container">
        <form action="proses-edit-akun-supir.php" method="POST">
            <label for="nama">Nama Supir</label>
            <input type="text" id="nama" name="nama" required value="Supir 1">

            <label for="telpon">No. Telpon</label>
            <input type="text" id="telpon" name="telpon" required value="08123456789">

            <label for="email">Email</label>
            <input type="email" id="email" name="email" required value="supir1@example.com">

            <label for="no_swi">No. SWI</label>
            <input type="text" id="no_swi" name="no_swi" required value="SWI1234">

            <label for="kendaraan">Jenis Kendaraan</label>
            <select id="kendaraan" name="kendaraan" required>
                <option value="Trailer">Trailer</option>
                <option value="Tronton">Tronton</option>
                <option value="Box" selected>Box</option>
                <option value="Highbed">Highbed</option>
                <option value="Wingbox">Wingbox</option>
            </select>

            <label for="alamat">Alamat</label>
            <input type="text" id="alamat" name="alamat" required value="Jl. Contoh Alamat">

            <div class="form-buttons">
                <button type="submit" class="submit-button">Simpan</button>
                <button type="button" class="cancel-button" onclick="window.history.back()">Batal</button>
            </div>
        </form>
    </div>
</div>

</body>
</html>
