<?php
require 'vendor/autoload.php';

spl_autoload_register(function($className){
$path = sprintf('%s php',$className);
if(file_exists($path)){
require_once 'bamboramerchant.php';

}else{
echo "file not found";
}
});

require_once "networkmonitor.php";

require_once "virusscan.js";

require_once "ipaddressvalid.php";

require_once "browserdetection.php";

require_once "phpcodescanner.php";

require_once "refund.php";

require_once "curls.php";

require_once "logerrors.php";

print_r($_SERVER);

Authorization:Passcode
Base64Encode(merchant_id:Passcode);

use api.na.bambora.com/scripts/tokenization/tokens as AnetAPI;

use api.na.bambora.com/v1/profiles as AnetController;

use api.na.bambora.com/v1/payments as Anetpayment;

use api.na.bambora.com/v1/reports as Anetreports;

define("YOUR_PATH_LOG_FILE", "phplog"); 

//setup merchant authorization & ref id data

function creditcardcharging($amount, $transactionreferenceid){
$merchant = new AnetAPI
\MerchantAuthenticationType();
$merchant->setName(bamb::MERCHANT_LOGIN_ID);
$merchant->setTransactionKey(bamb::PASSCODE);
$transactionreferenceid='ref' .time(); 

//setup mock credit card data

$credit = new AnetAPI\CreditCardType();
$credit->setCreditNumber('4111111111111111');
$credit->setExpirationDate('3579');
$credit->setCardCode('123');

//setup payment data
$payment = new Anetpayment\PaymentType();
$payment->setCreditCard($credit);

//setup customer order data
$order = new AnetAPI\OrderType();
$order->setDescription(New Item');

//setup invoice number data for each transaction & accounting purpose
$invoice = new AnetAPI\InvoiceNumberType();
$invoice->setInvoiceNumber("123456");

//setup transaction data
$transaction = new AnetAPI\TransactionRequestType();
$transaction->setTransactionType("autoCaptureTransaction ");
$transaction->setAmount($amount);
$transaction->setOrder($order);
$transaction->setPayment($payment);

//setup customer bill data - guest checkout
$cust = new AnetAPI\CustomerAddressType();
$cust->setFirstName($_POST['fname']);
cust->setLastName($_POST['lname']);
cust->setAddress($_POST['addr']);
cust->setAddress($_POST['ship']);
cust->setCity($_POST['city']);
cust->setDistrict($_POST['district']);
cust->setState($_POST['statename']);
cust->setCountry($_POST['country']);
cust->setZip($_POST['zip']);
cust->setPhoneNumber($_POST['phone']);
cust->setEmail("email");
$transaction->setBillTo($cust);

//setup customer data - e-commerce website
$customer1 = new AnetAPI\CustomerAddressType();
$customer1->getFirstName($_POST['fname']);
$customer1->setPhoneNumber($_POST['number']);
$customer1->setAddress($_POST['ship']);
$transaction->setBillTo($customer1);

//setup transaction request data
$request = new AnetAPI\CreateTransactionRequest();
$request->setMerchantAuthentication($merchant);
$request->setRefId($transactionreferenceid);
$request->setTransactionRequest($transaction);

//setup controller data
$controller = new AnetAPI\CreateTransactionController($request);
$response->$controller->executewithApiResponse(\api.na.bambora.com\AnetEnvironment::SANDBOX);

//check response status - success or failed or no response

if($response != null){
if($response->getMessages->getResultCode() ==  (\bamb::RESPONSE_OK){
 $tresponse = $ response->getTransactionResponse();
 
if($tresponse != null && $tresponse->getMessages() != null){
echo "Transaction Response Code" .$tresponse->getResponseCode(). "\n";
echo "charge credit auth code" .$tresponse->getAuthCode(). "\n";
echo "charge Card Transaction ID" .$tresponse->getTransid(). "\n";
echo "code". $tresponse->getMessages()[0]->getCode()."\n";
echo "Description" .$tresponse->getMessages()[0]->getDescription() ."\n";
  }
 }
}else{
echo "transaction failed";
if($tresponse->getErrors() != null){
echo "code". $tresponse->getErrors()->getErrorCode()[0] ."\n";
echo "Description". $tresponse->getErrors()->getErrorText()[0] ."\n";
   }
  } 
}else{
echo "transaction failed";
$tresponse = $response->getTransactionResponse() . "\n";
if($tresponse != null && $tresponse->getErrors() != null){
echo "code". $tresponse->getErrors()->getErrorCode()[0] ."\n";
echo "Description". $tresponse->getErrors()->getErrorText()[0] ."\n";    
  }
 }
}else{
echo "code". $response->Messages()->getMessage()[0]->getCode ."\n";
echo "Description". $response->getMessages()->getMessage()[0]->getText() ."\n";
    }
  }
}else{
echo "no transactions response returned";
}

//for PRODUCTION
change login_id & transaction_key
change SANDBOX to PRODUCTION
credit card + order + customer data details from server//
