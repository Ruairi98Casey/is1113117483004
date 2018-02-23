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
        background-image: url("https://www.mistrisolutions.com/wp-content/uploads/2016/01/website-design-background.png");
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
        echo "Total is " . $_SESSION["total"] . ".";
        echo "<br>";
        echo "First Name: " . $_SESSION["user_firstname"] . ".";
        echo "<br>";
        echo "Last Name: " . $_SESSION["user_lastname"] . ".";
        echo "<br>";
        echo "Adress: " . $_SESSION["user_adress"] . ".";
        echo "<br>";
        echo "Contact Number: " . $_SESSION["user_number"] . ".";
        ?>
        </div>
    </body>
</html>
