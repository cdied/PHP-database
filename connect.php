<?php

// database details
$servername = "myServer";     // enter your server name
$username = "username";       // enter your username
$password = "Password";       // enter your password
$dbname = "myDatabase";       // enter your databases name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

?>
