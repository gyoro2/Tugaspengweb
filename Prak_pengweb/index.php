<?php
$host = 'localhost';
$username = 'root';
$password = "";
$dbname = 'account';

$conn = new mysqli ($host, $username, $password, $dbname);

if($conn->connect_error){
    die("connection failed: ".$conn->connect_error);
}

if($_SERVER['REQUEST_METHOD']=='POST'){
    $nama = $_POST['nama'];
    $nim = $_POST['nim'];

    $sql = "INSERT INTO table_account (nama, nim) VALUES('$nama','$nim')";

    if ($conn->query($sql)===TRUE){
        echo "Data berhasil disimpan";
    }
    else {
        echo "ERROR: ".$sql. "<br>". $conn->error;
    }
}

$conn->close();

?>
<!DOCTYPE html>
<html>
<head>
    <title>Form Input Data</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form method="POST" action="">
        <label>Nama</label><br>
        <input type="text" id="nama" name="nama"><br>
        <label>NIM</label><br>
        <input type="text" id="nim" name="nim"><br>
        <button type="submit">Submit</button>
    </form>
    <br>
    <a href="display.php"><button class="link-button">Tampilkan Data</button></a>
</body>
</html>
