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
	<div class="row">
	
		<div class="col-md-4">	
			<img src="footerimg.png" alt="bb" class="img-fluid">
		</div>
		
		<div class="col-md-8 menu">	
			<ul>
			  <li><a href="http://localhost/bloodbank/tips.php" >Blog</a></li> 
			  <li><a href="http://localhost/bloodbank/contact.php">Contact</a></li> 
			  <li><a href="http://localhost/bloodbank/REQUEST.php" >Request Blood</a></li>
			    <li><a  href="http://localhost/bloodbank/about.php">About</a></li>
			  <li><a  href="http://localhost/bloodbank/bloodbank.php">Home</a></li>
			</ul>
		</div>
		
	</div>
	</div>
</header>

<section class="">
	<div class="container mapabout">
	<div class="shadow-lg p-3 mb-1 bg-white rounded">
	<p style="font-size: 20px;"><b>Every 3 seconds in the world, there is a someone who urgently requires your blood!</b></p>
	<p>We help those who like to help others. A Non-Profit Organisation based in the small town of Laxmangarh, Rajasthan, our objective is to help 
	atleast one out of the many people who struggle everyday due to blood deficiency issues. </p>
	<p> Help us in the great cause and be a part of the blood donating community.</p>
	</div>
	</div>
</section>
	
<section>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12" style="margin-bottom:20px;" >
			<h3><b><center>OUR LOCATION</center></b></h3>
			
			<center><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3529.252356841529!2d75.03384571490363!3d27.802002082752793!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x396cab0999c02435%3A0x6beb28aded79e5e7!2sMody%20University!5e0!3m2!1sen!2sin!4v1573536686655!5m2!1sen!2sin" 
				width="900" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe></center>
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
