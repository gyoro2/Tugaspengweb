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
            header("Location: register.php"); // Ubah ke 'register.php' agar halaman tetap di register
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
</head>

<body>
    <div id="popup" class="popup success">
        ✅ Akun anda sudah terdaftar, silahkan login.
    </div>
    <div class="container">
        <img src="pgp.png" alt="Logo" class="logo">
        <h2>Create Account</h2>
        <div class="form">
            <form method="POST" action="">
                <input type="text" name="username" placeholder="Username" required><br>
                <input type="email" name="email" placeholder="Email" required><br>
                <input type="password" name="password" placeholder="Password" required><br>
                <input type="password" name="confirm_password" placeholder="Confirm Password" required><br>
                <div style="text-align: center"><input type="submit" value="Create Account"></div><br>
                <p>Already have an account? <a href="index.php">Login</a></p>
            </form>
        </div>

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
    </div>
</body>
</html>
