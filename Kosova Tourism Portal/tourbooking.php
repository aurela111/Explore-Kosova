<?php
include 'db_connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user_id = $_POST['user_id'];
    $package_id = $_POST['package_id'];

    $sql = "INSERT INTO bookings (user_id, package_id) VALUES ('$user_id', '$package_id')";
    if (mysqli_query($conn, $sql)) {
        echo "<script>alert('Booking successful!'); window.location.href='userdashboard.html';</script>";
    } else {
        echo "<script>alert('Error booking tour.'); window.location.href='tour_packages.php';</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Tour</title>
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

    <section class="booking">
        <div class="container">
            <h2>Confirm Your Booking</h2>
            <form method="POST" action="book_tour.php">
                <input type="hidden" name="user_id" value="1"> <!-- Get this dynamically after login -->
                <input type="hidden" name="package_id" value="<?php echo $_GET['package_id']; ?>">
                <button type="submit" class="btn">Confirm Booking</button>
            </form>
        </div>
    </section>

    <footer>
        <div class="footer-content">
            <p>&copy; 2024 Explore Kosova. All Rights Reserved.</p>
        </div>
    </footer>
</body>
</html>
