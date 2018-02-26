/* global $ */

var argSubtotal;
var subtotal 
var discountAmt 
var vatAmt
var totalPrice 
function calcSub(){
        
        if(document.getElementById('salesforce').checked) {
            argSubtotal = 100;
        }else if(document.getElementById('aws').checked) { 
            argSubtotal = 300;
        }else if(document.getElementById('Gmail').checked) { 
            argSubtotal = 150;
        }else{
            argSubtotal = 80;
        }
    calcDisVatTotal(argSubtotal);
}
    function calcDisVatTotal(parmSubtotal){
        var subtotal = parmSubtotal;
        var discountAmt = parmSubtotal * .05;
        var vatAmt = parmSubtotal * .1;
        var totalPrice = parmSubtotal - discountAmt + vatAmt ;
        
        display(subtotal, discountAmt, vatAmt, totalPrice);
}
function display(parm1, parm2, parm3, parm4){
    
    document.getElementById("subtotal").value = parm1;
    document.getElementById("discount").value = parm2;
    document.getElementById("vat").value = parm3;
    document.getElementById("total").value = parm4;
    
    enablebtnProceed();
}

function validate(){
    
    if (document.getElementById("user_firstname").value == ""){
        //User cannnot leave this field empty
        alert ('You must enter your First Name');
        return false;
        }else if (document.getElementById("user_lastname").value == ""){
        //User cannnot leave this field empty
        alert ('You must enter your Last Name');
        return false;
        }else if (document.getElementById("user_email").value == ""){
        //User cannnot leave this field empty
        alert ('You must enter your Email Adress');
        return false;
    }else{
        return true;
    }
}

function enablebtnProceed(){
    $('#btnProceed').prop('disabled', false);
}

function disablebtnProceed(){
    $('#btnProceed').prop('disabled', true);
}