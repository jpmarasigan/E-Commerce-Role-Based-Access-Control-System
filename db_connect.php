<?php
// Enable error reporting
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

$host = getenv('DB_HOST');
$user = getenv('DB_USER');
$pass = getenv('DB_PASSWORD');
$db   = getenv('DB_NAME');

// Optional: Show what variables are being used (for debugging)
// echo "Host: $host, User: $user, DB: $db<br>";

// Create connection with timeout
$conn = mysqli_init();
$conn->options(MYSQLI_OPT_CONNECT_TIMEOUT, 5); // 5 seconds timeout

try {
    $conn->real_connect($host, $user, $pass, $db);
    echo "✅ Connected successfully to the database!";
} catch (mysqli_sql_exception $e) {
    echo "❌ Connection failed: " . $e->getMessage();
}
?>