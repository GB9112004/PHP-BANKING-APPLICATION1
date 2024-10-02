<?php
include 'db_connection.php';

$sql = "SELECT * FROM CUSTOMER";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<h1>Customer Information</h1>";
    while ($row = $result->fetch_assoc()) {
        echo "Customer ID: " . $row["CID"] . " - Name: " . $row["CNAME"] . "<br>";
    }
} else {
    echo "No customer information found.";
}

$conn->close();
?>
