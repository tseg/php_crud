<?php
include_once("connect.php");

if(isset($_POST['submit'])){
	$id = $_POST['id'];
	$fname = $_POST['fname'];
	$mname = $_POST['mname'];
	$lname = $_POST['lname'];
	$sex = $_POST['sex'];
	$age = $_POST['age'];
	$depid = $_POST['depid'];
	
	$query = "UPDATE `student` SET `FName` = '$fname', `MName` = '$mname', `LName` = '$lnmae', `Sex` = '$sex', `Age` = '$age', Depid=$depid WHERE `ID` = $id";
	$result = mysqli_query($mysqli,$query);
	
		echo "inserted";
	}
?>
<?php
if(isset($_GET['id'])){
	$id = $_GET['id'];
		$result=mysqli_query($mysqli, "SELECT * FROM `student` WHERE `ID`= $id");
		

		while($row = mysqli_fetch_array($result)){
				$fname = $row['FName'];
				$mname = $row['MName'];
				$lname = $row['LName'];
				$sex = $row['Sex'];
				$age = $row['Age'];
				$depid = $row['Depid'];
		}
?>
<html>
	<head>
	</head>
	<body>
		<form action="ed.php" method="post" name="insert student">
			<label>First Name<label><input type="text" name="fname" value="<?php echo $fname; ?>">
			<label>Middle Name<label><input type="text" name="mname" value="<?php echo $mname; ?>">
			<label>Last Name<label><input type="text" name="lname" value="<?php echo $lname; ?>">
			<label>Sex<label><input type="text" name="sex" value="<?php echo $sex; ?>">
			<label>Age<label><input type="text" name="age" value="<?php echo $age; ?>">
			<label>Department<label><input type="text" name="depid" value="<?php echo $depid; ?>">
			<input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">
			<input type="submit" name="submit" value="Edit">
		</form>
	</body>
</html>
	<?php } ?>