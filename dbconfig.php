<?php
$servername = "localhost";
$username = "u663555798_mnsnhs"; //
$password = "Michaeleng@123";		//You know what it is?
$dbname = "u663555798_mnsnhs"; //

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
