<?php
session_start();
include 'database.php';

// Proses registrasi
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil data dari form
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);

    // Query untuk menyimpan data ke database
    $sql = "INSERT INTO users (username, email, password) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sss", $username, $email, $password);

    if ($stmt->execute()) {
        // Jika berhasil, simpan status sukses di session dan arahkan ke halaman register kembali
        $_SESSION['register_success'] = true;
        header("Location: index.php");
        exit();
    } else {
        // Jika gagal
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="style.css">
    <style>
        /* CSS untuk pop-up notifikasi */
        .popup {
            display: none; /* Mulai dalam kondisi tidak terlihat */
            position: fixed;
            top: 20px;
            left: 50%;
            transform: translateX(-50%);
            background-color: #fff;
            color: #333;
            padding: 15px 30px;
            border-radius: 8px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);
            font-size: 16px;
            z-index: 1000;
        }
        .popup.success {
            border-left: 5px solid green;
        }
    </style>
</head>
<body>
    <!-- Pop-up Notifikasi -->
    <div id="popup" class="popup success">
        ✅ Akun anda sudah terdaftar, silahkan login.
    </div>

    <!-- Form Register -->
    <h2>Create Account</h2>
    <form method="POST" action="register.php">
        <input type="username" name="username" required placeholder="Username"><br>
        <input type="email" name="email" required placeholder="Email"><br>
        <input type="password" name="password" required placeholder="Password"><br>
        <input type="password" name="confirm_password" required placeholder="Confirm password"><br>
        <input type="submit" value="Create Account">
        <p>Already have an account? <a href="index.php">Login</a></p>
    </form>

    <script>
        // Cek apakah ada notifikasi sukses di session
        <?php if (isset($_SESSION['register_success']) && $_SESSION['register_success']): ?>
            // Tampilkan popup
            document.getElementById('popup').style.display = 'block';

            // Sembunyikan popup setelah 3 detik
            setTimeout(function() {
                document.getElementById('popup').style.display = 'none';
            }, 3000);

            <?php unset($_SESSION['register_success']); // Hapus session setelah ditampilkan ?>
        <?php endif; ?>
    </script>
</body>
</html>
