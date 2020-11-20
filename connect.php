<?php

// database details
$servername = "sql104.epizy.com"; // enter your server name
$username = "epiz_27011933";      // enter your username
$password = "xJNqUDKeg1";         // enter your password
$dbname = "epiz_27011933_table";  // enter your databases name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

?>