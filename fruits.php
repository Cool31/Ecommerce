<?=
/*to display UI & UX/website errors to db & include xss protection & csrf protection*/

session_start();
set_error_handler(function($errno, $errstr, $errline, $errfile){
/*mysqli connection or make PDO connection if needed*/
try{
include 'outputdata.php';
$conn = new \PDO(mysql:host="myServer"; dbname="shoppingcenter;$username, $password),[
PDO::ATTR_ERRMODE => PDO::ATTR_ERRMODE_EXTENSION];
if($statement = $conn->prepare(INSERT INTO 'shoppingcenter'(no,str, file, line) VALUES (?, ?, ?, ?){
 throw new RuntimeException("data insertion to db error");
 }
 if($statement->execute($errno, $errstr, $errfile, $errline){
 throw new Exception("unable to execute");
 }
 Catch(Exception $e){ error_log("Exception  $e->getMessage() .PHP_EOL. "$errno:$errfile:$errline|$errstr";
 }
});

/*include file xss script protection - RFI or LFI*/
$financial ='financial/', $_GET['financial'], '.php';
$allowed = "['financial/outputdata.php','financial/fileformat.php','financial/csrfprotection.php', 'financial/complaints_suggestions']";
if(in_array($financial, $allowed){
 include($financial);
 }
 else {
 include(index.php);
}

/*csrf protection*/
