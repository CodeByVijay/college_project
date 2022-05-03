<?php
session_start();
require('./connection.php');
$fullname = $_POST['fullname'];
$mono = $_POST['mobileno'];
$email = $_POST['email'];
$pass = $_POST['password'];
$confirmpass = $_POST['confirm_password'];
$type = $_POST['type'];

$sql = "select * from `travelstock` where `EMAIL` = '$email' OR `MONO` = '$mono'";
$result = mysqli_query($connection, $sql);
// $row = mysqli_fetch_assoc($result);
$check_user = mysqli_num_rows($result);
if ($check_user > 0) {
?>
    <script>
        alert('Email Id & Mobile Number Already Registered.');
        window.location.href = 'register.php';
    </script>
    <?php
} else {

    if ($pass === $confirmpass) {
        $data = "INSERT INTO travelstock (FULLNAME, MONO, EMAIL,PASSWD,type) VALUES ('$fullname', '$mono', '$email', '$pass',$type)";
        mysqli_query($connection, $data);
        $_SESSION['name'] = $fullname;
        header('location:signupsuccessfull.php');
    } else {
    ?>
        <script>
            alert('Password Mismatch');
            window.location.href = 'register.php';
        </script>
<?php
    }
}

?>