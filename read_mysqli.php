<?php
//including the database connection file
include_once("config_mysqli.php");
 
//fetching data in descending order (lastest entry first)
$result = mysqli_query($mysqli, "SELECT * FROM department ORDER BY id DESC");
?>
 
<html>
<head>    
    <title>Read Data</title>
</head>
 
<body>
<a href="add_mysqli.php">Add New Data</a><br/><br/>
 
    <table width='80%' border=0>
 
    <tr>
		<td>ID</td>
        <td>Name</td>
		<td>Options</td>
    </tr>
    <?php     
    while($row = mysqli_fetch_array($result)) {         
        echo "<tr>";
		echo "<td>".$row['ID']."</td>";
        echo "<td>".$row['Name']."</td>";    
        echo "<td><a href=\"edit_mysqli.php?id=$row[ID]\">Edit</a> | <a href=\"delete_mysqli.php?id=$row[ID]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";
		echo "</tr>";
    }
    ?>
    </table>
</body>
</html>