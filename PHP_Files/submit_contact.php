<?php
$servername = "localhost";
$username = "your_username";
$password = "your_password";
$dbname = "abc_fitness_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Get form data
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

// Insert data into database
$sql = "INSERT INTO contacts (name, email, message) VALUES ('$name', '$email', '$message')";
if ($conn->query($sql) === TRUE) {
  echo "Message submitted successfully!";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
