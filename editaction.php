<?php
// including the database connection file
include_once("crud.php");
include_once("validation.php");

$crud = new Crud();
$validation = new Validation();

if(isset($_POST['update']))
{    
    $id = $crud->escape_string($_POST['id']);
    $name = $crud->escape_string($_POST['name']);
  
	$msg = $validation->check_empty($_POST, array('name'));
    // checking empty fields
    if($msg) {    
       echo "<font color='red'>$msg</font><br/>";
    } else {    
        //updating the table
        $result = $crud->execute("UPDATE department SET Name='$name' WHERE ID=$id");
        
        //redirectig to the display page. In our case, it is index.php
        header("Location: read_oop.php");
    }
}
?>