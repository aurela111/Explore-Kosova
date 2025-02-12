<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

include 'databaseconnection.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);
    $role = $_POST['role'];

    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // If the user is registering as an admin, save only in the admins table
    if ($role === 'admin') {
        $admin_sql = "INSERT INTO admins (username, email, password) VALUES (?, ?, ?)";
        $admin_stmt = $conn->prepare($admin_sql);
        $admin_stmt->bind_param("sss", $name, $email, $hashed_password);

        if ($admin_stmt->execute()) {
            echo "Admin registration successful!";
            header("Location: login.html"); 
        } else {
            echo "Error: " . $admin_stmt->error;
        }

        $admin_stmt->close();
    } 
    // If the user is registering as a regular user, save only in the users table
    else {
        $sql = "INSERT INTO users (username, email, password, role) VALUES (?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ssss", $name, $email, $hashed_password, $role);

        if ($stmt->execute()) {
            echo "User registration successful!";
            header("Location: login.html"); 
        } else {
            echo "Error: " . $stmt->error;
        }

        $stmt->close();
    }

    $conn->close();
}
?>
