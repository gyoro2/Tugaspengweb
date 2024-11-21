<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Vendor</title>
    <link rel="stylesheet" href="styledash.css">
</head>
<body>

<!-- Sidebar -->
<?php include 'sidebar.php' ?>

    <!-- Header Section -->
    <div class="header-questioner">
        <div class="header-content">
            <span>Admin</span>
            <img src="bp.png" alt="Admin Icon">
            <a href="logout.php" class="logout">Logout</a>
        </div>
    </div>

    <!-- Main Content Section -->
    <div class="content halaman-questioner">
        
        <h2>Daftar Questioner</h2>
     
        <div class="table-container">
        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Vendor</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Vendor 1</td>
                    <td><button onclick="window.location.href='hasilquestioner.php'"><img src="eye.png"></button></td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Vendor 2</td>
                    <td><button onclick="window.location.href='hasilquestioner.php'"><img src="eye.png"></button></td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Vendor 3</td>
                    <td><button onclick="window.location.href='hasilquestioner.php'"><img src="eye.png"></button></td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>Vendor 4</td>
                    <td><button onclick="window.location.href='hasilquestioner.php'"><img src="eye.png"></button></td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>Vendor 5</td>
                    <td><button onclick="window.location.href='hasilquestioner.php'"><img src="eye.png"></button></td>
                </tr>
                <tr>
                    <td>6</td>
                    <td>Vendor 6</td>
                    <td><button onclick="window.location.href='hasilquestioner.php'"><img src="eye.png"></button></td>
                </tr>
                <tr>
                    <td>7</td>
                    <td>Vendor 7</td>
                    <td><button onclick="window.location.href='hasilquestioner.php'"><img src="eye.png"></button></td>
                </tr>
                <tr>
                    <td>8</td>
                    <td>Vendor 8</td>
                    <td><button onclick="window.location.href='hasilquestioner.php'"><img src="eye.png"></button></td>
                </tr>
                <tr>
                    <td>9</td>
                    <td>Vendor 9</td>
                    <td><button onclick="window.location.href='hasilquestioner.php'"><img src="eye.png"></button></td>
                </tr>
                <tr>
                    <td>10</td>
                    <td>Vendor 10</td>
                    <td><button onclick="window.location.href='hasilquestioner.php'"><img src="eye.png"></button></td>
                </tr>
                <!-- Tambahkan baris tambahan sesuai kebutuhan -->
            </tbody>
        </table>
    </div>
    <button class="back-button">Kembali</button>
    </div>

    <!-- Footer Section -->
    <div class="footer">
        <p>Copyright © 2024. All rights reserved.</p>
    </div>
</div>


</body>
</html>