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

<!-- Edit Akun Supir Form -->
<div class="content">
    <h2>Edit Akun Supir</h2>
    <div class="form-container">
        <form action="proses-edit-akun-supir.php" method="POST">
        <tr>
                        <th>Nama Supir</th>
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
                    <tr>
                        <th>Jenis Kendaraan</th>
                        <select name="jenis_kendaraan" id="jenis_kendaraan" required>
                            <option value="">Pilih Jenis Kendaraan...</option>
                            <option value="Trailer">>Trailer</option>
                            <option value="Tronton">Tronton</option>
                            <option value="Dumptruck">Dumptruck</option>
                            <option value="Highblow">Highblow</option>
                            <option value="Wingbox">Wingbox</option>
                        </select>
                    </tr>
                    <tr>
                        <th>No.SIM</th>
                        <td><input type="text" id="no.sim" name="no.sim"></td>
                    </tr>
                    
                    <div class="form-buttons" style="background-color: #29A009;">
                        <button type="submit" class="submit-button">Buat Akun</button>
                    </div>
            </form>    
        </div>
        <button class="back-tombol" onclick="window.history.back()" style="margin-left: 291px; margin-top: 20px;">Kembali</button>
</div>

</body>
</html>
