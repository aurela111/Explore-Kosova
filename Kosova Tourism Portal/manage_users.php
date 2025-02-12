<?php
session_start();
if ($_SESSION['role'] !== 'admin') {
    header('Location: login.php');
    exit;
}

include 'databaseconnection.php'; 

$sql = "SELECT * FROM users";
$result = $conn->query($sql);


if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['add_user'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $role = $_POST['role'];

    
    $sql_add_user = "INSERT INTO users (username, email, role) VALUES ('$username', '$email', '$role')";
    if ($conn->query($sql_add_user) === TRUE) {
        header('Location: manage_users.php'); 
        exit;
    } else {
        echo "Error: " . $sql_add_user . "<br>" . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Users</title>
    <style>
       
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        
        header {
            background-color: #1e3d58;
            padding: 1rem;
        }

        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .navbar .logo {
            font-size: 1.5rem;
            color: white;
        }

        .navbar .nav-links {
            list-style: none;
            padding: 0;
            margin: 0;
            display: flex;
            gap: 20px;
        }

        .navbar .nav-links li {
            display: inline-block;
        }

        .navbar .nav-links a {
            color: white;
            text-decoration: none;
            font-size: 1.2rem;
        }

        .navbar .nav-links a:hover {
            color: #f5a623;
        }

        .container {
            max-width: 1000px;
            margin: 2rem auto;
            padding: 2rem;
            background-color: white;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }

        .form-group {
            margin-bottom: 1rem;
        }

        .form-group input, .form-group select {
            width: 100%;
            padding: 10px;
            font-size: 1rem;
            border-radius: 5px;
            border: 1px solid #ddd;
        }

        button {
            padding: 10px 20px;
            background-color: #1e3d58;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover {
            background-color: #f5a623;
        }

        table {
            width: 100%;
            margin-top: 2rem;
            border-collapse: collapse;
        }

        table th, table td {
            padding: 1rem;
            text-align: left;
            border: 1px solid #ddd;
        }

        table th {
            background-color: #1e3d58;
            color: white;
        }

        table tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        table tr:hover {
            background-color: #f5a623;
            color: white;
        }
    </style>
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

    <div class="container">
        <h1>Manage Users</h1>

        <!-- Add New User Form -->
        <h2>Add New User</h2>
        <form method="POST" action="manage_users.php" class="add-user-form">
            <div class="form-group">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" required>
            </div>

            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>

            <div class="form-group">
                <label for="role">Role:</label>
                <select id="role" name="role" required>
                    <option value="user">User</option>
                    <option value="admin">Admin</option>
                </select>
            </div>

            <button type="submit" name="add_user">Add User</button>
        </form>

        <!-- Users Table -->
        <h2>User List</h2>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Username</th>
                    <th>Email</th>
                    <th>Role</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = $result->fetch_assoc()) { ?>
                    <tr>
                        <td><?php echo $row['id']; ?></td>
                        <td><?php echo $row['username']; ?></td>
                        <td><?php echo $row['email']; ?></td>
                        <td><?php echo $row['role']; ?></td>
                        <td>
                            <a href="edit_user.php?id=<?php echo $row['id']; ?>">Edit</a> |
                            <a href="delete_user.php?id=<?php echo $row['id']; ?>" onclick="return confirm('Are you sure you want to delete this user?');">Delete</a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>

</body>
</html>
