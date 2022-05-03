<?php   
error_reporting(0);   
session_start();
require('./connection.php');
    $username = $_POST['username'];  
    $password = $_POST['password'];  
      
        //Form se data aa  raha hai
        $username = stripcslashes($username);  
        $password = stripcslashes($password);  
        $username = mysqli_real_escape_string($connection, $username);  
        $password = mysqli_real_escape_string($connection, $password);  
      
        $sql = "select * from `travelstock` where `MONO` = '$username' and PASSWD = '$password'";  
        
        $result = mysqli_query($connection, $sql);  
        $row = mysqli_fetch_assoc($result);
       
        if($row['MONO'] == $username){  
            // echo "<h1><center> Login successful </center></h1>";  
            $_SESSION['name'] = $row['FULLNAME'];
            $_SESSION['user'] = $row['EMAIL'];
            $_SESSION['type'] = $row['type'];
            header('location:loginsuccess.php');
        }  
        else{  
            ?>
            <script>
                alert('Login failed. Invalid username or password');
                window.location.href = 'login.php';
            </script>
            <?php
        }     
?>  