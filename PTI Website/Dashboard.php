<?php
session_start();

// Cek apakah user adalah admin
if (!isset($_SESSION['role']) || $_SESSION['role'] != 'admin') {
    header('Location: index.php');
    exit();
}

// Proses pembuatan akun tender
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    include 'db_connection.php'; // Pastikan file koneksi database kamu benar

    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT); // Menggunakan hash untuk keamanan password
    $role = 'tender'; // Role selalu tender untuk akun baru yang dibuat admin

    // Cek apakah username sudah digunakan
    $sql_check = "SELECT * FROM users WHERE username = '$username'";
    $result = mysqli_query($conn, $sql_check);

    if (mysqli_num_rows($result) > 0) {
        $error_message = "Username sudah digunakan. Silakan pilih username lain.";
    } else {
        // Query untuk menyimpan user baru ke database
        $sql = "INSERT INTO users (username, password, role) VALUES ('$username', '$password', '$role')";

        if (mysqli_query($conn, $sql)) {
            $success_message = "Akun Tender berhasil dibuat!";
        } else {
            $error_message = "Terjadi kesalahan: " . mysqli_error($conn);
        }
    }

    mysqli_close($conn); // Tutup koneksi database
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard Admin</title>
    <link rel="stylesheet" href="styledash.css">
</head>

<header>
<div class="sidebar">
        <ul>
            <h2>SIVASAK</h2>
            <li><img src="home.png" alt=""><a href="dashboard_admin.php">Dashboard</a></li>
            <li><img src="pb.png" alt=""><a href="buattawaran.php">Buat Tawaran</a></li>
            <li><img src="cb.png" alt=""><a href="seleksivendor.php">Seleksi Vendor</a></li>
            <li><img src="sh.png" alt=""><a href="negoisasi.php">Negoisasi</a></li>
            <li><img src="undo.png" alt=""><a href="kontroltender.php">Kontrol Tender</a></li>
            <li><img src="as.png" alt=""><a href="buatakunsupir.php">Buat Akun Supir</a></li>
            <li><img src="file.png" alt=""><a href="datakendaraan.php">Data Kendaraan</a></li>
            <li><img src="alert.png" alt=""><a href="daftarkomplain.php">Daftar Komplain</a></li>
            <!-- Tambah Menu Buat Akun Tender -->
            <li><img src="user.png" alt=""><a href="buatakuntender.php">Buat Akun Tender</a></li>
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
        <h2>Buat Akun Tender Baru</h2>
        <!-- Menampilkan pesan jika ada -->
        <?php if (isset($error_message)): ?>
            <p style="color: red;"><?php echo $error_message; ?></p>
        <?php elseif (isset($success_message)): ?>
            <p style="color: green;"><?php echo $success_message; ?></p>
        <?php endif; ?>

        <!-- Form untuk membuat akun tender -->
        <form method="POST" action="buatakuntender.php">
            <label for="username">Username:</label><br>
            <input type="text" id="username" name="username" required><br><br>

            <label for="password">Password:</label><br>
            <input type="password" id="password" name="password" required><br><br>

            <button type="submit">Buat Akun</button>
        </form>

        <h3>Daftar Tender yang Terdaftar</h3>
        <ul>
        <?php
        include 'db_connection.php';
        // Menampilkan daftar tender
        $sql = "SELECT username FROM users WHERE role = 'tender'";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<li>" . $row['username'] . "</li>";
            }
        } else {
            echo "<li>Belum ada tender yang terdaftar.</li>";
        }

        mysqli_close($conn); // Tutup koneksi database
        ?>
        </ul>
    </div>
</body>
</html>
