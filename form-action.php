<?php

$servername = 'dns1.p01.nsone.net';
$name = 'name';
$email = 'name';
$phone = 'phone';
$message = 'message';
$dbname = 'form_db';

$connection = new mysqli_connect($servername, $name, $email, $phone, $message, $dbname);

if(isset($_POST['send'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];

    $request = " insert into form_message(name, email, phone, message) value('$name','$email', '$phone', '$message')";

    mysqli_query($connection, $request);

    header('location:https://gamma-sc.com/');
    header('location:https://gamma-sc.com/contact.html');
} else {
    echo 'something went wrong try again';
}

?>
