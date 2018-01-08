<?php
	include_once("config_mysqli.php");
	
	if(isset($_POST['Submit'])){
		$name = $_POST['name'];
		//insert data to database        
        $result = mysqli_query($mysqli, "INSERT INTO department(Name) VALUES('$name')");
		
		//display success message
        echo "<font color='green'>Data added successfully.";
        echo "<br/><a href='read_mysqli.php'>View Data</a>";
	}else{
?>
<html>
<head>
    <title>Add Department</title>
</head>
 
<body>
    <a href="index.php">Home</a>
    <br/><br/>
 
    <form action="add_mysqli.php" method="post" name="form1">
        <table width="25%" border="0">
            <tr> 
                <td>Name</td>
                <td><input type="text" name="name"></td>
            </tr>
            <tr> 
                <td></td>
                <td><input type="submit" name="Submit" value="Add"></td>
            </tr>
        </table>
    </form>
</body>
</html>
	<?php } ?>