<?php
$servername = "localhost"; // Or your server's address
$username = "root"; // Your MySQL username
$password = ""; // Your MySQL password
$dbname = "doctor_reminder_users_db"; // Your database name

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
