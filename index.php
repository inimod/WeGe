<?php
$destination = 'home/index.php';
$query_string = $_SERVER['query_string'];

if (trim($query_string) != '') $destination .= $query_string;

header("location: $destination");
?>