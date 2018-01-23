<?php
 
/**
 * mysql_connect is deprecated
 * using mysqli_connect instead
 */
 
$databaseHost = 'localhost';
$databaseName = 'ipclass';
$databaseUsername = 'root';
$databasePassword = '';
 
$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName); 
var_dump($mysqli);
/*
	if (mysqli_connect_errno()) {
		echo("Connect failed:", mysqli_connect_error());
		exit();
	}
*/
?>