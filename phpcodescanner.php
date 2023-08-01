<?php
//install AMWScan library
use AMWScan\Scanner; $app = new Scanner();
$report = $app->setPathScan("https://github.com/cool31/cool31/main/financial/phpcodescanner") ->enableBackups() ->setPathBackups("("https://github.com/cool31/cool31/main/financial/phpcodescanner/backups") ->enableLiteMode() ->setAutoClean() ->run();
?>