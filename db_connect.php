<?php
// Enable error reporting
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

$host = getenv('DB_HOST');
$user = getenv('DB_USER');
$pass = getenv('DB_PASSWORD');
$db   = getenv('DB_NAME');

echo "<h3>Database Connection Details:</h3>";
echo "Host: " . ($host ?: 'Not set') . "<br>";
echo "User: " . ($user ?: 'Not set') . "<br>";
echo "Password: " . ($pass ? str_repeat('*', strlen($pass)) : 'Not set') . "<br>";
echo "Database: " . ($db ?: 'Not set') . "<br><br>";

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