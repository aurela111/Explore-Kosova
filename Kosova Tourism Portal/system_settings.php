<?php
session_start();

// Check if user is an admin
if ($_SESSION['role'] !== 'admin') {
    header('Location: login.php');
    exit;
}

include 'databaseconnection.php'; // Include your database connection file

// Example query to get system settings
$sql = "SELECT * FROM system_settings WHERE id = 1";
$result = $conn->query($sql);
$settings = $result->fetch_assoc();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $site_name = $_POST['site_name'];
    $site_email = $_POST['site_email'];
    $site_phone = $_POST['site_phone'];

    $update_sql = "UPDATE system_settings SET site_name = '$site_name', site_email = '$site_email', site_phone = '$site_phone' WHERE id = 1";
    if ($conn->query($update_sql)) {
        header('Location: system_settings.php');
        exit;
    } else {
        echo "Error updating settings.";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>System Settings</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <nav class="navbar">
            <div class="logo">Explore Kosova</div>
            <ul class="nav-links">
                <li><a href="admin_dashboard.php">Dashboard</a></li>
                <li><a href="logout.php">Logout</a></li>
            </ul>
        </nav>
    </header>

    <section class="settings">
        <div class="container">
            <h1>System Settings</h1>
            <form action="system_settings.php" method="post">
                <label for="site_name">Site Name:</label>
                <input type="text" name="site_name" id="site_name" value="<?php echo $settings['site_name']; ?>" required>

                <label for="site_email">Site Email:</label>
                <input type="email" name="site_email" id="site_email" value="<?php echo $settings['site_email']; ?>" required>

                <label for="site_phone">Site Phone:</label>
                <input type="tel" name="site_phone" id="site_phone" value="<?php echo $settings['site_phone']; ?>" required>

                <button type="submit" class="btn">Save Settings</button>
            </form>
        </div>
    </section>
</body>
</html>
