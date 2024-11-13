<?php
session_start();
include 'database.php'; // Pastikan ini adalah file yang mengatur koneksi ke database

// Cek apakah ada form login yang dikirim
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Ambil data user dari database berdasarkan email
    $sql = "SELECT * FROM users WHERE email = ?";
    $stmt = $conn->prepare($sql);

    if ($stmt) {
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();

            // Verifikasi password
            if (password_verify($password, $row['password'])) {
                // Simpan informasi user dalam session
                $_SESSION['username'] = $row['username'];
                $_SESSION['role'] = $row['role']; // Simpan role juga jika diperlukan
                header("Location: dashboard.php"); // Arahkan ke halaman dashboard setelah login
                exit();
            } else {
                $error = "Password salah!";
            }
        } else {
            $error = "User tidak ditemukan!";
        }

        // Menutup statement setelah selesai digunakan
        $stmt->close();
    } else {
        $error = "Query tidak valid: " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<div class="container">
    <img src="pgp.png" alt="Logo" class="logo">
    <h2>Login</h2>
    <div class="form">
        <form method="POST" action="">
            <input type="email" name="email" required placeholder="Email..."><br>
            <input type="password" name="password" id="password" required placeholder="Password..."><br><br>
            <input type="checkbox" onclick="togglePassword()"><label for="password"> Show Password </label>
            <br><br>
            <div style="text-align: center"> <input type="submit" value="Login"></div>
           
            <p>Don't have an account? <a href="register.php">Register</a></p>
        </form>
        <?php
        if (isset($error)) {
            echo "<p class='error'>$error</p>";
        }
        ?>
    </div>
</div>

<script>
    // Fungsi untuk mengubah tipe input password
    function togglePassword() {
        var passwordField = document.getElementById("password");
        if (passwordField.type === "password") {
            passwordField.type = "text";
        } else {
            passwordField.type = "password";
        }
    }
</script>
</body>
</html>

