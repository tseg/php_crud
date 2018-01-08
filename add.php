<?php
	include_once("config.php");
	
	if(isset($_POST['Submit'])){
		$name = $_POST['name'];
		//insert data to database        
        $sql = "INSERT INTO department(name) VALUES(:name)";
        $query = $dbConn->prepare($sql);
                
        $query->bindparam(':name', $name);
        $query->execute();
        
        // Alternative to above bindparam and execute
        //$query->execute(array(':name' => $name));
		
		//display success message
        echo "<font color='green'>Data added successfully.";
        echo "<br/><a href='read.php'>View Data</a>";
	}else{
?>
<html>
<head>
    <title>Add Department</title>
</head>
 
<body>
    <a href="index.php">Home</a>
    <br/><br/>
 
    <form action="add.php" method="post" name="form1">
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