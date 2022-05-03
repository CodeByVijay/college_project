<?php
session_start();
require('./connection.php');
$username = $_SESSION['user'];
$fullname = $_POST['fullname'];
$mobile = $_POST['mobile'];
$email = $_POST['email'];
$pass = $_POST['password'];
$confirmpass = $_POST['confirm_password'];
$filename = $_FILES["aadhar"]["name"];
$tempname = $_FILES["aadhar"]["tmp_name"];    
    $filename1 = rand(0000,999).'-'.$filename;

if(!empty($pass) && $pass === $confirmpass && empty($filename)){
    // $data = "INSERT INTO travelstock (FULLNAME, MONO, EMAIL,PASSWD,type) VALUES ('$fullname', '$mono', '$email', '$pass',$type)";
    $data = "UPDATE travelstock SET FULLNAME='$fullname',EMAIL='$email',PASSWD='$pass',MONO='$mobile' WHERE email='$username'";
    mysqli_query ($connection, $data);
    ?>
    <script>
        alert('Your Profile Successfully Update.');
        window.location.href = 'loginsuccess.php';
    </script>
    <?php
    // header('location: ./adminloginsuccess.php');
}elseif(!empty($pass) && $pass === $confirmpass && !empty($filename)){
    $folder = "images/aadhar_card/".$filename1;
    move_uploaded_file($tempname, $folder);
    // $data = "INSERT INTO travelstock (FULLNAME, MONO, EMAIL,PASSWD,type) VALUES ('$fullname', '$mono', '$email', '$pass',$type)";
    $data = "UPDATE travelstock SET FULLNAME='$fullname',EMAIL='$email',PASSWD='$pass',aadhar='$filename1',MONO='$mobile' WHERE email='$username'";
    mysqli_query ($connection, $data);
    ?>
    <script>
        alert('Your Profile Successfully Update.');
        window.location.href = 'loginsuccess.php';
    </script>
    <?php
    // header('location: ./adminloginsuccess.php');
}elseif($fullname && $email && empty($pass) && $filename){
    $folder = "images/aadhar_card/".$filename1;
    move_uploaded_file($tempname, $folder);
    $data = "UPDATE travelstock SET FULLNAME='$fullname',EMAIL='$email',aadhar='$filename1',MONO='$mobile' WHERE email='$username'";
    mysqli_query ($connection, $data);
    ?>
    <script>
        alert('Your Profile Successfully Update.');
        window.location.href = 'loginsuccess.php';
    </script>
    <?php
}elseif($fullname && $email && empty($pass) && empty($filename)){
    $data = "UPDATE travelstock SET FULLNAME='$fullname',EMAIL='$email',MONO='$mobile' WHERE email='$username'";
    mysqli_query ($connection, $data);
    ?>
    <script>
        alert('Your Profile Successfully Update.');
        window.location.href = 'loginsuccess.php';
    </script>
    <?php
}
else{
    ?>
    <script>
        alert('Password Mismatch.');
        window.location.href = 'loginsuccess.php';
    </script>
    <?php
}
?>