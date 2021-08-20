<?php
session_start();
require "dbc.php";
?>
<!DOCTYPE html>   
<html>   
<head>
<link rel="stylesheet" href="login.css">  
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="contact.css">
<title> Login Page </title>  
</head>    
<body>


<!-- Navigation/ Title  -->

<body>
<header>
  <h1> CHARITY <span> BANK </span></h1>
  <nav>
    <ul>
      <li><a href="index.html">Home</a></li>
      <li><a href="about.html">About</a></li>
      <!--<li><a href="customer list.html">Customer</a></li>-->
      <li><a href="contact.html">Contact</a></li>
    
    </ul>
  </nav>
</header>
</body>
<div class="login">
  <div class="heading">
    <h2>Sign in</h2>
    <form action="login2.php" method="POST">

      <div class="input-group input-group-lg">
        <span class="input-group-addon"><i class="fa fa-user"></i></span>
        <input type="text" name="username" class="form-control" placeholder="Username ">
          </div>

        <div class="input-group input-group-lg">
          <span class="input-group-addon"><i class="fa fa-lock"></i></span>
          <input type="password" name="password" class="form-control" placeholder="Password">
        </div>
		<div class="modal-footer">
           
           	<button class="btn btn-primary btn-lg" type="submit" name="Login">Login</button>
<button class="btn btn-primary btn-lg" type="submit" name="Reg">Registration</button>
          </div>

        <!--<button class="float" 
		onclick="href = 'index_after_login.html';">
            Login
        </button>-->
		
		<?php 
		
		
		if(isset($_POST['Reg'])){
			header("location:reg.php");
		}
		
		
		
		
		
		
		if(isset($_POST['Login'])){
			if($_POST['username']=="" || $_POST['password']=="")
			{
				//Echo "plase Enter the username and password";
				echo '<script>alert("plase Enter the username and password")</script>';
			}
			else
			{
				$userN=$_POST['username'];
				//echo $_POST['username'];
						$FQ="select * from login WHERE user='$userN'";
						//echo $FQ;
					$FQ2=mysqli_query($conn,$FQ);
						$rc=mysqli_num_rows($FQ2);
						//echo $rc;
						if ($rc==0)
						{
							echo '<script>alert("Not Valid")</script>';
						}
						else{
						for($i=0;$i<=$rc;$i++)
					{
			$row=mysqli_fetch_array($FQ2);
			$us=$row['user'];
			$up=$row['password'];
			$at=$row['AT'];
			$dt="NA";
			
			if($us==$_POST['username'] && $up==$_POST['password'] )
			{
				
				$_SESSION['username']=$us;
				//header("location:customerlist.php");
				
				if($at=='Admin')
				{
				//echo $at;
					$dt="Admin";
					header("location:customerlistAdmin.php");
				} 
				else
				{
					$dt="User";
					header("location:customerlist.php");
				}
				
			}
			else
			{
				echo '<script>alert("Not Valid")</script>';
			}
				
				
			
			/*elseif($us==$_POST['username'] && $up==$_POST['password'] && $at='user')
			{
			
				header("location:index.html");
			}
			else
			{
				echo '<script>alert("Not Valid")</script>';
				//break;
			}*/
		
		}
						}
		
			}
	}
		
		/*<a href="index_after_login.html" class="float">
			Login
		</a>
		<a href="index_after_login.html" class="float">
			adminLogin
		</a>*/
		?>
		
       </form>
 		</div>
 </div>   
</html>