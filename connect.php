<?php
//Connecting to blog database

$user = 'username';
$password = 'password';
$host = 'localhost';
$dbname = 'db name';

$link = mysql_connect($host, $user, $password);
$db = mysql_select_db($dbname, $link);
?>
