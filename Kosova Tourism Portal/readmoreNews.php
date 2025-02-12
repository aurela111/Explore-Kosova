<?php
include 'databaseconnection.php'; 


if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $news_id = (int) $_GET['id']; 
} else {
    die("Invalid news ID.");
}


$sql = "SELECT * FROM news WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $news_id);
$stmt->execute();
$result = $stmt->get_result();


if ($result->num_rows > 0) {
    $news = $result->fetch_assoc();
} else {
    die("News article not found.");
}


$stmt->close();
$conn->close();
?>
