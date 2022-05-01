<?php
$connection = mysqli_connect('localhost','root');
if ($connection) {
echo "Connection is Stable";    
}

else{
    echo "Connection Failed";
}
mysqli_select_db($connection, 'travel');
$fullname = $_POST['fullname'];
$mono = $_POST['mobileno'];
$email = $_POST['email'];
$pass = $_POST['password'];
$confirmpass = $_POST['confirm_password'];
$type = $_POST['type'];

if($pass === $confirmpass){
    $data = "INSERT INTO travelstock (FULLNAME, MONO, EMAIL,PASSWD,type) VALUES ('$fullname', '$mono', '$email', '$pass',$type)";
    mysqli_query ($connection, $data);
    header('location:signupsuccessfull.php');
}else{
echo "Password Mismatch";
}




?>
