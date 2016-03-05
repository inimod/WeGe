<?php
$destination = 'home/index.php';
$query_string = $_SERVER['QUERY_STRING'];

if (trim($query_string) != '') $destination .= '?'.$query_string;

header("location: $destination");
?>