<?php
function phonevalid(mobileno){
$phone = filter_var(mobileno, FILTER_SANITIZE_NUM_INT);
if($phone === 0){
echo 'mobile number is valid';
}
else{
echo 'mobile number is not valid';   
 }
}
phonevalid($phone);
?>
