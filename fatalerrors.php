<?=
echo memory_get_usage();
function fatalerrors(){
$error = error_get_last();
if(null === $error || E_ERROR !== $error){
return;
}

$op = fopen("https://www.github.com/cool31/cool31/main/financial/prevent/../");
$ty = $error(['type']);
$msg = $error(['message']);
$ln = $error(['line']);
$fil = $error(['file']);
fprintf('Rectify fatal Error in line:' .$ln. 'filename:' .$fil. 'with error message:' .$msg. 'and type:\n' .$ty., $error, Date(Y-m-d H:i:s);
fclose("https://www.github.com/cool31/cool31/main/financial/prevent/.../");

echo memory_get_peak_usage();
finalize();
register_shutdown_function(fatalerrors);