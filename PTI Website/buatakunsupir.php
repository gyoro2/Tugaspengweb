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
<?php include 'sidebar.php' ?>

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
<div class="content">
    <h2>Daftar Supir</h2>

    <div class="wrapper">
        <div class="button-container-supir">
            <button class="tambah-button" onclick="window.location.href='tambahakunsupir.php'">Tambah Akun</button>
        </div>

        <div class="search-container">
            <input type="text" placeholder="Cari Daftar Supir">
            <button class="search-button">Cari</button>
        </div>
    </div>

    <div class="table-container">
        <table>
            <thead>
                <tr>
                    <th>Nama Supir</th>
                    <th>No Telpon</th>
                    <th>Email</th>
                    <th>Password</th>
                    <th>Jenis Kendaraan</th>
                    <th>No. SIM</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Supir 1</td>
                    <td>08123456789</td>
                    <td>supir1@example.com</td>
                    <td>password</td>
                    <td>Truck</td>
                    <td>1234567890</td>
                    <td>
                        <button class="edit-button" onclick="window.location.href='editakunsupir.php'">Edit</button>
                        <button class="cek-button" onclick="window.location.href='detaildaftarsupir.php'">Cek</button>
                        <button class="delete-button" onclick="openDeleteModal()">Hapus</button>
                    </td>
                </tr>
                <!-- Tambahkan baris data supir lainnya -->
            </tbody>
        </table>
    </div>
</div>

<div class="footer">
        Copyright © 2024. All rights reserved.
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
