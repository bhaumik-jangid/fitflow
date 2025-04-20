<?php
// db.php
$host = 'localhost';  // Change if your database is hosted somewhere else
$dbname = 'fitflow'; // Replace with your database name 
$username = 'root'; // Replace with your database username
$password = ''; // Replace with your database password

try {
    // Create a PDO instance
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    // Set the PDO error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    // Handle connection error
    echo "Connection failed: " . $e->getMessage();
    die();
}
?>
