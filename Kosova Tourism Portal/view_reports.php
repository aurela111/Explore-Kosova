<?php
session_start();

// Check if user is an admin
if ($_SESSION['role'] !== 'admin') {
    header('Location: login.php');
    exit;
}

include 'databaseconnection.php'; // Include your database connection file

// Example query for reports (You can modify as needed)
$sql = "SELECT * FROM user_activity_logs"; // Assuming you have a logs table
$result = $conn->query($sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Reports</title>
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

    <section class="reports">
        <div class="container">
            <h1>System Reports</h1>
            <table>
                <thead>
                    <tr>
                        <th>Activity ID</th>
                        <th>User ID</th>
                        <th>Action</th>
                        <th>Date</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($row = $result->fetch_assoc()) { ?>
                        <tr>
                            <td><?php echo $row['activity_id']; ?></td>
                            <td><?php echo $row['user_id']; ?></td>
                            <td><?php echo $row['action']; ?></td>
                            <td><?php echo $row['date']; ?></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </section>
</body>
</html>
