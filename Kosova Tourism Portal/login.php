<?php
session_start();
error_reporting(E_ALL);
ini_set('display_errors', 1);

include 'databaseconnection.php'; 

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);

    // Check the users table first (for normal users)
    $sql_user = "SELECT * FROM users WHERE email = ?";
    $stmt_user = $conn->prepare($sql_user);
    $stmt_user->bind_param("s", $email);
    $stmt_user->execute();
    $result_user = $stmt_user->get_result();

    // If the user exists in the users table
    if ($result_user->num_rows > 0) {
        $user = $result_user->fetch_assoc();

        // Verify password for user
        if (password_verify($password, $user['password'])) {
            
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['username'] = $user['username'];
            $_SESSION['role'] = 'user';  // Set role to 'user'

            header("Location: user_dashboard.php");
            exit();
        } else {
            echo "<script>alert('Invalid password for user!'); window.location.href='login.html';</script>";
        }
    } 
    // Check the admins table if not found in users table
    else {
        $sql_admin = "SELECT * FROM admins WHERE email = ?";
        $stmt_admin = $conn->prepare($sql_admin);
        $stmt_admin->bind_param("s", $email);
        $stmt_admin->execute();
        $result_admin = $stmt_admin->get_result();

        // If the admin exists in the admins table
        if ($result_admin->num_rows > 0) {
            $admin = $result_admin->fetch_assoc();

            // Verify password for admin
            if (password_verify($password, $admin['password'])) {
                
                $_SESSION['admin_id'] = $admin['id'];
                $_SESSION['username'] = $admin['username'];
                $_SESSION['role'] = 'admin';  // Set role to 'admin'

                header("Location: admin_dashboard.php");
                exit();
            } else {
                echo "<script>alert('Invalid password for admin!'); window.location.href='login.html';</script>";
            }
        } else {
            echo "<script>alert('No user or admin found with that email!'); window.location.href='login.html';</script>";
        }
    }

    $stmt_user->close();
    $stmt_admin->close();
    $conn->close();
}
?>
