<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "AICLformDB";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// sql to create table 
$sql = "CREATE TABLE AICLTable(
firstname VARCHAR(30) NOT NULL,
lastname VARCHAR(30) NOT NULL,
email VARCHAR(30) NOT NULL,
contact VARCHAR(10) NOT NULL,
messagetext VARCHAR(50) NOT NULL
)";

if ($conn->query($sql) === TRUE) {
  echo "Table AICLTable created successfully";
} else {
  echo "Error creating table: " . $conn->error;
}

$conn->close();
?>