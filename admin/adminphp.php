<?php

// Start the session
session_start();

error_reporting(0);
require('../connection.php');
$username = $_POST['Uname'];
$password = $_POST['Pass'];

//Form se data aa  raha hai
$username = stripcslashes($username);
$password = stripcslashes($password);
$username = mysqli_real_escape_string($connection, $username);
$password = mysqli_real_escape_string($connection, $password);

$sql = "select * from `admin` where `email` = '$username' and password	 = '$password'";

$result = mysqli_query($connection, $sql);
$row = mysqli_fetch_assoc($result);

if ($row['email'] == $username) {
    // echo "<h1><center> Login successful </center></h1>";  
    $_SESSION['name'] = $row['name'];
    $_SESSION['admin'] = $row['email'];
    header('location:adminloginsuccess.php');
} else {
    echo "<h1> Login failed. Invalid username or password.</h1>";
    echo "<a href='index.php'>Back To Home</a>";
}
