<?php
	$host="localhost";
	$user="root";
	$pwd="";
	$db="cb";


		$conn = mysqli_connect($host,$user,$pwd);
		mysqli_select_db($conn,$db);
?>