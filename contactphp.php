<?php
$connection = mysqli_connect('localhost','root');
if ($connection) {
echo "Connection is Stable";    
}

else{
    echo "Connection Failed";
}
mysqli_select_db($connection, 'travel');
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

$data = "INSERT INTO contact (name, email,message) VALUES ('$name', '$email', '$message')";
mysqli_query ($connection, $data);
header('location:message.php');


?>
