<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Select Product</title>
        
        <!--jQuery-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script type="text/javascript" src="cost_calc.js"></script>

    <style>
        body, html {
        background-image: url("https://newevolutiondesigns.com/images/freebies/white-wallpaper-8.jpg");
        background-repeat: no-repeat;
        background-size: cover;
        background-position: center;
        height: 100%;
        }         
    </style>
    
    </head>

<body>
    <div align="center">
    <style>
    
    body {
    background-color: Lightblue;
    }
    
    </style>
    
    <h1>Select a product</h1>
    
    <br/>
    
    <form method="POST" onsubmit="return validate()" action="Ebus2.php">
        
    <fieldset>
    <label for="user_firstname">First Name:</label><input type="text" name="user_firstname" id="user_firstname" placeholder="First Name" maxlength="15" size="20" checked onClick="disablebtnProceed()">
    <label for="user_lastname">Surname:</label><input type="text" name="user_lastname" id="user_lastname" placeholder="Surame" maxlength="15" size="20">
    <label for="user_email">Email Address:</label><input type="email" name="user_email" id="user_email" placeholder="Email Adress" maxlength="35" size="20">
    </fieldset>
    
    <br>
    
    <br><lable for="salesforce">
    <input type="radio" id="salesforce" name="product" checked onClick="disablebtnProceed()"/>
    salesforce @ $100
    </lable>
    <br>
    
    <lable for="aws">
    <input type="radio" id="aws" name="product" onClick="disablebtnProceed()"/>
    AWS @ $300
    </lable>
    <br/>

    <lable for="Gmail">
    <input type="radio" id="Gmail" name="product" onClick="disablebtnProceed()"/>
    Gmail @ $150
    </lable>
    <br/>
    
    <lable for="Cloud9">
    <input type="radio" id="Cloud9" name="product" onClick="disablebtnProceed()"/>
    Cloud9 @ $80
    </lable>
     
     <br>
     <br>
    
    <fieldset>
    <label for="subtotal">Subtotal:</label><input type="text" name="subtotal" id="subtotal" value="0.00" readonly/>
    <label for="discount">Discount:</label><input type="text" name="discount" id="discount" value="0.00" readonly/>
    <label for="vat">Vat:</label><input type="email" name="vat" id="vat" value="0.00" readonly/>
    <label for="total">Total:</label><input type="text" name="total" id="total" value="0.00" readonly/>
    </fieldset>
    
    <br>
             
    <button type="submit" id="btnProceed" disabled>Add to Shopping cart</button>
    <?php
    // Set session session
    $_SESSION["subtotal"] = $_POST["subtotal"];
    $_SESSION["discount"] = $_POST["discount"];
    $_SESSION["vat"] = $_POST["vat"];
    $_SESSION["total"] = $_POST["total"];
    ?>
     </form>
     
     <br/> 
     <button onClick="calcSub()">Calculate cost</button>
     <a role="button" href="Ebus1.php">Clear Choices</a>
     <a role="button" href="../homepage.html">Home</a>
     
    <img src="http://www.animatedimages.org/data/media/361/animated-cloud-image-0014.gif"
    alt="Cloud Gif" style="width:180px;height:180px;position:absolute;top:70%;right:45%;"></a>
     
    </div> 
</body>
</html>
