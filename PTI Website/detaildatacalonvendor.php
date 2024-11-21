<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Tawaran</title>
    <link rel="stylesheet" href="styledash.css">
</head>
<body>

<!-- Sidebar -->
<?php include 'sidebar.php'?>

<!-- Navbar -->
<div class="navbar">
    <div class="menu">
        <ul>
            <li><a href="#">Vendor</a><img src="bp.png" alt=""></li>
            <li><a href="logout.php">Logout</a></li>
        </ul>
    </div>
</div>

<!-- Detail Tawaran Section -->
<div class="content">
    <div class="offer-details main-content">
        <h2>Detail Tawaran</h2>
        <div class="details-box">
            <table>
                <tr>
                    <td>Nomor Rekanan</td>
                    <td>1234</td>
                </tr>
                <tr>
                    <td>Nama Perusahaan</td>
                    <td>PT JAYA</td>
                </tr>
                <tr>
                    <td>NIB Perusahaan</td>
                    <td>123456</td>
                </tr>
                <tr>
                    <td>Alamat Kantor</td>
                    <td>JL. Belimbing</td>
                </tr>
                <tr>
                    <td>No. NPWP</td>
                    <td>123.456.789009</td>
                </tr>
                <tr>
                    <td>Bidang Usaha</td>
                    <td>Elektronik</td>
                </tr>
                <tr>
                    <td>Alamat NPWP</td>
                    <td>JL. Manggis</td>
                </tr>
                <tr>
                    <td>Pimpinan/Direktur Utama</td>
                    <td>Personili</td>
                </tr>
                <tr>
                    <td>Personil Penghubung</td>
                    <td>Adi Setiawan</td>
                </tr>
                <tr>
                    <td>Barang/Jasa yang dipasok</td>
                    <td>Elektronik</td>
                </tr>
                <tr>
                    <td>Alamat Pembayaran</td>
                    <td>JL. Manggis</td>
                </tr>
                <tr>
                    <td>Nama Bank</td>
                    <td>Mandiri</td>
                </tr>
                <tr>
                    <td>Cabang</td>
                    <td>Jakarta</td>
                </tr>
                <tr>
                    <td>No. Rekening</td>
                    <td>5726958205</td>
                </tr>
                <tr>
                    <td>Atas Nama</td>
                    <td>Ade Wijaya</td>
                </tr>
            </table>
        </div>
    </div>
</div>

<script>
    function openIsiModal() {
        document.getElementById('isi-modal').style.display = 'flex';
    }

    function closeIsiModal() {
        document.getElementById('isi-modal').style.display = 'none';
    }
</script>

</body>
</html>
