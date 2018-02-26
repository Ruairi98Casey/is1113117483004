<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>RECEIPT</title>
    </head>
    <style>
        body, html {
        background-image: url("https://newevolutiondesigns.com/images/freebies/white-wallpaper-8.jpg");
        background-repeat: no-repeat;
        background-size: cover;
        background-position: center;
        height: 100%;
        }         
    </style>
    <body>
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
        </div>
    </body>
</html>
