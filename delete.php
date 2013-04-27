<?php
include 'mysqlcon.php';
include 'closeredirect.php';

$sql="DELETE FROM staff WHERE code='$_GET[mcode]'";

$closevar = new closeredirect();

$closevar->checkclose($con,$sql);
$closevar->redirect();

?>