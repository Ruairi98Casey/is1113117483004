<!DOCTYPE html>
<html>
    <head>
        <title>Select Product</title>
        
        
        <!--jQuery-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script type="text/javascript" src="cost_calc.js"></script>
    
    </head>

<body>
    <style>
        
        body {
            background-color: Lightblue;
            
        }
    </style>
    <h4>Select a product<h4/>
    
    <br/>
    
    <form method="POST" action="Ebus2.php">
    
    <lable for="salesforce">
    
    <input type="radio" id="salesforce" name="product" checked onClick="disablebtnProceed()"/>
    salesforce @ $100
    </lable>
    
    <br/>
    
    <lable for="aws">
        <input type="radio" id="aws" name="product" onClick="disablebtnProceed()"/>
        AWS @ $300
        
    </lable>
     <br/>
     <br/>
     
     <lable for="subtotal">
         Sub  Total 
         <input type="text" id="subtotal" name="subtotal" value="0.00" readonly/>
         </lable>
         
         <br/>
         
         <lable for="total">
             total
             <input type="text" id="total" name="total" value="0.00" readonly/>
             </lable>
             
             <br/>
             
             <button type="submit" id="btnProceed" disabled>Add to Shopping cart</button>
         
     </form>
     
     <br/> 
     <button onClick="calcSub()">Calculate cost</button>
     <a role="button" href="Ebus1.php">Clear Choices</a>
     
     </body>
     </html>
