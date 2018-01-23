<?php
//including the database connection file
include_once("config.php");
 
//fetching data in descending order (lastest entry first)
$result = $dbConn->query("SELECT * FROM department ORDER BY ID DESC");
var_dump($result);
?>
<html>
<head>   
    <title>Read Data</title>
</head>
 
<body>
<a href="add.php">Add New Data</a><br/><br/>
 
    <table width='80%' border=0>
 
    <tr>
		<td>ID</td>
        <td>Name</td>
		<td>Options</td>
    </tr>
    <?php     
    while($row = $result->fetch(PDO::FETCH_ASSOC)) {
        echo "<tr>";
		echo "<td>".$row['ID']."</td>";
        echo "<td>".$row['Name']."</td>";    
        echo "<td><a href=\"edit.php?id=$row[ID]\">Edit</a> | <a href=\"delete.php?id=$row[ID]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";
		echo "</tr>";
    }
    ?>
    </table>
</body>
</html>