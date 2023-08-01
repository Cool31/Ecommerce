<?=
include 'fruits.php';
 include 'fileget.php';
include 'fileformat.php';

session_start();
function csrftokengenerator(){
if(isset('csrf_token')){
/*create token if not present*/
$token = random_bytes(64);
($_SESSION['csrf_token']) = $token;
}
else{
/*reuse token*/
$token = ($_SESSION['csrf_token']);
}
return $token;

if($_GET['csrf_token'] == ($_SESSION['csrf_token']){
 unset($token);
 }
 else{
 die('token validation failed');    
 }
 
