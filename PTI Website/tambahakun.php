<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buat Akun Supir</title>
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

<!-- Buat Akun Supir Form -->
<div class="content">
    <h2>Buat Akun Supir</h2>
    <div class="form-container">
        <form action="proses-akun-supir.php" method="POST">
            <label for="nama">Nama Supir</label>
            <input type="text" id="nama" name="nama" required>

            <label for="telpon">No. Telpon</label>
            <input type="text" id="telpon" name="telpon" required>

            <label for="email">Email</label>
            <input type="email" id="email" name="email" required>

            <label for="password">Password</label>
            <input type="password" id="password" name="password" required>

            <label for="kendaraan">Jenis Kendaraan</label>
            <select id="kendaraan" name="kendaraan" required>
                <option value="">Pilih Jenis Kendaraan</option>
                <option value="Trailer">Trailer</option>
                <option value="Tronton">Tronton</option>
                <option value="Box">Box</option>
                <option value="Highbed">Highbed</option>
                <option value="Wingbox">Wingbox</option>
            </select>

            <button type="submit" class="submit-button">Buat Akun</button>
        </form>
    </div>
</div>

</body>
</html>
