<?php
$myfile = fopen("/usr/local/php-demo/logs/a.log", "w+");
$txt = time();
fwrite($myfile, $txt);