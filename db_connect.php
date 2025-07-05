<?php
// Database credentials
$host = getenv('DB_HOST');
$user = getenv('DB_USER');
$pass = getenv('DB_PASSWORD');
$db   = getenv('DB_NAME');

// Create connection
$conn = new mysqli($host, $user, $pass, $db);

// Check connection
if ($conn->connect_error) {
    echo "<strong>Database connection failed:</strong> " . htmlspecialchars($conn->connect_error);
} 
?>
