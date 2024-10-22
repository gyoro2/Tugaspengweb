<?php
// database.php
$servername = "localhost";
$username = "root"; // username database
$password = ""; // password database
$dbname = "pti_website"; // ganti dengan nama database yang sesuai

// Membuat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Cek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Cek apakah akun admin sudah ada
$sql_check_admin = "SELECT * FROM users WHERE username = 'admin'";
$result = $conn->query($sql_check_admin);

if ($result && $result->num_rows == 0) {
    // Jika belum ada, buat akun admin baru
    $admin_username = 'admin';
    $admin_email = 'admin@gmail.com';
    $admin_password = password_hash('admin000', PASSWORD_DEFAULT); // Ganti dengan password yang diinginkan
    $role = 'admin';

    $sql_create_admin = "INSERT INTO users (username, email, password, role) VALUES (?, ?, ?, ?)";
    $stmt = $conn->prepare($sql_create_admin);
    $stmt->bind_param("ssss", $admin_username, $admin_email, $admin_password, $role);
    
    if ($stmt->execute()) {
        echo "Akun admin berhasil dibuat!";
    } else {
        echo "Terjadi kesalahan: " . $stmt->error;
    }

    $stmt->close();
}
?>
