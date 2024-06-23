<?php
$host = 'localhost';  // Host name usually localhost
$username = 'root';   // Default XAMPP username
$password = '';       // Default XAMPP password is empty
$database = 'mlbb';   // Database name

// Create connection
$conn = new mysqli($host, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>

