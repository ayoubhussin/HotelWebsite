<?php
session_start();

$dbHost = 'localhost';
$dbName = 'hotelDB';
$dbUsername = 'admin';
$dbPassword = 'admin';

// Attempt to connect to the database
$conn = mysqli_connect($dbHost, $dbUsername, $dbPassword, $dbName);

// Check if the connection was successful
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
} 

?>

