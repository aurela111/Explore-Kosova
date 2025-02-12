<?php
session_start();
if (!isset($_SESSION['role']) || $_SESSION['role'] !== 'admin') {
    header('Location: login.html');
    exit;
}

include 'databaseconnection.php';


if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $delete_sql = "DELETE FROM users WHERE id = $id";
    if ($conn->query($delete_sql)) {
        header('Location: manage_users.php');
        exit;
    } else {
        echo "Error deleting user.";
    }
} else {
    header('Location: manage_users.php');
    exit;
}
?>
