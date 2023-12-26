<?php
$dblink=
"sql12.freesqldatabase.com";
$port: 3306;

try{
Sconn= new PDO('mysql: $dblink, $port');
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$conn->beginTransaction();
$stmt->prepare("INSERT INTO fruits(billdt, fullname, mobile,shipaddr, shipcharge, empid, grapes, cherry, orange, apples, pineapple, guava, grapesgreen, banana, peaches, apricots, cashewnuts, dryfruits, amt, disc, netqty, grandtotal, ccno, cname, expdt, cvv, cardtype, gentoken, currency, invoiceno, receiptno, respno) VALUES(:ordt, :customer, :mobileno, :addr, :charge, :emp,:grapenet, :cherrynet, :orangenet, :applenet, :pinenet, : guavanet, :greennet, :banananet, :peachnet, :aprinet, :cashnet, :drynet, :fruitall, :discount, :finalwt, :grandfruit, :creditcardno, :ccname, :ccexpirydt, :cccvv, :cardType, :txt, :currency12, :invoice, :receiptno, :$response)");

$stmt->bindParam(':ordt', $billdt);
stmt->bindParam(':customer', $fullname):
stmt->bindParam(':movileno', $mobile);
stmt->bindParam(':addr', $shipaddr);
stmt->bindParam(':charge', $shipcharge);
stmt->bindParam(':emp', $empid);
stmt->bindParam(':grapenet', $grapes);
stmt->bindParam(':cherrynet', $cherry);
stmt->bindParam(':orangenet', $orange);
stmt->bindParam(':applenet', $apples);
stmt->bindParam(':pinenet', $pineapple);
stmt->bindParam(':guavanet',$guava);
stmt->bindParam(':greennet', $grapesgreen);
stmt->bindParam(':banananet', $banana);
stmt->bindParam(':peachnet', $peaches);
stmt->bindParam(':aprinet', $apricots);
stmt->bindParam(':cashnet', $cashewnuts);
stmt->bindParam(':drynet', $dryfruits);
stmt->bindParam(':fruitall', $amt);
stmt->bindParam(':discount', $disc);
stmt->bindParam(':finalwt', $netqty);
stmt->bindParam(':grandfruit', $grandtotal);
stmt->bindParam(':creditcardno', $ccno);
stmt->bindParam(':ccname', $cname);
stmt->bindParam(':ccexpirydt', $expdt);
stmt->bindParam(':cccvv', $cvv);
stmt->bindParam(':cardType', $cardtype);
stmt->bindParam(':txt', $gentoken);
stmt->bindParam(':currency12', $currency);
stmt->bindParam(':invoice', $invoiceno);
stmt->bindParam(':receiptno', $receiptno);
stmt->bindParam(':$response', $response);

$stmt->execute();
$conn->commit();
echo 'New Records created successfully';
}catch(PDOException $e){
$conn->rollback();
 echo 'Error'. $e->getMessage();
}
$conn= null;
?>
