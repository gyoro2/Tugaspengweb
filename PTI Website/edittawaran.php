<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Akun Supir</title>
    <link rel="stylesheet" href="styledash.css">
</head>

<header>
<?php include 'sidebar.php'?>
</header>

<body>
    <!-- Main Content -->
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
    <form action="proses-edit-akun-supir.php" method="POST">
        <label for="deskripsi">Deskripsi</label>
        <input type="text" id="deskripsi" name="deskripsi" required value="Dibutuhkan Air Mineral">
        <br><br>

        <label for="berlaku">Masa Berlaku</label>
        <input type="text" id="berlaku" name="berlaku" required value="1/1/1999">
        <br><br>

        <label for="berakhir">Masa Berakhir</label>
        <input type="text" id="berlaku" name="berlaku" required value="31/31/1999">
        <br><br>

        <div class="form-buttons">
            <button type="submit" class="submit-button" onclick="window.location.href='listtawaran.php' " >Simpan</button>
            <button type="button" class="cancel-button" onclick="window.history.back()">Batal</button>
        </div>
    </form>
    </div>
</body>
</html>
