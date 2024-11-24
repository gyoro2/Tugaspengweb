<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $phone = trim($_POST['phone']);
    $gender = trim($_POST['gender']);
    $file = $_FILES['fileUpload'];

    $errors = [];

    // Validasi data kosong
    if (empty($name) || strlen($name) < 3) {
        $errors[] = "Nama harus diisi dan minimal 3 karakter.";
    }
    if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Email tidak valid.";
    }
    if (empty($phone) || !preg_match('/^\d+$/', $phone)) {
        $errors[] = "Nomor telepon hanya boleh berisi angka.";
    }
    if (empty($gender)) {
        $errors[] = "Jenis kelamin harus dipilih.";
    }

    // Validasi file
    if ($file['error'] != 0) {
        $errors[] = "Gagal mengunggah file.";
    } else {
        $fileType = mime_content_type($file['tmp_name']);
        $fileSize = $file['size'];

        if ($fileType != "text/plain") {
            $errors[] = "Hanya file teks (.txt) yang diperbolehkan.";
        }
        if ($fileSize > 1048576) { // 1 MB
            $errors[] = "Ukuran file tidak boleh lebih dari 1MB.";
        }
    }

    if (!empty($errors)) {
        foreach ($errors as $error) {
            echo "<p style='color:red;'>$error</p>";
        }
        exit;
    }

    // Membaca isi file
    $fileContent = file_get_contents($file['tmp_name']);

    // Redirect ke result.php dengan data
    session_start();
    $_SESSION['data'] = compact('name', 'email', 'phone', 'gender', 'fileContent');
    header("Location: hasil.php");
    exit;
}
?>
