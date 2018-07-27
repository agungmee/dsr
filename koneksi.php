<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dsr";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbnamess);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?> 