<?php
include 'mysqlcon.php';
include 'closeredirect.php';
$code = mysql_real_escape_string($_POST["code"]);
$name = mysql_real_escape_string($_POST["name"]);

$sql="UPDATE staff SET code='$code',name='$name' WHERE code='$code'";

$closevar = new closeredirect();

$closevar->checkclose($con,$sql);
$closevar->redirect();
?>