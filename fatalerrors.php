<?=
echo memory_get_usage();
function fatalerrors(){
$error = error_get_last();
if(null === $error || E_ERROR !== $error){
return;
}

$op = fopen("https://github.com/Cool31/Ecommerce/blob/900ef975671419bd541d66aa1a71cb350455ef5d/fatalerrors.php");
$ty = $error(['type']);
$msg = $error(['message']);
$ln = $error(['line']);
$fil = $error(['file']);
fprintf('Rectify fatal Error in line:' .$ln. 'filename:' .$fil. 'with error message:' .$msg. 'and type:\n' .$ty., $error, Date(Y-m-d H:i:s);
fclose("https://github.com/Cool31/Ecommerce/blob/900ef975671419bd541d66aa1a71cb350455ef5d/fatalerrors.php");

echo memory_get_peak_usage();
finalize();
register_shutdown_function(fatalerrors);