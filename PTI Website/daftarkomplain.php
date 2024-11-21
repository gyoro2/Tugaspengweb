<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
    <link rel="stylesheet" href="styledash.css">
</head>

<header>
<!-- Sidebar -->
<?php include 'sidebar.php' ?>
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

<!-- Daftar Komplain -->
<div class="content">
    <h2>Daftar Komplain</h2>
    
    <!-- Tombol Pencari -->
    <div class="search-container">
        <input type="text" placeholder="Cari Nopol Kendaraan">
        <button class="search-button">Cari</button>
    </div>

    <div class="table-container">
        <table>
            <thead>
                <tr>
                    <th>Nopol Kendaraan</th>
                    <th>Jenis Kendaraan</th>
                    <th>No. STNK</th>
                    <th>Keterangan</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>BE 9090 XX</td>
                    <td>Dumptruck</td>
                    <td>STNK-001</td>
                    <td>Ban Bocor</td>
                    <td>
                        <button class="delete-button" onclick="openDeleteModal()">Hapus</button>
                        <button class="cek-button" onclick="openModal()">Cek</button>
                    </td>
                </tr>
                <!-- Tambahkan baris data komplain lainnya -->
            </tbody>
        </table>
    </div>
</div>

<!-- Modal Pop-up untuk Cek Akun tender -->
<div class="modal" id="modal">
    <div class="modal-content">
        <h3>Detail Komplain</h3>
        <p>Nopol Kendaraan : BE 9090 XX</p>
        <p>Jenis Kendaraan : Dumptruck</p>
        <p>No. STNK : STNK-001</p>
        <p>Keterangan : Ban Bocor</p>
        <div class="modal-buttons">
            <button class="close-button" onclick="closeModal()">Tutup</button>
        </div>
    </div>
</div>
</div>

<!-- Modal Pop-up untuk Hapus Akun Supir -->
<div class="delete-modal" id="delete-modal">
    <div class="delete-modal-content">
        <p>Hapus data komplain?</p>
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
        alert("Data komplain dihapus");
        closeDeleteModal();
    }
</script>

</body>
</html>