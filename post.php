<?php
require_once("connect.php");

$date = date("Y-m-d H:i");
$title = mysql_real_escape_string($_POST['title']);
$message = mysql_real_escape_string($_POST['message']);
$status = mysql_real_escape_string($_POST['status']);

$query = mysql_query("INSERT INTO BlogDB (date, title, message, status) VALUES ('$date', '$title', '$message', '$status')");

header('Location: add_post.php');
?>
