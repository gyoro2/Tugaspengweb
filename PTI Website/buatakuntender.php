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

    <!-- Daftar Akun Tender -->
    <div class="content">
        <h2>Buat Akun Vendor</h2>
        <div class="form-container">
            <form action="proses_input.php" method="POST">
                    <tr>
                        <th>Nama Vendor</th>
                        <td><input type="text" id="nama" name="nama"></td>
                    </tr>
                    <tr>
                        <th>No. Telpon</th>
                        <td><input type="text" id="telpon" name="telpon"></td>
                    </tr>
                    <tr>
                        <th>Email</th>
                        <td><input type="email" id="email" name="email"></td>
                    </tr>
                    <tr>
                        <th>Password</th>
                        <td><input type="password" id="password" name="password"></td>
                    </tr>
                    <div class="form-buttons">
                <button type="submit" class="submit-button">Simpan</button>
                <button type="button" class="cancel-button" onclick="window.history.back()">Batal</button>
            </form>
        </div>
    </div>
    
    <div class="footer">
        Copyright © 2024. All rights reserved.
    </div>

</body>
</html>
