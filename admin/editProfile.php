<?php
session_start();
require('../connection.php');
$username = $_SESSION['admin'];
$sql = "select * from `admin` where `email` = '$username'";

$result = mysqli_query($connection, $sql);
$row = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Admin | Edit Profile</title>
     <style>
          * {
               margin: 0%;
               padding: 0%;
               font-family: sans-serif;
          }

          body {
               background: url(../Images/bkgnd.jpg) no-repeat;
               background-size: cover;
               color: #000d1a;
          }

          .registration-form {
               position: absolute;
               top: 50%;
               left: 50%;
               transform: translate(-50%, -50%);
               width: 400px;

          }

          .registration-form h1 {
               font-size: 30px;
               text-align: center;
               text-transform: uppercase;
               margin: 40px 0;
          }

          .registration-form p {
               font-size: 20px;
               margin: 15px;

          }

          .registration-form input {
               font-size: 20px;
               padding: 9px 36px;
               width: 80%;
               border: 3%;
               border-radius: 5px;
               outline: none;

          }

          .visit {
               font-size: 20px;
               padding: 9px 36px;
               width: 100%;
               border: 3%;
               border-radius: 5px;
               outline: none;
          }

          .registration-form button {
               font-size: 18px;
               font-weight: bold;
               margin: 20px 0;
               padding: 10px 15px;
               width: 50%;
               border: 2px;
               border-radius: 5px;
               background-color: #fff;

          }

          .registration-form button:hover {
               color: red;

          }

          .field {
               font-size: 12px;
               padding: 30px;
               width: 450px;
               height: 500px;
               margin-bottom: 20px;

          }
     </style>


</head>

<body>
     <div class="registration-form">
          <h1>Admin Profile Edit</h1>
          <form action="updateProfile.php" method="POST">
               <fieldset class="field">
                    <p>Full Name:</p>
                    <input type="text" name="fullname" placeholder="Enter Your Full Name" value="<?php echo $row['name']; ?>" required>
                    <p>Email</p>
                    <input type="email" name="email" placeholder="Enter Your Email" value="<?php echo $row['email']; ?>" required>
                    <p>Password</p>
                    <input type="password" name="password" placeholder="Change Password">
                    <p>Re-Enter </p>
                    <input type="password" name="confirm_password" placeholder="Confirm Change Password">
                    <button type="submit">Update</button>&nbsp; &nbsp; &nbsp;&nbsp;&nbsp;
                    <a href="./adminloginsuccess.php">Back</a>
                    </feildset>

          </form>
     </div>

</body>

</html>