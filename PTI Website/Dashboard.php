<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
    <link rel="stylesheet" href="styledash.css">
</head>
<body>
    <div class="sidebar">
        <ul>
            <li><a href="#">Menu 1</a></li>
            <li><a href="#">Menu 2</a></li>
            <li><a href="#">Menu 3</a></li>
            <li><a href="#">Menu 4</a></li>
            <li><a href="#">Menu 5</a></li>
            <li><a href="#">Menu 6</a></li>
            <li><a href="#">Menu 7</a></li>
            <li><a href="#">Menu 8</a></li>
        </ul>
    </div>
    <div class="content">
        <!-- Konten dashboard -->
    </div>
</body>
</html>
<?php
    $menuItems = array("Menu 1", "Menu 2", "Menu 3", "Menu 4", "Menu 5", "Menu 6", "Menu 7", "Menu 8");
?>

<div class="sidebar">
    <ul>
        <?php foreach ($menuItems as $menuItem): ?>
            <li><a href="#"><?php echo $menuItem; ?></a></li>
        <?php endforeach; ?>
    </ul>
</div>
<div class="content">
    <!-- Konten dashboard -->
</div>