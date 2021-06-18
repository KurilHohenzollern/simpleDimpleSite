<?php

header('Cache-control: private, max-age=0');
// Печатает год в STDOUT
echo date('Y');
echo "\n";
echo "Hello, World!";

foreach ($_SERVER as $parm => $value)  
echo "$parm = '$value'\n";

foreach ($_GET as $parm => $value)
echo"$parm = '$value'\n";
