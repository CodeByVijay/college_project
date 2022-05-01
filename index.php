<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index</title>
    <!-- Yahan se Slider Ki Css Start Hai  -->
    
    <style>
        body {
            background-color: rgb(243, 235, 235);
        }

        h3 {
            font-size: 2.1rem;
            line-height: 1.4;
            letter-spacing: 0.5rem;
            text-align: center;
            color: black;
            margin-top: 30px;
        }

        .maindiv {
            width: 98%;
            height: 520px;
            position: absolute;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%);
            background-image: url(Images/wariamazing.jpg);
            background-image: url(Images/wari.jpg);
            background-image: url(Images/kalipath.jpg);
            background-image: url(Images/hatta.jpg);
            background-image: url(Images/koteshwar.jpg);
            background-image: url(Images/jwaladevi.jpg);
            background-size: 100% 100%;
            box-shadow: 1px 2px 10px 10px rgb(148, 136, 163);
            animation: slider 10s infinite linear;
        }

        @keyframes slider {
            10% {
                background-image: url(Images/slider/welcome.jpg);
            }

            100% {
                background-image: url(Images/jwaladevi.jpg);
            }

            150% {
                background-image: url(Images/kalipath.jpg);
            }

            200% {
                background-image: url(Images/hatta.jpg);
            }

            250% {
                background-image: url(Images/koteshwar.jpg);
            }

            300% {
                background-image: url(Images/jwaladevi.jpg);
            }


        }
        img{
            height="300px";
            width= "400px";
        }
    </style>
    <!-- Yahan Slider ki css Khatam  -->
    <!-- Navigation Incliude -->
    <?php include "navigation.php"; ?>
</head>
<body>
    <!-- Slider -->
    <br><br><br><br><br><br>
    

    
    <br><br><br><br><br><br>
    <div class="maindiv">

    </div>
   
    <br><br><br><br><br><br>
    <br><br><br><br><br><br>


   <br>
    <a href="lanji.php"><img src="Postimg/लांजी का किला.jpg" alt="लांजी का किला " height="350px" width ="670px" ></a>
    <a href="hatta.php"><img src="Postimg/hatta.jpg" alt="हट्टा की बावली बालाघाट " height="350px" width ="670px" ></a>
    <a href="wari.php"><img src="Postimg/वारी बांध लांजी.png" alt="वारी बांध लांजी " height="350px" width ="670px" ></a>
    <a href="musium.php"><img src="Postimg/पुरातातत्व संग्रालय.png" alt="पुरातातत्व संग्रालय " height="350px" width ="670px" ></a>
    <a href="ramram.php"><img src="Postimg/रमरमा वॉटरफॉल.jpg" alt="रमरमा वॉटरफॉल " height="350px" width ="670px" ></a>
    <a href="gangulpara.php"><img src="Postimg/गांगुलपारा  वॉटरफॉल.png" alt="गांगुलपारा  वॉटरफॉल " height="350px" width ="670px" ></a>
    <!-- <a href="koteshwar.php"><img src="Postimg/कोटेश्वर धाम.jpg" alt="कोटेश्वर धाम " height="100px" width ="200px" ></a> -->





   

    </center>
    <?php include "footer.php"; ?>
</body>
</html>