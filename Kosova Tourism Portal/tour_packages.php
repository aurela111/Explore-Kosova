<?php
include 'databaseconnect.php';

$sql = "SELECT package_name, description, price, duration, image_url FROM tour_packages";
$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tour Packages</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <nav class="navbar">
            <div class="logo">Explore Kosova</div>
            <ul class="nav-links">
                <li><a href="Homepage.html">Home</a></li>
                <li><a href="userdashboard.html">Dashboard</a></li>
            </ul>
        </nav>
    </header>

    <section class="tour-packages">
        <div class="container">
            <h2>Available Tour Packages</h2>
            <div class="tour-list">
                <?php
                while ($row = mysqli_fetch_assoc($result)) {
                    echo '<div class="tour-package">';
                    echo '<img src="' . $row['image_url'] . '" alt="' . $row['package_name'] . '">';
                    echo '<h3>' . $row['package_name'] . '</h3>';
                    echo '<p>' . $row['description'] . '</p>';
                    echo '<p><strong>Price:</strong> $' . $row['price'] . '</p>';
                    echo '<p><strong>Duration:</strong> ' . $row['duration'] . ' hours</p>';
                    echo '<a href="book_tour.php?package_id=' . $row['id'] . '" class="btn">Book Now</a>';
                    echo '</div>';
                }
                ?>
            </div>
        </div>
    </section>

    <footer>
        <div class="footer-content">
            <p>&copy; 2024 Explore Kosova. All Rights Reserved.</p>
        </div>
    </footer>
</body>
</html>
