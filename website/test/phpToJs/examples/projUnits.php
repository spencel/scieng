<?php
$servername = "localhost";
$username = "scieng";
$password = "";
$dbname = "my_scieng";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

// sql to create table
$sql = "CREATE TABLE ProjUnits (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
unitA VARCHAR(30),
quantity DOUBLE,
unitB VARCHAR(50)
)";

if ($conn->query($sql) === TRUE) {
    echo "Table MyGuests created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
?>