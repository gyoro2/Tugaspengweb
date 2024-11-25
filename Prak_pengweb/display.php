<?php
$host = 'localhost';
$username = 'root'; 
$password = ''; 
$dbname = 'account'; 

$conn = new mysqli($host, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Konfigurasi Pagination
$limit = 10; // Jumlah data per halaman
$page = isset($_GET['page']) ? (int)$_GET['page'] : 1; // Halaman aktif
$page = max($page, 1); // Minimal halaman adalah 1
$offset = ($page - 1) * $limit; // Hitung offset

// Ambil total jumlah data
$total_sql = "SELECT COUNT(*) AS total FROM table_account";
$total_result = $conn->query($total_sql);
$total_row = $total_result->fetch_assoc();
$total_data = $total_row['total'];

// Ambil data sesuai halaman
$sql = "SELECT * FROM table_account LIMIT $limit OFFSET $offset";
$result = $conn->query($sql);

// Hitung jumlah halaman
$total_pages = ceil($total_data / $limit);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Tabel</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <h2>Data dari Tabel Account</h2>

    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>NIM</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $row['id'] . "</td>";
                    echo "<td>" . $row['nama'] . "</td>";
                    echo "<td>" . $row['nim'] . "</td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='3'>Tidak ada data</td></tr>";
            }
            ?>
        </tbody>
    </table>
    <br>

    <!-- Navigasi Pagination -->
    <div>
        <?php if ($page > 1): ?>
            <a href="?page=<?php echo $page - 1; ?>"><button>Back</button></a>
        <?php endif; ?>

        <?php for ($i = 1; $i <= $total_pages; $i++): ?>
            <a href="?page=<?php echo $i; ?>"><button <?php echo $i == $page ? 'style="font-weight:bold;"' : ''; ?>><?php echo $i; ?></button></a>
        <?php endfor; ?>

        <?php if ($page < $total_pages): ?>
            <a href="?page=<?php echo $page + 1; ?>"><button>Next</button></a>
        <?php endif; ?>
    </div>

</body>
</html>

<?php
$conn->close();
?>
