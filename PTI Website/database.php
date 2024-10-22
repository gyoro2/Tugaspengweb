<?php
// Database configuration
$servername = "localhost";  // biasanya "localhost"
$username = "root";         // username default XAMPP adalah "root"
$password = "";             // password default XAMPP kosong
$dbname = "pti_website";  // ganti dengan nama database kamu

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>