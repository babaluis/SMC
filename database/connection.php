<?php
$host = 'localhost';
$db = 'smc';
$user = 'root'; // Your DB username
$pass = ''; // Your DB password

// Create connection
$conn = new mysqli($host, $user, $pass, $db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
