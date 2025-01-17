<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
    <link rel="stylesheet" href="styledash.css">
</head>

<header>
<!-- Sidebar -->
<?php include 'sidebar.php'?>
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

    <div class="content">
        <h2>Daftar Tender</h2>
        <div class="table-container">
            <table>
                <thead>
                    <tr>
                        <th>Nama Vendor</th>
                        <th>Tanggal</th>
                        <th>Judul</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Vendor A</td>
                        <td>01/01/2024</td>
                        <td>Judul 1</td>
                        <td>
                            <button class="edit-button" onclick="openModal()">Cek</button>
                            <button class="delete-button" onclick="openDeleteModal()">Hapus</button>
                        </td>
                    </tr>
                    <!-- Tambahkan baris lainnya sesuai kebutuhan -->
                </tbody>
            </table>
        </div>
    </div>

    <!-- Modal Pop-up untuk Cek Tender -->
    <div class="modal" id="modal">
        <div class="modal-content">
            <h3>Detail Tender</h3>
            <p>Nama Vendor: Vendor A</p>
            <p>Tipe Perusahaan : PT</p>
            <p>Alamat Perusahaan: Jl. Amanah Raya</p>
            <p>No. Telepon: 08123456789</p>
            <p>Judul: Judul 1</p>
            <p>Deskripsi: Deskripsi singkat tender</p>
            <p>Harga: Rp 10.000.000</p>
            <p>NPWP: 123456789</p>
            <div class="modal-buttons">
                <button class="close-button" onclick="closeModal()">Tutup</button>
            </div>
        </div>
    </div>

    <!-- Modal Pop-up untuk Hapus Tender -->
    <div class="delete-modal" id="delete-modal">
        <div class="delete-modal-content">
            <p>Hapus data tender?</p>
            <div class="delete-modal-buttons">
                <button class="confirm-button" onclick="deleteTender()">Hapus</button>
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

        function deleteTender() {
            alert("Data tender dihapus");
            closeDeleteModal();
        }
    </script>
</body>
</html>