<?php
// get_centers.php
$state = $_POST['state'] ?? '';

include('db_connection.php');

// $conn = new mysqli("localhost", "root", "", "your_db");
// if ($conn->connect_error) {
//     die("Connection failed: " . $conn->connect_error);
// }

$sql = "SELECT * FROM centerlist WHERE state = '$state'";
$result = $conn->query($sql);
$centers = [];

while ($row = $result->fetch_assoc()) {
    $centers[] = $row;
}

echo json_encode($centers);
