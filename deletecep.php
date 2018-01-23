<?php

include_once("connect.php");

if(isset($_GET['id'])){
	$id = $_GET['id'];
		$result=mysqli_query($mysqli, "DELETE FROM `student` WHERE `ID`= $id");
		echo "data is deleted";
}else{
	echo "id is not set";
}