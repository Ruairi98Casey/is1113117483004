<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        
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
        <title> Enter Details</title>
        
        
        <!--jQuery-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script type="text/javascript" src="ebus2_validator.js"></script>
    </head>
    
    <body>
        
        <h4>Please enter your payment details.</h4>
        
            <br />
            
            <form method = "POST" action = "Ebus3.php">
                
                <label for="user_pin">
                     PIN 
                </label>
                
                <input type="password" id="user_pin" placeholder="Card Pin" maxlength="4">
                <button type="Submit" id="btnPurchase" disabled> 
                Proceed with Purchase 
                </button>
                <br>
                
            </form>
            
            <br />
            
            <button onClick="validateDetails()">Validate</button>
            </div>
            <?php
            // Set session session
            $_SESSION["subtotal"] = $_POST["subtotal"];
            $_SESSION["discount"] = $_POST["discount"];
            $_SESSION["vat"] = $_POST["vat"];
            $_SESSION["total"] = $_POST["total"];
            $_SESSION["user_firstname"] = $_POST["user_firstname"];
            $_SESSION["user_lastname"] = $_POST["user_lastname"];
            $_SESSION["user_email"] = $_POST["user_email"];
            ?>
            
        <img src="http://www.animatedimages.org/data/media/361/animated-cloud-image-0014.gif"
        alt="Cloud Gif" style="width:180px;height:180px;position:absolute;top:70%;right:45%;"></a>        

    </body>
    
    
    
</html>
