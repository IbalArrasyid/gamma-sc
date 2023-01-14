<?php

$servername = "gamma-sc.com"; // or the hostname or IP address of the MySQL server
$username = "username";
$password = "password";
$dbname = "form_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the form was submitted
if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['phone']) && isset($_POST['message'])) {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $message = $_POST['message'];
  
  // Insert the data into the database
  $sql = "INSERT INTO form_data (name, email, phone, message) VALUES (?, ?, ?, ?)";
  $stmt = $conn->prepare($sql);
  $stmt->bind_param("ssss", $name, $email, $phone, $message);
  $stmt->execute();
}

$conn->close();
?>
