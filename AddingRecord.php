<?php
$dblink=
"sql12.freesqldatabase.com";
$port: 3306;

try{
Sconn= new PDO('mysql: $dblink, $port');
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
