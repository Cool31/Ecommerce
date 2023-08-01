/*create folder path in server as formsserver*/
/*validation file*/
<?php
include 'customervalidation.php';
?>

fetch("https://.../formserver",{
method:'POST',
body: new FormData(document.getElementById("seats"), document.getElementById("air"), document.getElementById("latest")
});