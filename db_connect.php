<?php
// Display all PHP errors (for development only)
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Database credentials
$host = 'database-1.cj08280awhz9.ap-southeast-1.rds.amazonaws.com';
$user = 'root';
$pass = 'marasigan';
$db   = 'ecommerce';

// Create connection
$conn = new mysqli($host, $user, $pass, $db);

// Check connection
if ($conn->connect_error) {
    echo "<strong>Database connection failed:</strong> " . htmlspecialchars($conn->connect_error);
} else {
    echo "✅ Connected to database successfully.";
}

// Optional: close connection when done
// $conn->close();
?>
