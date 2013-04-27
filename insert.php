<?php
include 'mysqlcon.php';
include 'closeredirect.php';

$code = mysql_real_escape_string($_POST["code"]);
$name = mysql_real_escape_string($_POST["name"]);

  $sql="INSERT INTO staff (code, name)
	VALUES
	('$code','$name')";

$closevar = new closeredirect();

$closevar->checkclose($con,$sql);
$closevar->redirect();
?>