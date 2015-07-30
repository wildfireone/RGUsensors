<?php
error_reporting(E_ALL);
$data = file_get_contents(https://data.sparkfun.com/streams/3J5xqbLGGqcJQqMor7g8.json); 
$json = json_decode($data);
var_dump($json);
?>