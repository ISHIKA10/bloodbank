<?php
   include("db_connect.php");
   
   if(isset($_POST['submit'])){
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($conn,$_POST['username']);
      $mypassword = mysqli_real_escape_string($conn,$_POST['password']); 
      
      $sql = "SELECT register_id FROM register WHERE name = '$myusername' and password1 = '$mypassword'";
      $result = mysqli_query($conn,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);

      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
        
             session_start();
         $_SESSION['login_user'] = $myusername;
        
         header("location:bloodbank.php");
      }else {
         $error = "Your Login Name or Password is invalid";
      }
   }}
?>

<!DOCTYPE html>
<html>
<head>
  <title>blood bank login</title>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
   <link rel="stylesheet" type="text/css" href="loginstyle102.css">
   
  
</head>
<body>

<section class="topmostbar">
	<div class="container ">
		<div class="row ">
			<div class="col-md-6" >
					<h5 style="text-allign:center;">Welcome to Blood Donation Center.</h5>
			</div>	
			
			
				
		<?php

					if(isset( $_SESSION['login_user'])){?>
						
						<div class="col-md-6">
							<ul style="display:inline-block;">
								<li><?php echo"Hello ".$_SESSION['login_user']."<br><br>";?></li>
								<li><a href="http://localhost/bloodbank/logout.php" ">Logout</a></li>
							</ul>
							 
						</div>
						 
								
					<?php }
					else{?>

						<div class="col-md-6 menu ">	
							<ul>
							 <li><a href="http://localhost/bloodbank/register.php" >SIGN UP</a></li>
							  <li><a href="http://localhost/bloodbank/login.php" >LOG IN</a></li>
							 </ul>
						</div>
					<?php }


		?>
		
		
	</div>
	
	
	
				
		</div>			
	</div>
</section>
	

<header class="navbar">
<div class="container10">
	<div class="row  ">
	<div class="col-md-3">	
		 <img src="footerimg.png" alt="bb" class="img-fluid">
		</div>
		
		<div class="col-md-9 menu">	
			<ul>
			
			  <li><a href="http://localhost/bloodbank/tips.php" >Blog</a></li> 
			  <li><a href="http://localhost/bloodbank/contact.php">Contact</a></li> 
			  <li><a href="http://localhost/bloodbank/REQUEST.php" >Request Blood</a></li>
			    <li><a href="http://localhost/bloodbank/about.php">About</a></li>
			  <li><a  href="http://localhost/bloodbank/bloodbank.php">Home</a></li>
			</ul>
		</div>
		<?php

if(isset( $_SESSION['login_user'])){?>
	
	<div class="col-md- ">
		<ul style="display:inline-block;">
			<li><?php echo"Hello ".$_SESSION['login_user']."<br><br>";?></li>
			<li><a href="http://localhost/bloodbank/logout.php" >Logout</a></li>
		</ul>
		 
	</div>
	 
			
<?php }


?>
		
		
	</div>	
</div>
</header>









	
<section class="lg"  style="padding-top: 50px;">

<div class="container">
	<div class="row">
		<div class="col-md-6" style="margin-left:300px;">
		<div class="shadow-lg p-5 mb-5 bg-white rounded" >
			
			<form action="" method="post" class="search" >
				<div class="row">
					<div class="col-md-12">
					<center><h3>LOG-IN</h3></center>
					</div>
				</div>
		<br>
		
<div class="row">
				<div class="col-md-12">
					<label for="username">Username:</label>
							<input type="text" name="username">
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					
							<label for="password">Password:</label>
							<input type="password" name="password" >
				</div>
			</div>
			
		
			
			
				<br>
			
			<div class="row">
				<div class="col-md-12">
					<center><input type="submit" name="submit" value="Submit"></center>
				
				</div>
			</div>
			<br>
			<div class="row">
				<div class="col-md-12">
					<a href="http://localhost/bloodbank/register.php">If not registered,Register here!</a>
				</div>
			</div>
		
		
		</form>
		</div>
		</div>
	</div>
</div>
</section>	

<section class="footer">
<div class="container ">	
<div class="row">
	<div class="col-md-5">
	 <img src="footerimg.png" alt="bb" class="img-fluid">
	</div>
	<div class="col-md-7">
	<p>This Portal is developed for helping those who need blood in emergency conditions. So its our request to register as much as posiible so that we can find the needed blood group</p>
	</div>
</div>			
</div>
</section>
</body>
</html>
