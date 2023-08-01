/make a mkdir in file location*/

/*Illegal filename & extension*/
<?=
include 'fileget.php';
include 'fruits.php';
include 'csrf.php';

$illegal = array_merge(array_map('chr', range(0,31), ["<", ">", "*", ":", ";", "?", "|", "&", "!", " "]));
$file = str_replace($illegal, "-",  $_FILES['file']['name']);
$path = pathinfo($file);
$ext = $path['extension']? $path['extension']: ' ';
$file = $path['filename']? $path['filename']: ' ';

if(!empty($file) && (!empty($ext))){
echo($file, $ext)
}
else{
 echo "no filename or extension added";
};

/*check file extension type*/
if($mime == 'image/jpeg' && $ext = 'jpeg'|| $ext == 'jpg' || $ext == 'gif' || $ext == 'png'){
 if($img = imagecreatefromjpeg($file)){
  imagedestroy($img);
  else {
echo "no image in uploaded file";
 }
};

/*whitelist mime & extension types*/
function xp($mime, $ext, array($allowed)){[
return ['(isset($ext['mime']) && (in_array($ext['mime']) && in_array($allowed($ext['mime']))'];
$filetypes = [
'image/jpeg' => ['jpeg'],
'jpg' => ['jpg'],
'gif' => ['gif'],
'png' => ['png']
];
var_dump(xp('jpg', 'image/jpeg'));
  }
};

if($ext == 'pdf' || $ext == 'doc' || $ext == "docx" || $ext == 'txt'){
echo "Files being uploaded... please wait to finish uploading";
}
else {
echo "wrong format file trying to upload.  Please re-upload in correct format";
}

function fileupldstatus(){
$total = if(isset($_FILES[xxp[19]]) ? count($_FILES[xxp[19]])):'0';
for($i; $i < $total; $i++){
if($_FILES[xxp[19]]['error'][$i]) == UPLOAD_ERROR_OK){
$fileloc ="https://www.github.com/cool31/cool31/main/financial/complaints_suggestions)";
if(!file_exists($fileloc)){
 mkdir($fileloc);
 move_uploaded_file($_FILES[xxp[19]]['tmp'], $filedoc .basename($_FILES[xxp[19]]['name'][$i]));
 }
 else{
 switch($_FILES[xxp[19]]['name'][$i]):
 case "UPLOAD_ERR_INI_SIZE":
 Echo "uploaded file exceeded max size limit";
 break;
 case "UPLOAD_ERR_FORM_LIMIT":
 Echo "uploaded file of form submission exceeded its limit size";
 break;
 case "UPLOAD_ERR_PARTIAL":
 echo "only partially file was uploaded... re-upload";
 break;
 case "UPLOAD_ERR_NO_FILE":
 echo "no file was uploaded";
 break;
 case "UPLOAD_ERR_TMP_DIR":
 echo "temporary directory not created or failed";
 break;
 case "UPLOAD_ERR_CANT READ/WRITE";
 echo "uploaded file couldn't be read or written";
 break;
 case "UPLOAD_ERR_EXTENSION";
 echo "uploaded file has no extension format specified";
 break;
 default:
 echo "unknown error occurred...";
 break;
 } 

}
?>
