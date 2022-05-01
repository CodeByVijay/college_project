<?php   
error_reporting(0);   
 $connection = mysqli_connect('localhost','root');
//  if ($connection) {
//  echo "Connection is Stable";    
//  }
 
//  else{
//      echo "Connection Failed";
//  }
 mysqli_select_db($connection, 'travel'); 
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
            header('location:loginsuccess.php');
        }  
        else{  
            echo "<h1> Login failed. Invalid username or password.</h1>";  
            echo "<a href='index.php'>Back To Home</a>";
        }     
?>  