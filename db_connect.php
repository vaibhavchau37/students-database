<?php
$host = "localhost";
$user = "root";       // default username in XAMPP
$password = "";       // default password is empty
$dbname = "students_db";  // your database name in phpMyAdmin

// Create connection
$conn = new mysqli($host, $user, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
