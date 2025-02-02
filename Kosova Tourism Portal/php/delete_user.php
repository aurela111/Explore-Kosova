<?php
session_start();
include 'databaseconnection.php';

if ($_SESSION['role'] !== 'admin') {
    header('Location: login.php');
    exit;
}

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
