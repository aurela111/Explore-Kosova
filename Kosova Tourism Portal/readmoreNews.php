<?php
include 'databaseconnection.php';

$news_id = isset($_GET['id']) ? (int)$_GET['id'] : 1;

$sql = "SELECT * FROM news WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $news_id);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    $news = $result->fetch_assoc();
} else {
    echo "News article not found.";
    exit;
}

$stmt->close();
$conn->close();
?>
