<?php
session_start();

// Check if the admin is logged in
if (!isset($_SESSION['admin_id'])) {
    header('Location: login.php');  // Redirect to login if not logged in
    exit;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <nav class="navbar">
            <div class="logo">Explore Kosova</div>
            <ul class="nav-links">
                <li><a href="Homepage.html">Home</a></li>
                <li><a href="logout.php">Logout</a></li>
            </ul>
        </nav>
    </header>

    <section class="dashboard">
        <div class="container">
            <h1>Welcome, <?php echo $_SESSION['username']; ?>!</h1>
            <p>This is the admin dashboard where you can manage users, content, and system settings.</p>

            <div class="admin-actions">
                <button class="btn" onclick="window.location.href='manage_users.php'">Manage Users</button>
                <button class="btn" onclick="window.location.href='view_reports.php'">View Reports</button>
                <button class="btn" onclick="window.location.href='system_settings.php'">System Settings</button>
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
