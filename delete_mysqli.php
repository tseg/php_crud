<?php
//including the database connection file
include("config_mysqli.php");
 
//getting id of the data from url
$id = $_GET['id'];
 
//deleting the row from table
$result = mysqli_query($mysqli, "DELETE FROM department WHERE ID=$id");
 
//redirecting to the display page (read_mysqli.php in our case)
header("Location:read_mysqli.php");
?>