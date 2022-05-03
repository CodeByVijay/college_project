<?php
require('./connection.php');
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

$data = "INSERT INTO contact (name, email,message) VALUES ('$name', '$email', '$message')";
mysqli_query ($connection, $data);
header('location:message.php');


?>
