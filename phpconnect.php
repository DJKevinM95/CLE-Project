<?php
$servername = "mysql.hostinger.nl";
$username = "u360822552_cle";
$password = "ch61r1a090";
$database = "u360822552_cle";
//$servername = "localhost";
//$username = "root";
//$password = "";
//$database = "autopia";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
//echo "Connected successfully";
?>
