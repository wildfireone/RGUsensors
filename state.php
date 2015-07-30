<?php
error_reporting(E_ALL);
$json = file_get_contents('https://data.sparkfun.com/output/3J5xqbLGGqcJQqMor7g8.json');
$obj = json_decode($json);
echo $obj->access_token;
?>