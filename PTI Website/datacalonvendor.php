<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Calon Vendor</title>
    <link rel="stylesheet" href="styledash.css">
</head>
<body>
<?php include 'sidebar.php'?>

        <!-- Navbar -->
<div class="navbar">
    <div class="menu">
        <ul>
            <li><a href="#">Admin</a><img src="bp.png" alt=""></li>
            <li><a href="logout.php">Logout</a></li>
        </ul>
    </div>
</div>
    <div class="content">
    <h2>Data Calon Vendor</h2>
    <div class="search-container">
        <input type="text" placeholder="Cari Nopol Kendaraan">
        <button class="search-button">Cari</button>
    </div>
    
    <div class="table-container">
                <table>
                    <thead>
                        <tr>
                            <th>Nomor Rekanan</th>
                            <th>Nama Perusahaan</th>
                            <th>NIB Perusahaan</th>
                            <th>Alamat Kantor</th>
                            <th>No. NPWP</th>
                            <th>Alamat NPWP</th>
                            <th>Bidang Usaha</th>
                            <th>Pimpinan/Direktur Utama</th>
                            <th>Personil Penghubung</th>
                            <th>Barang/Jasa yang dipasok</th>
                            <th>Alamat Pembayaran</th>
                            <th>Nama Bank</th>
                            <th>Cabang</th>
                            <th>No. Rekening</th>
                            <th>Atas Nama</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Contoh data -->
                        <tr>
                            <td>1234</td>
                            <td>PT JAYA</td>
                            <td>123456</td>
                            <td>Jl. Belimbing</td>
                            <td>123.456.789009</td>
                            <td>Jl. Manggis</td>
                            <td>Elektronik</td>
                            <td>Adi Setiawan</td>
                            <td>Personil1</td>
                            <td>Elektronik</td>
                            <td>Jl. Manggis</td>
                            <td>Mandiri</td>
                            <td>Jakarta</td>
                            <td>5726958205</td>
                            <td>Ade Wijaya</td>
                            <td>
                            <button class="delete-button" onclick="openDeleteModal()">Hapus</button>
                            <button class="cek-button" onclick="window.location.href='detaildatacalonvendor.php' ">Cek</button>
                        </td>
                        </tr>
                        <!-- Tambahkan lebih banyak data sesuai kebutuhan -->
                    </tbody>
                </table>
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
            alert("Data vendor dihapus");
            closeDeleteModal();
        }
    </script>
</body>
</html>
