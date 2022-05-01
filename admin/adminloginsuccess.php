<?php
session_start();
if(!$_SESSION['admin']){
    header('location:index.php');
    die;
}
$connection = mysqli_connect('localhost','root');
mysqli_select_db($connection, 'travel'); 
$result=mysqli_query($connection,"SELECT count(*) as total from `travelstock`");
$data=mysqli_fetch_assoc($result);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Admin Login Success</h1>
    <h3 style="color:blue">Name : <?php echo $_SESSION['name']; ?></h3>
    <h4 style="color:green">Total Tourists : <?php echo $data['total']; ?></h4>
    <a href='logout.php'>Logout</a><br>
    <a href='../index.php'>Back To Home</a>

</body>
</html>