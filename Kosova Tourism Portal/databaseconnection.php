<?php
$servername = "localhost"; 
$username = "root"; 
$password = ""; 
$dbname = "explore_kosova"; 


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
