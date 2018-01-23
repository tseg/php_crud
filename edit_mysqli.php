<?php
// including the database connection file
include_once("config_mysqli.php");
 
if(isset($_POST['update']))
{    

    $id = $_POST['id'];
    $name=$_POST['name'];
  
    // checking empty fields
    if(empty($name)) {    
            
            echo "<font color='red'>Name field is empty.</font><br/>";
       
    } else {    
        //updating the table
        $result = mysqli_query($mysqli, "UPDATE department SET Name='$name' WHERE ID=$id");
        
        //redirectig to the display page. In our case, it is index.php
        header("Location: read_mysqli.php");
    }
}
?>
<?php
if(isset($_GET['id'])){
//getting id from url
$id = $_GET['id'];
 
//selecting data associated with this particular id
$result = mysqli_query($mysqli, "SELECT * FROM department WHERE ID=$id");
 
while($row = mysqli_fetch_array($result))
{
    $name = $row['Name'];
}
?>
<html>
<head>    
    <title>Edit Data</title>
</head>
 
<body>
    <a href="read_mysqli.php">Home</a>
    <br/><br/>
    
    <form name="form1" method="post" action="edit_mysqli.php">
        <table border="0">
            <tr> 
                <td>Name</td>
                <td><input type="text" name="name" value="<?php echo $name;?>"></td>
            </tr>
            <tr>
                <td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
                <td><input type="submit" name="update" value="Update"></td>
            </tr>
        </table>
    </form>
</body>
</html>
<?php }else{
	
		//redirectig to the display page. In our case, it is read.php
        header("Location: read_mysqli.php");
}
?>