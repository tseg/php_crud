<?php
if(isset($_GET['id'])){
// including the database connection file
include_once("crud.php");
 
$crud = new Crud();
 
//getting id from url
$id = $crud->escape_string($_GET['id']);
 
//selecting data associated with this particular id
$result = $crud->getData("SELECT * FROM department WHERE ID=$id");
 
foreach($result as $row)
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
    
    <form name="form1" method="post" action="editaction.php">
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