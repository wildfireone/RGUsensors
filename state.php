<?php
error_reporting(E_ALL);
$running = true;
print $running;
if($_GET["switch"]== "off"){
	$running = false;
}
else if($_GET["switch"]== "on"){
	$running = true;
}

if($_GET["check"] == "check")
{
	echo $running;
}
?>