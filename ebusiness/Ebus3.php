<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>RECEIPT</title>
        
        <link rel="stylesheet" href="../mystylesheet.css" type="text/css" />
        <link rel="stylesheet" href="int_pages.css" type="text/css" />
        
    </head>

    <body>
        
        <style>
            body, html {
            background-image: url("https://newevolutiondesigns.com/images/freebies/white-wallpaper-8.jpg");
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;
            height: 100%;
            }         
        </style>
        
        <div align="center">
        <h2>RECEIPT</h2>
        <br>
        <h4>Payment Details</h4>
    
        <?php
        // Echo session variables that were set on previous page
        echo "Total: " . $_SESSION["total"] . ".";
        echo "<br>";
        echo "First Name: " . $_SESSION["user_firstname"] . ".";
        echo "<br>";
        echo "Surname: " . $_SESSION["user_lastname"] . ".";
        echo "<br>";
        echo "Email Adress: " . $_SESSION["user_email"] . ".";     
        ?>
        
        <img src="http://www.animatedimages.org/data/media/361/animated-cloud-image-0014.gif"
        alt="Cloud Gif" style="width:180px;height:180px;position:absolute;top:70%;right:45%;"></a>
        
        <a href="../homepage.html" class="btn btn-about">Home</a>
        
        </div>
    </body>
</html>
