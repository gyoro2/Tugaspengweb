<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Akun Supir</title>
    <link rel="stylesheet" href="styledash.css">
</head>
<body>

<!-- Sidebar -->
<div class="sidebar">
    <ul>
        <h2>SIVASAK</h2>
        <li><img src="home.png" alt=""><a href="dashboard.php">Dashboard</a></li>
        <li><img src="pb.png" alt=""><a href="buattawaran.php">Buat Tawaran</a></li>
        <li><img src="cb.png" alt=""><a href="seleksivendor.php">Seleksi Vendor</a></li>
        <li><img src="sh.png" alt=""><a href="negoisasi.php">Negosiasi</a></li>
        <li><img src="undo.png" alt=""><a href="kontroltender.php">Kontrol Tender</a></li>
        <li><img src="bat.png" alt=""><a href="pembuatantender.php">Buat Akun Tender</a></li>
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

<!-- Daftar Akun Supir -->
<div class="akun">
    <h2>Daftar Akun Supir</h2>
    
    <!-- Tombol Tambah Akun -->
    <div class="button-container">
        <button class="tambah-button" onclick="window.location.href='buatakunsupir.php'">Tambah Akun</button>
    </div>

    <div class="table-container">
        <table>
            <thead>
                <tr>
                    <th>Nama Supir</th>
                    <th>No Telpon</th>
                    <th>Email</th>
                    <th>Jenis Kendaraan</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Supir 1</td>
                    <td>08123456789</td>
                    <td>supir1@example.com</td>
                    <td>Truck</td>
                    <td>
                        <button class="edit-button" onclick="window.location.href='editakunsupir.php'">Edit</button>
                        <button class="cek-button" onclick="openModal()">Cek</button>
                        <button class="delete-button" onclick="openDeleteModal()">Hapus</button>
                    </td>
                </tr>
                <!-- Tambahkan baris data supir lainnya -->
            </tbody>
        </table>
    </div>
</div>

<!-- Modal Pop-up untuk Cek Akun Supir -->
<div class="modal" id="modal">
    <div class="modal-content">
        <h3>Detail Akun Supir</h3>
        <p>Nama Supir: Supir 1</p>
        <p>No Telpon: 08123456789</p>
        <p>Email: supir1@example.com</p>
        <p>Jenis Kendaraan: Truck</p>
        <p>Alamat: Jl. Contoh Alamat</p>
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
        alert("Data supir dihapus");
        closeDeleteModal();
    }
</script>

</body>
</html>
