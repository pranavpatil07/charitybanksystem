<?php
 session_start();
require "dbc.php";
if(isset($_POST['savedata2']))
{
	$rn1=$_POST['DonationName'];
	$rn2=$_POST['DonationEmailId'];
	
	echo $rn1;
	echo $rn2;
	$FQ="select * from donationreg";
			$FQ2=mysqli_query($conn,$FQ);
			  $rc=mysqli_num_rows($FQ2);
			  $rn3=$rc+1;
			  echo $rn3;
			  $query="INSERT INTO donationreg VALUES('$rn1','$rn2',0,$rn3)";      
	mysqli_query($conn,$query);
	header("location:customerlistAdmin.php");
	
}
?>