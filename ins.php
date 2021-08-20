
<?php 
session_start();
require "dbc.php";
//echo "not";

if(isset($_Post['AddDonation']))
{
	header("location:index.html");
}

	
	if(isset($_POST['savedata'])){
		//if(!empty($_post)){
	//echo "asd";
	$rn1=$_SESSION["username"];
	$rn2=$_REQUEST['Cat'];
	$rn3=$_POST['enterAmount'];
	$query="INSERT INTO `donateamt` VALUES('$rn1','$rn2','$rn3')";      
	mysqli_query($conn,$query);
	$FQ="select * from donationreg";
			$FQ2=mysqli_query($conn,$FQ);
			  $rc=mysqli_num_rows($FQ2);
			  for($i=0;$i<=$rc;$i++)
		{
			$row=mysqli_fetch_array($FQ2);
			if ($rn2==$row['DName']){
			$am=$row['AMT']+$rn3;
				//$am=(int)$row['AMT'];
				//$am2=500;
				//$am3=0;
				//$am3=Round($am+$am2);
				$query="UPDATE donationreg SET AMT=$am WHERE DName='$rn2'" ;
				mysqli_query($conn,$query);
				echo $rn2;
				echo $am;
			
			}
			
		}
		echo $rn1;
			  
}
header("location:customerlist.php");
?>