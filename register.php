<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Registration Form</title>
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
          .registration-form{
               position: absolute;
               top: 70%;
               left: 50%;
               transform: translate(-50%, -50%);
               width: 400px;

          }
          .registration-form h1{
               font-size: 30px;
               text-align: center;
               text-transform: uppercase;
               margin: 40px 0;
          }
          .registration-form p{
               font-size: 20px;
               margin: 15px;

          }
          .registration-form input{
               font-size: 20px;
               padding: 9px 36px;
               width: 100%;
               border: 3%;
               border-radius: 5px;
               outline: none;

          }
          .visit{
               font-size: 20px;
               padding: 9px 36px;
               width: 100%;
               border: 3%;
               border-radius: 5px;
               outline: none;
          }
          .registration-form button{
               font-size: 18px;
               font-weight: bold;
               margin: 20px 0;
               padding: 10px 15px;
               width: 50%;
               border: 2px;
               border-radius: 5px;
               background-color: #fff;
               
               

          }
          .registration-form button:hover{
               color: red;
               
          }
          .field{
              font-size:12px; 
              padding:30px;
              width:450px;
              height: 750px;
             

          }
   
         
     </style>
         <?php include "navigation.php"; ?>
         <BR><BR><BR>

</head>
<body>
     <div class="registration-form">
          <h1>Registration Form</h1>
          <form action="sighnuphelp.php" method="POST">
          <fieldset class="field">
               <p>Select Type</p>
               <select name="type"  id="" class= "visit" required>
                   <option value="">Select Type </option>
                    <option value="1">Guide</option>
                    <option value="2">Tourist</option>

               </select>
               <p>Full Name:</p>
               <input type="text" name="fullname" placeholder="Enter Your Full Name" required >
               <p>Mobile No:</p>
               <input type="text" name="mobileno" placeholder="Enter Your Mobile No."    required maxlength="10" >
               <p>Email</p>
               <input type="email" name="email" placeholder="Enter Your Email" required>
               <p>Password</p>
               <input type="password" name="password" placeholder="Create Password" required>
               <p>Re-Enter </p>
               <input type="password" name="confirm_password" placeholder="Confirm Password" required>
               
               <button type="submit">Registar</button>&nbsp; &nbsp; &nbsp;&nbsp;&nbsp;
               <a href="login.php">Login Here</a>
               </feildset>

          </form>
     </div>
     <br><br><br> <br><br><br><br><br><br><br><br><br> <br><br><br> <br> <br><br><br> <br><br><br><br><br><br> <br><br><br> <br><br><br> <br><br><br> <br><br><br> <br><br><br>
          <?php include "footer.php"; ?>
</body>
</html>