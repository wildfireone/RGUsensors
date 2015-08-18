<?php
error_reporting(E_ALL);
ini_set('error_reporting', E_ALL);
error_reporting(-1);

$json = file_get_contents('https://data.sparkfun.com/output/3JLDEmrrOvia1Dwaa51E.json');
$obj = json_decode($json,true);
echo($obj[0]["humidity"]);
echo("\r\n")

?>