<?php
//including the database connection file
//including the database connection file
include_once("crud.php");
 
$crud = new Crud();
 
//fetching data in descending order (lastest entry first)
$query = "SELECT * FROM department ORDER BY ID DESC";
$result = $crud->getData($query);
?>
 
<html>
<head>    
    <title>Read Data</title>
</head>
 
<body>
<a href="add_oop.php">Add New Data</a><br/><br/>
 
    <table width='80%' border=0>
 
    <tr>
		<td>ID</td>
        <td>Name</td>
		<td>Options</td>
    </tr>
    <?php     
    foreach($result as $key => $row) {         
        echo "<tr>";
		echo "<td>".$row['ID']."</td>";
        echo "<td>".$row['Name']."</td>";    
        echo "<td><a href=\"edit_oop.php?id=$row[ID]\">Edit</a> | <a href=\"delete_oop.php?id=$row[ID]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";
		echo "</tr>";
    }
    ?>
    </table>
</body>
</html>