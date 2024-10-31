<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Negosiasi Vendor</title>
    <link rel="stylesheet" href="styledash.css">
</head>
<body>

<!-- Sidebar -->
<div class="sidebar">
    <ul>
        <h2>SIVASAK</h2>
        <li><img src="home.png" alt=""><a href="DashboardVendor.php">Dashboard</a></li>
        <li><img src="negoisasi.png" alt=""><a href="negosiasivendor.php">Negosiasi</a></li>
        <li><img src="offer.png" alt=""><a href="daftartawaran.php">Daftar Tawaran Perusahaan</a></li>
    </ul>
</div>

<!-- Navbar -->
<div class="navbar">
    <div class="menu">
        <ul>
            <li><a href="#">Vendor</a><img src="vendor_icon.png" alt=""></li>
            <li><a href="logout.php">Logout</a></li>
        </ul>
    </div>
</div>

<!-- Isi -->
<div class="main-content">
    <div class="negotiation-container">
        <h2>Negosiasi Vendor</h2>
        <form class="negotiation-form" action="submit_negotiation.php" method="POST">
            <label for="vendor-name">Nama Vendor</label>
            <input type="text" id="vendor-name" name="vendor_name" required>

            <label for="title">Judul</label>
            <input type="text" id="title" name="title" required>

            <label for="offer-price">Harga yang ingin ditawarkan</label>
            <input type="number" id="offer-price" name="offer_price" required>

            <label for="additional-notes">Catatan Tambahan (opsional)</label>
            <textarea id="additional-notes" name="additional_notes"></textarea>

            <button type="submit" class="submit-button">Ajukan Negosiasi</button>
        </form>
    </div>
</div>

</body>
</html>
