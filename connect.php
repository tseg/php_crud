<?php
$databaseHost = 'localhost';
$databaseUsername = 'root';
$databasePassword = '';
$databaseName = 'cepdb';
 
$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, 
$databaseName); 

	if (mysqli_connect_errno()) {
		echo("Connect failed:". mysqli_connect_error());
		exit();
	}
?>