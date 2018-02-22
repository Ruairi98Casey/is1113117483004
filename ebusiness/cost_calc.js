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
        display(argSubtotal);
    calcDisVatTotal()
}
    function calcDisVatTotal(parmSubtotal){
        if(document.getElementById('salesforce').checked) {
        discountAmt = 5;
        vatAmt = 9.5;
        totalPrice = 104.5;
        }else if(document.getElementById('aws').checked) {
        discountAmt = 15;
        vatAmt = 28.5;
        totalPrice = 256.5;
        }else if(document.getElementById('Gmail').checked) {
        discountAmt = 7.5;
        vatAmt = 14.25;
        totalPrice = 128.25;
        }else{
        discountAmt = 4;
        vatAmt = 7.6;
        totalPrice = 69.4;
        }
        display(subtotal, discountAmt, vatAmt, totalPrice)
}
function display(parm1, parm2, parm3, parm4){
    
    document.getElementById("subtotal").value = parm1;
    document.getElementById("discount").value = parm2;
    document.getElementById("vat").value = parm3;
    document.getElementById("total").value = parm4;
    
    enablebtnProceed();
}


function enablebtnProceed(){
    $('#btnProceed').prop('disabled', false);
}

function disablebtnProceed(){
    $('#btnProceed').prop('disabled', true);
}