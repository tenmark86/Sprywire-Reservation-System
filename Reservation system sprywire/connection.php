<?php

$dbhost = 'localhost:3308';
$dbuser = 'root';
$dbpassword = '';
$dbname = 'airline reservation system';

$conn = new mysqli($dbhost, $dbuser, $dbpassword, $dbname) or die("Connection Unsuccessful");

?>
