<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Daftar Supir</title>
    <link rel="stylesheet" href="styledash.css">
</head>
<body>

<!-- Sidebar -->
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

<!-- Detail Tawaran Section -->
<div class="content">
        <h2>Detail Data Supir</h2>
        <div class="details-box">
            <table>
                <tr>
                    <td>Nama Supir</td>
                    <td>Supir 1</td>
                </tr>
                <tr>
                    <td>No.Telepon</td>
                    <td>08457295258</td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td>supir@gmail.com</td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td>sandi123</td>
                </tr>
                <tr>
                    <td>Jenis Kendaraan</td>
                    <td>Dumptruck</td>
                </tr>
                <tr>
                    <td>No.SIM</td>
                    <td>-</td>
                </tr>
            </table>
        </div>
        <button class="back-tombol" onclick="window.history.back()" style="margin-left: 291px; margin-top: 20px;">Kembali</button>
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
