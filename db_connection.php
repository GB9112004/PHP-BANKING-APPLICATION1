<?php
$servername = "localhost";
$username = "root";
$password = "your_password"; // Replace with your MySQL password
$dbname = "banking_application";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
