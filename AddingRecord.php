<?php
$dblink=
"db4free.net";
$db= "db4free123ab";
$port: 3306;

try{
Sconn= new PDO('mysql: $dblink, database: $db, username: testing12ab,  $port');
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$conn->beginTransaction();
$stmt->prepare("INSERT INTO fruits(fullname,addr, amt, grandfruit) VALUES(:customer, :shipaddr, :fruitall, :grandtotal)");

stmt->bindParam(':customer', $fullname):
stmt->bindParam(':addr', $shipaddr);
stmt->bindParam(':fruitall', $amt);
stmt->bindParam(':grandfruit', $grandtotal);

$stmt->execute();
$conn->commit();
echo 'New Records created successfully';
}catch(PDOException $e){
$conn->rollback();
 echo 'Error'. $e->getMessage();
}
$conn= null;
?>
