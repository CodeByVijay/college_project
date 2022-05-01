<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Login Page</title>
     <style>
          *{
               margin: 0%;
               padding: 0%;
               font-family: sans-serif;
          }
          body{
          background : url(Images/bkgnd.jpg)no-repeat;
          background-size:cover;
          color: #000d1a;
          }
          .sign-up{
               position: absolute;
               top: 50%;
               left: 50%;
               transform: translate(-50%, -50%);
               width: 400px;

          }
          .sign-up h1{
               font-size: 30px;
               text-align: center;
               text-transform: uppercase;
               margin: 40px 0;
          }
          .sign-up p{
               font-size: 20px;
               margin: 15px;

          }
          .sign-up input{
               font-size: 20px;
               padding: 9px 36px;
               width: 100%;
               border: 3%;
               border-radius: 5px;
               outline: none;

          }
          
          .sign-up button{
               font-size: 18px;
               font-weight: bold;
               margin: 20px 0;
               padding: 10px 15px;
               width: 50%;
               border: 2px;
               border-radius: 5px;
               background-color: #fff;
               

          }
          .sign-up button:hover{
               color: red;
               
          }
          .field{
              font-size:12px; 
              padding:30px;
              width:450px;
              height: 350px;
             

          }
     </style>
         <?php include "navigation.php"; ?>

</head>
<body>
     <div class="sign-up">
          <h1>Login</h1>
          <form action="loginphp.php" method="POST">
          <fieldset class="field">

               <p>Mobile No.</p>
               <input type="text" name="username" placeholder="Enter Your Mobile No" required >
               
               <p>Password</p>
               <input type="password" name="password" placeholder="Enter Your  Password" required>

               <button type="submit">Login</button>&nbsp; &nbsp; &nbsp;&nbsp;&nbsp;
               <a href="register.php">Register Here</a>

          </form>
     </div>
     <br><br><br> <br><br><br> <br> <br><br><br> <br><br><br><br><br><br> <br><br><br> <br><br><br> <br><br><br> <br><br><br> <br><br><br>
          <?php include "footer.php"; ?>
</body>
</html>