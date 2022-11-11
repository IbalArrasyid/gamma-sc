<?php

$servername = 'dns1.p01.nsone.net', 'dns2.p01.nsone.net', 'dns3.p01.nsone.net', 'dns4.p01.nsone.net';
$name = 'name';
$email = 'name';
$phone = 'phone';
$message = 'message';
$dbname = 'form_db';

$connection = new mysqli_connect($servername, $name, $email, $phone, $message, $dbname);

if ($conn->connect_error) {
    die("something went wrong try again: " . $conn->connect_error);
  }

  $stmt = $conn->prepare("insert into form_message(name, email, phone, message) value(?, ?, ?, ?)");
  $stmt->bind_param("ssss", $name, $email, $phone, $message);

  $name = "iqbal";
  $email = "iqbal@gmail.com";
  $phone = "81310946588";
  $message = "Hallo!. Im Interesting";
  $stmt->execute();

echo "New records created successfully";

$stmt->close();
$conn->close();

?>
