<?php

$connection = mysqli_connect('localhost','root','','form_db');

if(isset($_POST['send'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];

    $request = " insert into form_message(name, email, phone, message) value('$name','$email', '$phone', '$message')";

    mysqli_query($connection, $request);

    header('https://gamma-sc.com/');
    header('https://gamma-sc.com/contact.html');
} else {
    echo 'something went wrong try again';
}

?>