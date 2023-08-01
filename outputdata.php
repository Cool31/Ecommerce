<?php
include 'fruits.php';
include 'fileget.php';
include 'fileformat.php';
include "shopcart.html":
include 'customervalidity.php';
include 'postmsgcrossscript.html';
include "fatalerrors.php";

ini_set('display_error', 1);

header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json"; charset="UTF-8");

echo .htmlspecialchars($_GET['input']);
echo filter_input(INPUT_GET, "input", FILTER_SANITIZE_SPECIAL_CHARS);
echo urlencode($_GET['input']);
$input = filter_input(INPUT_GET, "input", FILTER_SANITIZE_URL);

echo '<a href = "https://www.github.com/cool31/cool31/main/financial?input=" .$input.>XSS_Secured_input/output Data</a>';

<!--cross check on html purifier white & blacklist OWASP ANTISAMY WEBSITE -->

CREATE DATABASE IF NOT EXISTS shoppingcenter;
SHOW CREATE DATABASE shoppingcenter;
CREATE USER 'suresh' @'%' IDENTIFIED BY 'pass2323';
GRANT ALL ON shoppingcenter.* TO 
"suresh" @ '%';
SHOW GRANTS FOR "suresh" @'%';

CREATE table 'shops'{
'shopid' INT(5) UNSIGNED NOT NULL PRIMARY KEY AUTOINCREMENT,
'OrderDate' DATETIME unsigned not null,
'OrderNo' INT(5) UNSIGNED NOT NULL,
'CustomerName' UNSIGNED NOT NULL VARCHAR(30),
'MobileNumber' INT(15) UNSIGNED NOT NULL,
'ShipAddr' UNSIGNED NOT NULL  VARCHAR(60),
'FreightCh'  INT(3) UNSIGNED NOT NULL,
'emailid' UNSIGNED NOT NULL VARCHAR(30),
'housename' UNSIGNED NOT NULL VARCHAR(30),
'city' UNSIGNED NOT NULL VARCHAR(30),
'district' UNSIGNED NOT NULL VARCHAR(30),
'state' UNSIGNED NOT NULL VARCHAR(30),
'country' UNSIGNED NOT NULL VARCHAR(30),
'zipcode' UNSIGNED NOT NULL VARCHAR(30),
} ENGINE = InnoDB;

CREATE table 'custorders'{
'shopid' INT UNSIGNED,
'orderid' INT UNSIGNED NOT NULL PRIMARY KEY AUTOINCREMENT,
'grapes' INT(3) UNSIGNED NOT NULL,
'cherry' INT(3) UNSIGNED NOT NULL,
'orange' INT(3) UNSIGNED NOT NULL,
'apples' INT(3) UNSIGNED NOT NULL,
'pineapple' INT(3) UNSIGNED NOT NULL,
'guava' INT(3) UNSIGNED NOT NULL,
'greengrapes' INT(3) UNSIGNED NOT NULL,
'bananas' INT(3) UNSIGNED NOT NULL,
'peaches' INT(3) UNSIGNED NOT NULL,
'apricots' INT(3) UNSIGNED NOT NULL,
'cashewnuts' INT(3) UNSIGNED NOT NULL,
'dryfruits' INT(3) UNSIGNED NOT NULL,
'comments' VARCHAR(150) UNSIGNED NOT NULL,
'grapeamt' INT(5) DECIMAL(2) UNSIGNED NOT NULL,
'cherryamt' INT(5) DECIMAL(2) UNSIGNED NOT NULL,
'orangeamt' INT(5) DECIMAL(2) UNSIGNED NOT NULL,
'appleamt' INT(5) DECIMAL(2) UNSIGNED NOT NULL,
'pineappleamt' INT(5) DECIMAL(2) UNSIGNED NOT NULL,
'guavaamt' INT(5) DECIMAL(2) UNSIGNED NOT NULL,
'greengrapesamt' INT(5) DECIMAL(2) UNSIGNED NOT NULL,
'peachesamt' INT(5) DECIMAL(2) UNSIGNED NOT NULL,
'apricotamt' INT(5) DECIMAL(2) UNSIGNED NOT NULL,
'cashewnutamt' INT(5) DECIMAL(2) UNSIGNED NOT NULL,
'dryfruitsamt' INT(5) DECIMAL(2) UNSIGNED NOT NULL,
'totalamt' INT(5) DECIMAL(2) UNSIGNED NOT NULL,
'grandtotalamt' INT(5) DECIMAL(2) UNSIGNED NOT NULL,
'deductionamt' INT(5) DECIMAL(2) UNSIGNED NOT NULL,
'Shippingcharges' INT(7) DECIMAL(2) UNSIGNED NOT NULL,
FOREIGN KEY(shopid) REFERENCES shops(shopid)
}ENGINE = InnoDB;

