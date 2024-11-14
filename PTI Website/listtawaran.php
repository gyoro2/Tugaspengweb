<?php
    session_start();
    include 'database.php'; // Pastikan ini adalah koneksi ke database

    // Cek apakah user adalah admin
    if (!isset($_SESSION['role']) || $_SESSION['role'] != 'admin') {
        header('Location: index.php');
        exit();
    }
?>

<!DOCTYPE html>
< lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Tawaran</title>
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

    <div class="content">
        <h2>Daftar Tawaran</h2>

        <div class="wrapper">
        <div class="button-container-tawaran">
            <button class="tambah-button" onclick="window.location.href='buattawaran.php'">Tambah Tawaran</button>
        </div>

        <div class="search-container-tawaran">
            <input type="text" placeholder="Cari Vendor">
            <button class="search-button">Cari</button>
        </div>
    </div>

        <div class="table-container">
            <table>
                <thead>
                    <tr>
                        <th>Judul Tawaran</th>
                        <th>Jenis Barang</th>
                        <th>Range Harga</th>
                        <th>Masa Berlaku</th>
                        <th>Deskripsi</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                <td>Dibutuhkan Air Mineral</td>
                <td>Minuman</td>
                <td>RP 1.000.000</td>
                <td>1/1/1999</td>
                <td>Contoh</td>
                <div class="wrapper">
                        <td>
                            <button class="edit-button" onclick="window.location.href='edittawaran.php'">Edit</button>
                            <button class="cek-button" onclick="openModal()">Cek</button>
                            <button class="delete-button" onclick="openDeleteModal()">Hapus</button>
                        </td>
                    </div>
                </tbody>
            </table>
        </div>
    </div>

    <!-- Tombol Tambah Akun -->


    <!-- Modal Pop-up untuk Cek Vendor -->
    <div class="modal" id="modal">
        <div class="modal-content">
            <h3>Detail Tawaran</h3>
            <p>Judul Tawaran : Dibutuhkan Air Mineral</p>
            <p>Jenis Barang : Minuman</p>
            <p>Range Harga : RP 1.000.000</p>
            <p>Masa Berlaku : 1/1/1999</p>
            <p>Deskripsi : Contoh</p>
            <div class="modal-buttons">
                <button class="close-button" onclick="closeModal()">Tutup</button>
            </div>
        </div>
    </div>

    <!-- Modal Pop-up untuk Hapus Vendor -->
    <div class="delete-modal" id="delete-modal">
        <div class="delete-modal-content">
            <p>Hapus data tawaran?</p>
            <div class="delete-modal-buttons">
                <button class="delete-button" onclick="deleteTender()">Hapus</button>
                <button class="close-button" onclick="closeDeleteModal()">Batal</button>
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

        function deleteVendor() {
            alert("Tawaran dihapus");
            closeDeleteModal();
        }
    </script>
</body>
 

</html>
