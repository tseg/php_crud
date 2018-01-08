<?php
	include_once("crud.php");
	include_once("validation.php");
	
	$crud = new Crud();
	$validation = new Validation();

	if(isset($_POST['Submit'])){
		$name = $crud->escape_string($_POST['name']);
		
		$msg = $validation->check_empty($_POST, array('name'));
		
		//insert data to database        
        $result = $crud->execute("INSERT INTO department(name) VALUES('$name')");
		
		//display success message
        echo "<font color='green'>Data added successfully.";
        echo "<br/><a href='read_oop.php'>View Data</a>";
	}else{
?>
<html>
<head>
    <title>Add Department</title>
</head>
 
<body>
    <a href="read_oop.php">Home</a>
    <br/><br/>
 
    <form action="add_oop.php" method="post" name="form1">
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