<?php
session_start();
require "dbc.php";
if(isset($_GET['id']))
{
	
	$id=$_GET['id'];
	echo $id;
	
	$del = mysqli_query($conn,"delete from login where user = '$id'"); // delete query
	if($del)
{
    mysqli_close($conn); // Close connection
    header("location:index.html"); // redirects to all records page
    exit;	
}
else
{
    echo "Error deleting record"; // display error message if not delete
}
}
?>