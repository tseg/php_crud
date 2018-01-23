<?php
include_once("connect.php");

if(isset($_POST['submit'])){
	$fname = $_POST['fname'];
	$mname = $_POST['mname'];
	$lname = $_POST['lname'];
	$sex = $_POST['sex'];
	$age = $_POST['age'];
	$depid = $_POST['depid'];
	
	$query = "INSERT INTO `student`(`FName`, `MName`, `LName`, `Sex`, `Age`, `Depid`) VALUES ('$fname','$mname','$lname','$sex',$age,$depid)";
	$result = mysqli_query($mysqli,$query);
	
		echo "inserted";
	}else{
?>
<html>
	<head>
	</head>
	<body>
		<form action="insert.php" method="post" name="insert student">
			<label>First Name<label><input type="text" name="fname">
			<label>Middle Name<label><input type="text" name="mname">
			<label>Last Name<label><input type="text" name="lname">
			<label>Sex<label><input type="text" name="sex">
			<label>Age<label><input type="text" name="age">
			<label>Department<label><input type="text" name="depid">
			<input type="submit" name="submit" value="Add">
		</form>
	</body>
</html>
	<?php } ?>