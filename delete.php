<?php
//including the database connection file
include("config.php");
 
//getting id of the data from url
$id = $_GET['id'];
 
//deleting the row from table
$sql = "DELETE FROM department WHERE ID=:id";
$query = $dbConn->prepare($sql);
$query->execute(array(':id' => $id));
 
//redirecting to the display page (read.php in our case)
header("Location:read.php");
?>