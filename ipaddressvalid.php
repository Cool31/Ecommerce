<?php
function ipaddrvalidation(){
if(!isset($_SERVER['REMOTE_ADDR'] )){
return null;
}
    
$proxyheader = "HTTP_X_FORWARDED_FOR";

ip.src == "HTTP_X_FORWARDED_FOR";
ip.dst == "HTTP_X_FORWARDED_FOR";
$proxies = array("2001:db8::1", "192.168.1.1");
 if(in_array($_SERVER['REMOTE_ADDR'], $proxies){
     if(array_key_exists($proxyheader, $_SERVER){
 $ipclient = trim(explode(",",$_SERVER[$proxyheader]));
 }
if(filter_var($ipclient, FILTER_VALIDATE_IP}){
return $ipclient;    
} else{
echo "validation failed";
  }
 } 
}
return $_SERVER['REMOTE_ADDR'] ;
$clientiptest = get_client_ip();
//ping $clientiptest or use TRACERT
?>
