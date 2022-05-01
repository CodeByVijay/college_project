<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>footer</title>
    <style>
        body{
            line-height: 1.5;
            font-family: 'Ubuntu',sans-serif;
        }
        *{
            margin:0;
            padding: 0;
            box-sizing: border-box;

        }
        .container{
            max-width: 1200px;
            margin: auto;

        }
        .row{
            display: flex;
        }
        ul{
            list-style: none;
        }
        .footer{
            background-color: #28292b;
            padding: 20px 0;
        }
        /* footer secton width */
        .footer-col{
            width: 25%;
            padding: 0 15px;
        } 
        /* peragraf sectoin */
        .footer-col p{
            font-size: 16px;
            color:#ebe5e5;
            margin-bottom: 25px;
        }

        .footer-col h4{
            font-size: 18px;
            color:#ffffff;
            margin-bottom: 35px;
            font-weight: 100;
            position: relative;
        }
        /* first sectoin */
        .footer-col h2{
            font-size: 30px;
            margin-bottom: 35px;
            color:#ff7220;
            
        }
        .footer-col h3{
            font-size: 20px;
            color:#f3aa0b;
            float :left;
        }
        .footer-col h4::before{
            content:'';
            position: absolute;
            left: 0;
            bottom: -10px;
            height: 2px;
            box-sizing: border-box;
            width: 50px;
        }
        .footer-col ul li:not(:last-child){
            margin-bottom: 10px;
        }
        .footer-col ul a{
            font-size: 16px;
            text-transform: capitalize;
            color: #ffffff;
            text-decoration: none;
            font-weight: 300;
            color: #bbbbbb;
            display: block;
            transition: all 0.3s ease;
        }
        .footer-col ul a:hover{
        color: #ffffff;
        padding-left: 10px;
        }
        .footer-col .social-icons {
            margin: 30px auto;
            text-align: center;
        }
       
            .footer-col .social-icons img{ 
            width: 30px;
            margin: 0 12px;
            box-shadow: 0 0 20px 0 #7f7f7f3d ;
            cursor: pointer;
            border-radius: 50%;
        }
        .sub h5{
            color: #ffffff;
        }
        .footer-col .social-links a:hover{
            color: #24262b;
            background-color: rgb(185, 181, 179);
        }
        /* responsive */
        @media(max-width:575px){
            .footer-col{
                width: 100%;
                margin-bottom:30px;
        }}
        
    </style>
</head>
<body>
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="footer-col">
                    <h2>Travel Stock</h2>
                    <ul>
                        <p>We are Student of Government Polytechnic College Balaghat we creat this project for Amazing place historical place and Mandir etc adding our website.</p>
                        <H3>LOCATION</H3> <br> <br> <br>
                      <UL><p>At and Post Balaghat Dist.Balaghat(481001) </p></UL> 
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>QUICK LINK</h4>
                    <ul>
                        <li><a href="index.php">Home</a></li><br>
                        <li><a href="about.php">About us</a></li><br>
                        <li><a href="contact.php">contact</a></li><br>
                        
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>OTHER LINK</h4>
                    <ul>
                        <li><a href="privacy.php">Privacy & Policy </a></li>
                        <br>
                        <li><a href="terms.php">Terms&Conditions</a></li>
                        
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>USEFUL LINK</h4>
                    <div class = "social-icons">
                         <a href="https://www.facebook.com/profile.php?id=100040784841942" >   <img  src="Images/logo/Facebook_Logo.png"></a>
                         <a href="https://twitter.com/SHAHRUK04339243"> <img src="Images/logo/twitter_logo.png"></a>
                          <a href="https://www.instagram.com/shahrukh_khan_13_/"><img src="Images/logo/insta_logo.png"></a>
                          <a href="https://www.youtube.com/channel/UCVivFst7tV3XJXy-jiJHe1g"><img src="Images/logo/youtube_logo.jpg"></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="sub">
        <h5><center>@Copyright group 5 GPC Balaghat</center></h5>
    </div>
    </footer>
    
</body>
</html>