<?php
include 'databaseconnection.php'; 


$sql = "SELECT * FROM destinations";
$result = $conn->query($sql);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Explore Destinations</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <nav class="navbar">
            <div class="logo">Explore Kosova</div>
            <ul class="nav-links">
                <li><a href="Homepage.html">Home</a></li>
                <li><a href="user_dashboard.php">Dashboard</a></li>
            </ul>
        </nav>
    </header>

    <section class="destinations">
        <div class="container">
            <h2>Explore Destinations</h2>
            <div class="destinations-list">
                <?php
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo '<div class="destination">';
                        echo '<img src="' . htmlspecialchars($row['image_url']) . '" alt="' . htmlspecialchars($row['name']) . '">';
                        echo '<h3>' . htmlspecialchars($row['name']) . '</h3>';
                        echo '<p>' . htmlspecialchars($row['description']) . '</p>';
                        echo '</div>';
                    }
                } else {
                    echo "<p>No destinations found.</p>";
                }
                ?>
            </div>
        </div>
    </section>

    <footer>
        <p>&copy; 2024 Explore Kosova. All Rights Reserved.</p>
    </footer>
</body>
</html>
