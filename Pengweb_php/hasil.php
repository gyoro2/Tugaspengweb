<?php
session_start();
if (!isset($_SESSION['data'])) {
    echo "Tidak ada data untuk ditampilkan.";
    exit;
}

$data = $_SESSION['data'];
$userAgent = $_SERVER['HTTP_USER_AGENT'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Pendaftaran</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Hasil Pendaftaran</h1>
    <table>
        <tr>
            <th>Nama</th>
            <td><?= htmlspecialchars($data['name']) ?></td>
        </tr>
        <tr>
            <th>Email</th>
            <td><?= htmlspecialchars($data['email']) ?></td>
        </tr>
        <tr>
            <th>Telepon</th>
            <td><?= htmlspecialchars($data['phone']) ?></td>
        </tr>
        <tr>
            <th>Jenis Kelamin</th>
            <td><?= htmlspecialchars($data['gender']) ?></td>
        </tr>
        <tr>
            <th>Browser/Sistem Operasi</th>
            <td><?= htmlspecialchars($userAgent) ?></td>
        </tr>
    </table>

    <h2>Isi File:</h2>
    <pre><?= htmlspecialchars($data['fileContent']) ?></pre>
</body>
</html>
