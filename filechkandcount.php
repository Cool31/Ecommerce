<?php
/*files uploaded + total files status*/

if($_FILES(["order"]["error"]) == UPLOAD_ERR_OK){
$filelocation = "https://github.com/Cool31/Ecommerce";
if(!fileexists($_FILES(["order"]){
 mkdir($filelocation);
move_uploaded_file($_FILES["order"]["tmpname"], $filelocation, basename($_FILES["order"]["name"]));
}
}

/*html form must ve multiple*/
$totalfiles = isset($_FILES(["order"]["error"])== UPLOAD_ERR_OK){
 for($i = 0; $i <$totalfiles; $i++){
 if($_FILES(["order"]["error"]) == UPLOAD_ERR_OK){
$filelocation = "https://github.com/Cool31/Ecommerce";
if(!fileexists($_FILES(["order"][$i]){
 mkdir($filelocation);
move_uploaded_file($_FILES["order"]["tmpname"], $filelocation, basename($_FILES["order"]["name"]));
} 
else switch  ($_FILES(["order"][$error][$i]):
 case UPLOAD_ERR_INT_SIZE:
 echo "value 1";
 break;
 case UPLOAD_ERR_FORM_SIZE:
 echo "value 2";
 break;
 case UPLOAD_ERR_PARTIAL:
 echo "value 3";
 break;
 case UPLOAD_ERR_NO_FILE:
 echo "value 4";
 break;
 case UPLOAD_ERR_NO_TMP_DIR:
 echo "value 5";
 break;
  case UPLOAD_ERR_CANT_WRITE:
 echo "value 6";
 break;
 case UPLOAD_ERR_EXTENSION:
 echo "value 7";
 break;
default:
echo"unknown error";
break;          
 }
}
?>

/*multidimensional array as table output
<table>
<?php  
foreach($products as $key => $value){
foreach($value as $k => $v){
echo "<tr>";
echo "<td>$k</td>";
echo "<td>$v</td>";
echo "</tr";
}
} 
?>   
</table>