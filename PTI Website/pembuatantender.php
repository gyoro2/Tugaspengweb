<?php
session_start();
include 'database.php'; // Pastikan ini adalah koneksi ke database

// Cek apakah user adalah admin
if (!isset($_SESSION['role']) || $_SESSION['role'] != 'admin') {
    header('Location: index.php');
    exit();
}

// Proses pembuatan akun tender
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT); // Menggunakan hash untuk keamanan password
    $role = 'tender'; // Role selalu tender untuk akun baru yang dibuat admin

    // Cek apakah username sudah digunakan
    $sql_check = "SELECT * FROM users WHERE username = ?";
    $stmt_check = $conn->prepare($sql_check);
    $stmt_check->bind_param("s", $username);
    $stmt_check->execute();
    $result_check = $stmt_check->get_result();

    if ($result_check->num_rows > 0) {
        $error_message = "Username sudah digunakan. Silakan pilih username lain.";
    } else {
        // Query untuk menyimpan user baru ke database
        $sql = "INSERT INTO users (username, password, role) VALUES (?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sss", $username, $password, $role);

        if ($stmt->execute()) {
            $success_message = "Akun Tender berhasil dibuat!";
        } else {
            $error_message = "Terjadi kesalahan: " . $stmt->error;
        }
    }

    $stmt_check->close();
    $stmt->close();
    $conn->close(); // Tutup koneksi database
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styledash.css">
</head>

<header>
<div class="sidebar">
        <ul>
            <h2>SIVASAK</h2>
            <li><img src="home.png" alt=""><a href="dashboard.php">Dashboard</a></li>
            <li><img src="pb.png" alt=""><a href="buattawaran.php">Buat Tawaran</a></li>
            <li><img src="cb.png" alt=""><a href="seleksivendor.php">Seleksi Vendor</a></li>
            <li><img src="sh.png" alt=""><a href="negoisasi.php">Negoisasi</a></li>
            <li><img src="undo.png" alt=""><a href="kontroltender.php">Kontrol Tender</a></li>
            <li><img src="as.png" alt=""><a href="buatakunsupir.php">Buat Akun Supir</a></li>
            <li><img src="file.png" alt=""><a href="datakendaraan.php">Data Kendaraan</a></li>
            <li><img src="alert.png" alt=""><a href="daftarkomplain.php">Daftar Komplain</a></li>
            <li><img src="user.png" alt=""><a href="pembuatantender.php">Buat Akun Tender</a></li>
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

<div class="akun">
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
        include 'database.php'; // Pastikan ini adalah koneksi ke database
        // Menampilkan daftar tender
        $sql = "SELECT username FROM users WHERE role = 'tender'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<li>" . $row['username'] . "</li>";
            }
        } else {
            echo "<li>Belum ada tender yang terdaftar.</li>";
        }

        $conn->close(); // Tutup koneksi database
        ?>
        </ul>
    </div>
</body>
</html>