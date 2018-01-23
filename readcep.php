<html>
	<head>
	</head>
	<body>
		<table>
			<tr>
				<th>Full Name</th>
				<th>Sex </th>
				<th>Age </th>
				<th>DEP ID </th>
				<th>Operation </th>
			</tr>
			<?php 
			include_once("connect.php");
			
			$result = mysqli_query($mysqli,"SELECT * FROM `student` ORDER BY `student`.`ID` DESC ");
			
			while($row = mysqli_fetch_array($result)){
			//var_dump($row);
			echo "<tr>";
			echo "<td>".$row['FName']." ".$row['MName']." ".$row['LName']."</td>";
			echo "<td>".$row['Sex']."</td>";
			echo "<td>".$row['Age']."</td>";
			echo "<td>".$row['Depid']."</td>";
			echo "<td><a href=\"ed.php?id=$row[ID]\">Edit</a>|<a href=\"delete.php?id=$row[ID]\">Delete</a></td>";
			echo "</tr>";
			}
			?>
		</table>
	</body>
</html>