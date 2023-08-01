<?=
/*bambora payment gateway integration - setup merchant account in bambora*/
/*executing code for multiple POST requests simultaneously*/


require_once "paysytem.html";

if(!extension_loaded("curl")){
die("curl not loaded. Install the curl");
}
/* post data*/
$request = array();
/*url data*/
$urls = array();
/*charge handles*/
$chs = array();

$request =["a"=>"totalpay",
"b"=>"currency12",
'c'=>'transaction_id'];
$urls[]=[
'https://www.github.com/cool31/cool31/main/financial/paysytem.html', 'https://www.bambora.com/..../endpoint1',  'https://www.bambora.com/..../endpoint2');];
 
$mh = curl_multi_init();
foreach($urls as $key => $url){
$chs[$key] = curl_init($url); curl_setopt($chs[$key], CURLOPT_RETURNTRANSFER, true);  curl_setopt($chs[$key], CURLOPT_POST,true);  curl_setopt($chs[$key], CURLOPT_POSTFIELDS, $request[key]); curl_multi_add_handle($mh,$chs[$key]);
 }
 
 /*run multiple requests*/
$runn = null;
do{ 
curl_multi_exec($mh, $runn);
}while(!$runn);

/*get response from bambora.com*/ foreach(array_keys($chs) as $key)){
 $error = curl_error($chs[$key]);
$info = curl_getinfo($chs[$key], CURLINFO_EFFECTIVE_URL);
$time = curl_getinfo($chs[$key], CURLINFO_TOTAL_TIME);
$response = curl_multi_getcontent($chs[$key]);
if(!empty($error)){
echo "$response error" .$error. "\n";
}
else{
 echo "The information" .$info. "to" .$response. "took"
 " .$time. "seconds";
}
curl_multi_remove_handle($mh, $chs[$key]);
curl_multi_close($mh);
 }

include 'retrieveurldata.php';
?>
