<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Demo_DB";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// SQL to insert multiple rows
$sql = "INSERT INTO MyGuests (firstname, lastname, email) VALUES
('Jesfar', 'S', 'jesfar@example.com'),
('Appu', 'Kuttan', 'AppuKuttandoe@example.com'),
('Riyan', 'R', 'Riyan@example.com')";

if ($conn->query($sql) === TRUE) {
  echo "New records created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close the connection
$conn->close();
?>