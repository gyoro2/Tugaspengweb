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
    <h2>Daftar Kendaraan</h2>
    
    <div class="search-container">
        <input type="text" placeholder="Cari Nopol Kendaraan">
        <button class="search-button">Cari</button>
    </div>

    <div class="table-container">
        <table>
            <thead>
                <tr>
                    <th>Nomor Polisi</th>
                    <th>Tahun Pembuatan</th>
                    <th>Jenis Kendaraan</th>
                    <th>No.STNK</th>
                    <th>Masa Berlaku STNK</th>
                    <th>Masa Berlaku Pajak</th>
                    <th>Masa Berlaku Keur Kepala</th>
                    <th>Masa Berlaku Keur Ekor</th>
                    <th>Keterangan</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>BE 9090 XX</td>
                    <td>2019</td>
                    <td>Dumptruck</td>
                    <td>STNK-001</td>
                    <td>2025/05/10</td>
                    <td>2025/05/10</td>
                    <td>2025/05/10</td>
                    <td>2025/05/10</td>
                    <td>Kendaraan Operasional</td>
                    <td>
                        <button class="edit-button" onclick="window.location.href='editakuntender.php'">Edit</button>
                        <button class="delete-button" onclick="openDeleteModal()">Hapus</button>
                        <button class="cek-button" onclick="openModal()">Cek</button>
                    </td>
                </tr>
                <!-- Tambahkan baris data tender lainnya -->
            </tbody>
        </table>
        <!-- Tombol Tambah Data Kendaraan -->
    <div class="button-container-kendaraan">
        <button class="tambah-button" onclick="window.location.href='inputdatakendaraan.php'">Tambah Data</button>
    </div>
</div>
    </div>


<!-- Modal Pop-up untuk Cek Akun tender -->
<div class="modal" id="modal">
    <div class="modal-content">
        <h3>Detail Data Kendaraan</h3>
        <p>Nomor Polisi: BE 9090 XX</p>
        <p>Tahun Pembuatan: 2019</p>
        <p>Jenis Kendaraan: Dumptruck</p>
        <p>No. STNK: STNK-001</p>
        <p>Masa Berlaku STNK: 2025/05/10</p>
        <p>Masa Berlaku Pajak: 2025/05/10</p>
        <p>Masa Berlaku Keur Kepala: 2025/05/10</p>
        <p>Masa Berlaku Keur Ekor: 2025/05/10</p>
        <p>Keterangan: Kendaraan Operasional</p>
        <div class="modal-buttons">
            <button class="close-button" onclick="closeModal()">Tutup</button>
        </div>
    </div>
</div>

<!-- Modal Pop-up untuk Hapus Akun Supir -->
<div class="delete-modal" id="delete-modal">
    <div class="delete-modal-content">
        <p>Hapus data supir?</p>
        <div class="delete-modal-buttons">
            <button class="confirm-button" onclick="deleteSupir()">Hapus</button>
            <button class="cancel-button" onclick="closeDeleteModal()">Batal</button>
        </div>
    </div>
</div>

<script>
    function openModal() {
        document.getElementById('modal').style.display = 'flex';
    }

    function closeModal() {
        document.getElementById('modal').style.display = 'none';
    }

    function openDeleteModal() {
        document.getElementById('delete-modal').style.display = 'flex';
    }

    function closeDeleteModal() {
        document.getElementById('delete-modal').style.display = 'none';
    }

    function deleteSupir() {
        alert("Data tender dihapus");
        closeDeleteModal();
    }
</script>

</body>
</html>