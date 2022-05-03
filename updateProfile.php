<?php
session_start();
require('./connection.php');
$username = $_SESSION['user'];
$fullname = $_POST['fullname'];
$mobile = $_POST['mobile'];
$email = $_POST['email'];
$pass = $_POST['password'];
$place = $_POST['place'];
$address = $_POST['address'];
$confirmpass = $_POST['confirm_password'];
$filename = $_FILES["aadhar"]["name"];
$tempname = $_FILES["aadhar"]["tmp_name"];
$filename1 = rand(0000, 9999) . '-aadhar-front-' . $filename;

$aadhar_back = $_FILES["aadhar_back"]["name"];
$aadhar_back_tmp = $_FILES["aadhar_back"]["tmp_name"];
$aadhar_back_name = rand(0000, 9999) . '-aadhar-back-' . $aadhar_back;

if (!empty($pass) && $pass === $confirmpass && empty($filename) && empty($aadhar_back)) {
    // $data = "INSERT INTO travelstock (FULLNAME, MONO, EMAIL,PASSWD,type) VALUES ('$fullname', '$mono', '$email', '$pass',$type)";
    $data = "UPDATE travelstock SET FULLNAME='$fullname',EMAIL='$email',PASSWD='$pass',MONO='$mobile',place='$place',address='$address' WHERE email='$username'";
    mysqli_query($connection, $data);
?>
    <script>
        alert('Your Profile Successfully Update.');
        window.location.href = 'loginsuccess.php';
    </script>
<?php
    // header('location: ./adminloginsuccess.php');
} elseif (!empty($pass) && $pass === $confirmpass && !empty($filename) && !empty($aadhar_back)) {
    $folder = "images/aadhar_card/" . $filename1;
    move_uploaded_file($tempname, $folder);

    $folder2 = "images/aadhar_card/" . $aadhar_back_name;
    move_uploaded_file($aadhar_back_tmp, $folder2);
    // $data = "INSERT INTO travelstock (FULLNAME, MONO, EMAIL,PASSWD,type) VALUES ('$fullname', '$mono', '$email', '$pass',$type)";
    $data = "UPDATE travelstock SET FULLNAME='$fullname',EMAIL='$email',PASSWD='$pass',aadhar='$filename1',MONO='$mobile',aadhar_back='$aadhar_back_name',place='$place',address='$address' WHERE email='$username'";
    mysqli_query($connection, $data);
?>
    <script>
        alert('Your Profile Successfully Update.');
        window.location.href = 'loginsuccess.php';
    </script>
<?php
    // header('location: ./adminloginsuccess.php');
} elseif ($fullname && $email && empty($pass) && $filename && $aadhar_back) {
    $folder = "images/aadhar_card/" . $filename1;
    move_uploaded_file($tempname, $folder);

    $folder2 = "images/aadhar_card/" . $aadhar_back_name;
    move_uploaded_file($aadhar_back_tmp, $folder2);

    $data = "UPDATE travelstock SET FULLNAME='$fullname',EMAIL='$email',aadhar='$filename1',MONO='$mobile',aadhar_back='$aadhar_back_name',place='$place',address='$address' WHERE email='$username'";
    mysqli_query($connection, $data);
?>
    <script>
        alert('Your Profile Successfully Update.');
        window.location.href = 'loginsuccess.php';
    </script>
<?php
} elseif ($fullname && $email && empty($pass) && empty($filename) && empty($aadhar_back)) {
    $data = "UPDATE travelstock SET FULLNAME='$fullname',EMAIL='$email',MONO='$mobile',place='$place',address='$address' WHERE email='$username'";
    mysqli_query($connection, $data);
?>
    <script>
        alert('Your Profile Successfully Update.');
        window.location.href = 'loginsuccess.php';
    </script>
<?php
} else {
?>
    <script>
        alert('Password Mismatch.');
        window.location.href = 'loginsuccess.php';
    </script>
<?php
}
?>