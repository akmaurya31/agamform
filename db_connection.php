<?php
// Define database connection variables
// define( 'DB_NAME', 'wp_stu' );
// define( 'DB_USER', 'wp_qfsli' );
// define( 'DB_PASSWORD', '?C7g4n_VE!p$P?A0' );
// define( 'DB_HOST', 'localhost' );


define( 'DB_NAME', 'stu_db' );
define( 'DB_USER', 'root' );
define( 'DB_PASSWORD', 'root@123' );
define( 'DB_HOST', 'localhost' );

// Create the connection
$conn = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    echo "Connected successfully!";
}
?>