CREATE table 'custcreditpay'{
'shopid' INT UNSIGNED,
'cardpayid' INT(5) PRIMARY KEY UNSIGNED NOT NULL,
'cardname' VARCHAR(35) UNSIGNED NOT NULL,
'cardnumber' INT(16) UNSIGNED NOT NULL,
'cardexpirymonth' INT(12) UNSIGNED NOT NULL,
'cardexpiryyear' INT(4) UNSIGNED NOT NULL,
'cardcvv' INT(3) UNSIGNED NOT NULL,
'cardcurrency' VARCHAR(15) UNSIGNED NOT NULL,
'cardtype' VARCHAR(25) UNSIGNED NOT NULL,
'cardrefundamt' INT(7) DECIMAL (2) UNSIGNED NOT NULL,
'cardtotalamt' INT(7) DECIMAL (2) UNSIGNED NOT NULL,
'cardtxid' INT(45) UNSIGNED NOT NULL,
'cardtoken' INT(55) UNSIGNED NOT NULL,
'cardtax' INT(5) DECIMAL(2) UNSIGNED NOT NULL,
'cardtotalsalesamt' INT(10) DECIMAL(2) UNSIGNED NOT NULL,
'cardtotaldeductamt' INT(10) UNSIGNED NOT NULL,
FOREIGN KEY(shopid) REFERENCES shops(shopid)
}ENGINE = InnoDB;

$conn = new mysqli("myServer", "Ecomm260aqt2", "B2:afC¥h)RI;-H", "shoppingcenter") or die("failed to connect" . $conn->connect_error );

INSERT IGNORE INTO shops ('OrderDate','OrderNo','CustomerName','MobileNumber','ShipAddr','FreightCh', 
 'emailid', 'housename','city','district','state','country','zipcode') VALUES('&orddt','&ordno','&customer', '&mobileno', '&addr', '&charge', '&mail', to continue with customer.php);
 
INSERT IGNORE INTO custorders('grapes', 'cherry', 'orange', 'apples', 'pineapple', 'guava', 'greengrapes','bananas', 'peaches', 'apricots', 'cashewnuts', 'dryfruits', 'total') VALUES('&grapenet','&cherrynet', '&orangenet', '&applenet','&pinenet','&guavanet', '&greennet', '&banananet', '&peachnet', '&aprinet', '&cashnet', '&drynet', '&finalwt');
 
INSERT IGNORE INTO custorders('grapeamt', 'cherryamt', 'orangeamt', 'appleamt', 'pineappleamt', 'guavaamt', 'greengrapesamt', 'peachesamt', 'apricotamt','cashewnutamt', 'dryfruitsamt', 'totalamt', 'grandtotalamt','dedeductionamt', 'totalsales') VALUES('&grap','&cherr', '&oran', '&apple', '&guav', '&papple', '&grapegreen', '&bana', '&peach', '&apri', '&cashew','&dryfr','&fruitall' , '&grandfruit', '&discount', '&charge');

INSERT IGNORE INTO custcreditpay('cardname', 'cardnumber', 'cardexpirymonth' 'cardexpiryyear','cardcvv', 'cardcurrency', 'cardtype','cardrefundamt','cardtotalamt','cardtxid', 'cardtoken', 'cardtax','cardtotalsalesamt', 'cardtotaldeductamt') VALUES('&creditcardname', '&creditcardno', '&expirymonth', '&expiryyear', '&creditcvv', '&currency12','&pays','&'???refund+txid+totalamt,'&txt', '&????cardtax amt' , '&cardtotalsalesamt????','&cardtotaldeductedamt');

$result = $conn->query("SELECT OrderDate, OrderNo, CustomerName, MobileNumber, ShipAddr, FreightCh, EmpId,  Grapes, Cherry, Oranges, Apples, Pineapple, Guava, GrapesGreen, Bananas, Peaches, Apricots, Cashewnuts, DryFruits, CardType, Token, TotalPay, CardCharges,FinalPayAmt,TypeCard, GrapeNet, CherryNet, OrangeNet, AppleNet, PineappleNet, GuavaNet, GreenNet, BananaNet, PeachNet, ApricotNet, CashewnutNet, DryFruitNet, TotalNet, FinalNet, TotalWt, GrapesAmt, CherryAmt, OrangesAmt, ApplesAmt, PineapplesAmt, GuavasAmt, GrapegreenAmt, BananasAmt, PeachesAmt, ApricotAmt, CashewnutAmt, DryFruitsAmt, GrandAmt FROM shoppingcenter");

