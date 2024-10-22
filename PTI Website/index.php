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
    <h2>Login</h2>
    <form method="POST" action="">
        <input type="email" name="email" required placeholder="Email"><br>
        <input type="password" name="password" required placeholder="Password"><br>
        <input type="submit" value="Login">
        <p style="text-align: center;">Don't have an account? <a href="register.php">Register</a></p>
    </form>

    <?php
    if (isset($error)) {
        echo "<p style='color:red;'>$error</p>";
    }
    ?>
</body>
</html>

<?php
$conn->close(); // Menutup koneksi di sini
?>
