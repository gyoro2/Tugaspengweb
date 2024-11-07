<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pendaftaran Vendor</title>
    <link rel="stylesheet" href="styledash.css">
</head>
<body>

<!-- Sidebar -->
<div class="sidebar">
    <ul>
        <h2>SIVASAK</h2>
        <li><img src="home.png" alt=""><a href="dashboard.php">Dashboard</a></li>
        <li><img src="vendor.png" alt=""><a href="pendaftaran_vendor.php">Pendaftaran Vendor</a></li>
        <li><img src="announcement.png" alt=""><a href="pengumuman_pemenang.php">Pengumuman Pemenang Vendor</a></li>
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

<!-- Form Pendaftaran Vendor -->
<div class="content">
    <h2 class="form-title">Form Pendaftaran Vendor</h2>
    <div class="form-container">
        <form action="proses-pendaftaran-vendor.php" method="POST">
            <label for="nama">Nama Rekanan</label>
            <input type="text" id="nama" name="nama" required>

            <label for="nomor_rekanan">Nomor Rekanan</label>
            <input type="text" id="nomor_rekanan" name="nomor_rekanan" required>

            <label for="nib">NIB Perusahaan</label>
            <input type="text" id="nib" name="nib" required>

            <label for="alamat_npwp">Alamat NPWP</label>
            <input type="text" id="alamat_npwp" name="alamat_npwp" required>

            <label for="bidang_usaha">Bidang Usaha</label>
            <input type="text" id="bidang_usaha" name="bidang_usaha" required>

            <label for="direktur">Pimpinan/Direktur Perusahaan</label>
            <input type="text" id="direktur" name="direktur" required>

            <label for="personil_penghubung">Personil Penghubung</label>
            <input type="text" id="personil_penghubung" name="personil_penghubung" required>

            <label for="barang_jasa">Barang/Jasa yang Diambil</label>
            <input type="text" id="barang_jasa" name="barang_jasa" required>

            <label for="telpon">No. Telpon</label>
            <input type="text" id="telpon" name="telpon" required>

            <label for="email">Email</label>
            <input type="email" id="email" name="email" required>

            <label for="password">Password</label>
            <input type="password" id="password" name="password" required>

            <label for="nama_bank">Nama Bank</label>
            <input type="text" id="nama_bank" name="nama_bank" required>

            <label for="cabang">Cabang</label>
            <input type="text" id="cabang" name="cabang" required>

            <label for="no_rekening">No. Rekening</label>
            <input type="text" id="no_rekening" name="no_rekening" required>

            <label for="atas_nama_rekening">Atas Nama Rekening</label>
            <input type="text" id="atas_nama_rekening" name="atas_nama_rekening" required>


            <label for="kendaraan">Jenis Kendaraan</label>
            <select id="kendaraan" name="kendaraan" required>
                <option value="">Pilih Jenis Kendaraan</option>
                <option value="Trailer">Trailer</option>
                <option value="Tronton">Tronton</option>
                <option value="Box">Box</option>
                <option value="Highbed">Highbed</option>
                <option value="Wingbox">Wingbox</option>
            </select>

            <button type="submit" class="submit-button">Daftar</button>
        </form>
    </div>
</div>

</body>
</html>
