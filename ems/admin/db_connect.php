<?php
// Database configuration
$servername = "localhost";
$username = "root";
$password = ""; // If the password is empty, keep it as an empty string
$database = "emsdb";

// Create connection
$connection = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
