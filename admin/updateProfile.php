<?php
session_start();
require('../connection.php');
$username = $_SESSION['admin'];
$fullname = $_POST['fullname'];
$email = $_POST['email'];
$pass = $_POST['password'];
$confirmpass = $_POST['confirm_password'];

if(!empty($pass) && $pass === $confirmpass){
    // $data = "INSERT INTO travelstock (FULLNAME, MONO, EMAIL,PASSWD,type) VALUES ('$fullname', '$mono', '$email', '$pass',$type)";
    $data = "UPDATE admin SET name='$fullname',email='$email',password='$pass' WHERE email='$username'";
    mysqli_query ($connection, $data);
    ?>
    <script>
        alert('Your Profile Successfully Update.');
        window.location.href = 'adminloginsuccess.php';
    </script>
    <?php
    // header('location: ./adminloginsuccess.php');
}elseif($fullname && $email && empty($pass)){
    $data = "UPDATE admin SET name='$fullname',email='$email' WHERE email='$username'";
    mysqli_query ($connection, $data);
    ?>
    <script>
        alert('Your Profile Successfully Update.');
        window.location.href = 'adminloginsuccess.php';
    </script>
    <?php
}
else{
    ?>
    <script>
        alert('Password Mismatch.');
        window.location.href = 'adminloginsuccess.php';
    </script>
    <?php
}
?>