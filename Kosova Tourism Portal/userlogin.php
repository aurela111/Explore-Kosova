<?php
session_start(); 
include 'databaseconnection.php'; 

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);

   
    $sql = "SELECT * FROM users WHERE email = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    // Check if user exists
    if ($result->num_rows === 1) {
        $user = $result->fetch_assoc();

        // Verify the password
        if (password_verify($password, $user['password'])) {
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['user_name'] = $user['name']; 
            header("Location: user_dashboard.php");
            exit();
        } else {
            echo "<script>alert('Invalid email or password!'); window.location.href='login.html';</script>";
        }
    } else {
        echo "<script>alert('No user found with that email!'); window.location.href='login.html';</script>";
    }

    
    $stmt->close();
    $conn->close();
}
?>
