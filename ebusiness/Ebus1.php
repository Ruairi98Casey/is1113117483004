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
    
    </head>

<body>
    <div align="center">
    <style>
    
    body {
    background-color: Lightblue;
    }
    
    </style>
    
    <h4>Select a product<h4/>
    
    <br/>
    
    <form method="POST" action="Ebus2.php">
        
                
    <label for="user_firstname">
    First Name 
    </label>
                
    <input type="name" id="user_firstname" placeholder="First Name" maxlength="15">                
                    
    <br>
                
    <label for="user_lastname">
    Last Name 
    </label>
                
    <input type="name" id="user_lastname" placeholder="Last Name" maxlength="15">                

    <br>
                
    <label for="email">
    Email Adress 
    </label>
                
    <input type="email" id="user_email" placeholder="Email Adress" maxlength="35">
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
    
    <lable for="subtotal">
    Sub Total 
    <input type="text" id="subtotal" name="subtotal" value="0.00" readonly/>
    </lable>
         
    <br>
         
    <lable for="discount">
    Discount
    <input type="text" id="discount" name="discount" value="0.00" readonly/>
    </lable>
             
    <br>
    
         
    <lable for="vat">
    VAT
    <input type="text" id="vat" name="vat" value="0.00" readonly/>
    </lable>
    
    <br>
         
    <lable for="total">
    Total
    <input type="text" id="total" name="total" value="0.00" readonly/>
    </lable>
    
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
    </div> 
</body>
</html>
