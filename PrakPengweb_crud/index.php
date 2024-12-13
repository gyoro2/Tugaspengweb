<?php
// Database configuration
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "form";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle add data
if (isset($_POST['add'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $sql = "INSERT INTO users (name, email) VALUES ('$name', '$email')";
    $conn->query($sql);
}

// Handle delete data
if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $sql = "DELETE FROM users WHERE id=$id";
    $conn->query($sql);
}

// Handle update data
if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $sql = "UPDATE users SET name='$name', email='$email' WHERE id=$id";
    $conn->query($sql);
}

// Fetch data
$sql = "SELECT * FROM users";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>CRUD PHP</h1>

    <!-- Add and Update Form -->
    <form method="POST">
        <input type="hidden" name="id" value="<?php if (isset($_GET['edit'])) echo $_GET['edit']; ?>">
        <input type="text" name="name" placeholder="Name" value="<?php if (isset($_GET['edit'])) { 
            $edit_id = $_GET['edit'];
            $edit_result = $conn->query("SELECT * FROM users WHERE id=$edit_id")->fetch_assoc();
            echo $edit_result['name']; 
        } ?>" required>
        <input type="email" name="email" placeholder="Email" value="<?php if (isset($_GET['edit'])) echo $edit_result['email']; ?>" required>
        <button type="submit" name="<?php echo isset($_GET['edit']) ? 'update' : 'add'; ?>">
            <?php echo isset($_GET['edit']) ? 'Update' : 'Add'; ?>
        </button>
    </form>

    <!-- Display Data -->
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php if ($result->num_rows > 0): ?>
                <?php while ($row = $result->fetch_assoc()): ?>
                    <tr>
                        <td><?php echo $row['id']; ?></td>
                        <td><?php echo $row['name']; ?></td>
                        <td><?php echo $row['email']; ?></td>
                        <td>
                            <a href="?edit=<?php echo $row['id']; ?>">Edit</a>
                            |
                            <a href="?delete=<?php echo $row['id']; ?>" onclick="return confirm('Are you sure?')">Delete</a>
                        </td>
                    </tr>
                <?php endwhile; ?>
            <?php else: ?>
                <tr>
                    <td colspan="4">No data found</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>

</body>
</html>

<?php $conn->close(); ?>
