<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Akun Supir</title>
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

<!-- Edit Akun Tender Form -->
<div class="content">
    <h2>Edit Akun Vendor</h2>
    <div class="form-container">
        <form action="proses-edit-akun-supir.php" method="POST">
            <label for="nama">Nama Vendor</label>
            <input type="text" id="nama" name="nama" required value="">

            <label for="telpon">No. Telpon</label>
            <input type="text" id="telpon" name="telpon" required value="">

            <label for="email">Email</label>
            <input type="email" id="email" name="email" required value="">

            <label for="telpon">Password</label>
            <input type="password" id="password" name="password" required value="">

            <div class="form-buttons">
                <button type="submit" class="submit-button">Simpan</button>
                <button type="button" class="cancel-button" onclick="window.history.back()">Batal</button>
            </div>
        </form>
    </div>
</div>

</body>
</html>
