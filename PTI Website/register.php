<?php
include 'database.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    // Cek apakah password dan konfirmasi password sama
    if ($password !== $confirm_password) {
        $error = "Password dan konfirmasi password tidak cocok!";
    } else {
        // Hash password untuk keamanan
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        // Cek apakah email atau username sudah ada di database
        $stmt_check = $conn->prepare("SELECT * FROM users WHERE email = ? OR username = ?");
        $stmt_check->bind_param("ss", $email, $username);
        $stmt_check->execute();
        $result = $stmt_check->get_result();

        if ($result->num_rows > 0) {
            $error = "Email atau Username sudah digunakan. Silakan pilih yang lain.";
        } else {
            // Simpan user baru ke database menggunakan prepared statement
            $stmt = $conn->prepare("INSERT INTO users (username, email, password) VALUES (?, ?, ?)");
            $stmt->bind_param("sss", $username, $email, $hashed_password);

            if ($stmt->execute()) {
                // Redirect ke halaman login setelah registrasi berhasil
                header("Location: index.php");
                exit(); // Tambahkan exit() setelah header untuk menghentikan eksekusi kode lebih lanjut
            } else {
                $error = "Terjadi kesalahan: " . $stmt->error;
            }
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>Create Account</h2>
    <form method="POST" action="">
        <input type="username" name="username" required placeholder="Username"><br>
        <input type="email" name="email" required placeholder="Email"><br>
        <input type="password" name="password" required placeholder="Password"><br>
        <input type="password" name="confirm_password" required placeholder="Confirm Password"><br>
        <input type="submit" value="Create Account">
        <p style="text-align: center;">Already have an account? <a href="index.php">Login</a></p>
    </form>

    <?php
    if (isset($error)) {
        echo "<p style='color:red;'>$error</p>";
    }
    ?>
</body>
</html>