$outp = "";
while($rs = $result->fetch_array(MYSQLI_ASSOC)) {
    if ($outp != "") {$outp .= ",";}
$outp .= '{"Order Date": "'.$rs["date"].'",';

$outp .= '"Order No":'". $rs["ords"].'",';

$outp .= '"Customer Name":"'. $rs["fname"].'",';


outp .= '"Mobile Number":"'. $rs["number"].'",';

outp .= '"Ship Addr":"'. $rs["ship"].'",';

outp .= '"Freight Ch":"'. $rs["shipadd"].'",';

outp .= '"Emp Id":"'. $rs["shipemploy"].'",';

outp .= '"Grapes":"'. $rs["mob"].'",';

outp .= '"Cherry":"'. $rs["ban"].'",';

outp .= '"Oranges":"'. $rs["tan"].'",';

outp .= '"Apples":"'. $rs["van"].'",';

outp .= '"Pineapple":"'. $rs["dan"].'",';

outp .='"Guava":"'. $rs["bun"].'",';

outp .= '"Grapes Green":"'. $rs["sun"].'",';

outp .= '"Bananas":"'. $rs["pun"].'",';

outp .='"Peaches":"'.$rs["tun"].'",';

outp .= '"Apricots":"'. $rs["dunn"].'",';

outp .= '"Cashewnuts":"'. $rs["tuss"].'",';

outp .= '"Dry Fruits":"'. $rs["tunes"].'",';

outp .= '"Card Type":"'. $rs["cardsoftype"].'",';

outp .='"Token":"'. $rs["txt"].'",';

outp .= '"Total Pay":"'. $rs["totaltopay"].'",';

outp .= '"Card Charges":"'. $rs["cardcharges"].'",';

outp .= '"Final Pay Amt":"'. $rs["finaltotal"].'",';

outp .= '"Type Card":"'. $rs["cardType"].'",';

outp .= '"Grape Net":"'. $rs["grapenet"].'",';

outp .= '"Cherry Net":"'. $rs["cherrynet"].'",';

outp .= '"Orange Net":"'. $rs["orangenet"].'",';

outp .= '"Apple Net":"'. $rs["applenet"].'",';

outp .= '"Pineapple Net":"'. $rs["papplenet"].'",';

outp .= '"Guava Net":"'. $rs["guavanet"].'",';

outp .= '"Green Net":"'. $rs["greennet"].'",';

outp .= '"Banana Net":"'. $rs["banananet"].'",';

outp .= '"Peach Net":"'. $rs["peachnet"].'",';

outp .= '"Apricot Net":"'. $rs["apricotnet"].'",';

outp .= '"Cashew Net":"'. $rs["cashewnet"].'",';

outp .= '"Dry Fruits Net":"'. $rs["drynet"].'",';

outp .= '"Total Net:"'. $rs["totalnet"].'",';

outp .= '"Final Net":"'. $rs["finalnet"].'",';

outp .= '"Final Wt":"'. $rs["totalwt"].'",';

outp .= '"Grapes Amt":"'. $rs["grapes"].'",';

outp .= '"Cherry Amt":"'. $rs["cherries"].'",';

outp .= '"Oranges Amt":"'. $rs["oranges"].'",';

outp .= '"Apple Amt":"'. $rs["apples"].'",';

outp .= '"Pineapple Amt":"'. $rs["papples"].'",';

outp .= '"Guavas Net":"'. $rs["guavas"].'",';

outp .= '"Grapegreen Amt":"'. $rs["grapesgreen"].'",';

outp .= '"Bananas Amt":"'. $rs["bananas"].'",';

outp .= '"Peaches Amt":"'. $rs["peaches"].'",';

outp .= '"Apricot Amt":"'. $rs["apricots"].'",';
outp .= '"Cashewnuts:"'. $rs["cashewnuts"].'",';

outp .= '"Dry Fruits Amt":"'. $rs["dryfruits"].'",';

outp .= '"Grand Amt":"'. $rs["grandfruit"].'",';
}';
}
$outp ='{"records":['.$outp.']}';
$conn->close();

echo($outp);
?>
