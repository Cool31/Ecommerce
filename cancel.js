import * as mod from './Ecommerce.html';

var crediting= document.getElementById('refunding').value;

$.noConflict();
jQuery(document).ready(function(){
$('button').click(function(){
$.load('grocery.txt'), function( statusTxt, responseTxt, xhr){
statusTxt.onsuccess= alert('data content via server loaded successfully');
$.get('grocery.txt'), function(data, status
if(data == mod.crediting){
alert('data & status ok, data matches for refund');
}else{
xhr.onerror = alert('unknown error');
   }
  }
 }

url = fetch("https://www.web.na.bambora.com/scripts/payment/payment.asp").then(response =>{
 if(!response.ok()){
throw new Error("Request failed");  
 }
});
xhr.open("POST", url);
xhr.send(data);
})
})