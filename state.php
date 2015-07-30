<?php
$running = true;
$_GET["switch"];
if($_GET["switch"]== "off"){
	running = false;
}
else if($_GET["switch"]== "on"){
	running = true;
}

if($_GET["check"] == "check")
{
	echo running;
}
?>