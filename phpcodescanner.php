<?php
use AMWScan\Scanner; 
$app = new Scanner();
$report = $app->setPathScan("  ") ->enableBackups() ->setPathBackups("("/.../backups") ->enableLiteMode() ->setAutoClean() ->run();
?>