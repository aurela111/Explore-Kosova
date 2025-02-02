<?php
session_start();
include 'databaseconnection.php';

if ($_SESSION['role'] !== 'admin') {
    header('Location: login.php');
    exit;
}

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM users WHERE id = $id";
    $result = $conn->query($sql);
    $user = $result->fetch_assoc();

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $role = $_POST['role'];

        $update_sql = "UPDATE users SET name = '$name', email = '$email', role = '$role' WHERE id = $id";
        if ($conn->query($update_sql)) {
            header('Location: manage_users.php');
            exit;
        } else {
            echo "Error updating user.";
        }
    }
} else {
    header('Location: manage_users.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit User</title>
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

    <section class="edit-user">
        <div class="container">
            <h1>Edit User Details</h1>
            <form action="edit_user.php?id=<?php echo $user['id']; ?>" method="post">
                <label for="name">Name:</label>
                <input type="text" name="name" id="name" value="<?php echo $user['name']; ?>" required>

                <label for="email">Email:</label>
                <input type="email" name="email" id="email" value="<?php echo $user['email']; ?>" required>

                <label for="role">Role:</label>
                <select name="role" id="role" required>
                    <option value="user" <?php echo $user['role'] === 'user' ? 'selected' : ''; ?>>User</option>
                    <option value="admin" <?php echo $user['role'] === 'admin' ? 'selected' : ''; ?>>Admin</option>
                </select>

                <button type="submit" class="btn">Save Changes</button>
            </form>
        </div>
    </section>
</body>
</html>
