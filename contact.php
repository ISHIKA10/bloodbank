<?php
  	include_once("db_connect.php");
	session_start();

	


if (!$conn)
{ die('Could not connect: ' . mysqli_error());
 }
 
	 $sql9 = "SELECT * FROM request ";
	 $result12=mysqli_query($conn,$sql9);
	 
?>


 
<!DOCTYPE html>
<html lang="en">
<head>
  <title>blood bank website</title>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
   
    
	  
      <link rel="stylesheet" type="text/css" href="searchsec10.css">
	   <link rel="stylesheet" type="text/css" href="scroll.css">

   <link rel="stylesheet" type="text/css" href="bb112.css">
  
</head>
<body class="aboutbody">

<section class="topmostbar">
	<div class="container ">	
		<div class="row ">
			<div class="col-md-6">
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
	
		<div class="col-md-4">	
			<img src="footerimg.png" alt="bb" class="img-fluid">
		</div>
		
		<div class="col-md-8 menu">	
			<ul>
			  <li><a href="http://localhost/bloodbank/tips.php" >Blog</a></li> 
			  <li><a href="#">Contact</a></li> 
			  <li><a href="http://localhost/bloodbank/REQUEST.php" >Request Blood</a></li>
			    <li><a  href="http://localhost/bloodbank/about.php">About</a></li>
			  <li><a  href="http://localhost/bloodbank/bloodbank.php">Home</a></li>
			</ul>
		</div>
		
	</div>
	</div>
</header>
<br>

<section class="">
	<div class="container contactpage">
	<div class="shadow-lg p-3 mb-1 bg-white rounded">
	<p style="font-size: 20px;"><b>We’d love to hear from you!</b></p>
	<p>Whether you have a question about your first blood donation, check availability of our location centers, or require urgent blood, 
	we are ready to answer all your questions.</p>
	</div>
	</div>
</section>
	
<section class="searchsec">

<div class="container">
	<div class="row">
		<div class="col-md-6" style="margin-left:300px;">
		<div class="shadow-lg p-5 mb-5 bg-white rounded" >
			
			<form action="" method="post" class="search" >
				<div class="row">
					<div class="col-md-12">
					<h3>Let us know what you require!</h3>
					</div>
				</div>
		<br>
		
<div class="row">
				<div class="col-md-12">
					<label>Name:</label><br>
					<input type="text" name="" placeholder="">
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<label>E-mail ID:</label><br>
					<input type="text" name="" placeholder="">
				</div>
			</div>
			
			<div class="row">
				<div class="col-md-12">
					<label>Contact:</label><br>
					<input type="text" name="" placeholder="">					
				</div>
			</div>
		
			
			<div class="row">
					<div class="col-md-12">
						<label for="query">Your Query:</label><br>
						<textarea type="text" name="" placeholder=""></textarea>
					</div>
			</div>
				<br>
			
			<div class="row">
				<div class="col-md-12">
					
					<center><input type="submit" name="btn"  ></input></center>
				
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
	<p>This portal is developed for helping those who need blood in emergency conditions. Hence, it is our humble request to register as much as possible, donate
	blood and be a part of a great cause by saving a life.</p>
	</div>
</div>			
</div>
</section>

</body>
</html>
