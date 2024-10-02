<?php
include 'db_connection.php';

$sql = "SELECT ACCOUNT.*, CUSTOMER.CNAME FROM ACCOUNT JOIN CUSTOMER ON ACCOUNT.CID = CUSTOMER.CID";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<h1>Account Information</h1>";
    while ($row = $result->fetch_assoc()) {
        echo "Account Number: " . $row["ANO"] . " - Type: " . $row["ATYPE"] . " - Balance: $" . $row["BALANCE"] . " - Customer Name: " . $row["CNAME"] . "<br>";
    }
} else {
    echo "No account information found.";
}

$conn->close();
?>
