<?php

$servername = "localhost";
$dbname = "javajam";
$username = "user";
$password = "userpwd";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) die("Database connection failed: " . $conn->connect_error);

?>