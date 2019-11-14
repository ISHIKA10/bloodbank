<!DOCTYPE html>
<html lang="en">
<head>
  <title>blood bank blog</title>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
   <link rel="stylesheet" type="text/css" href="bb112.css">
   <style>
    h4{
        color:red;
    }
</style>
  
</head>
<body>

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
			  <li><a href="http://localhost/bloodbank/contact.php">Contact</a></li> 
			  <li><a href="http://localhost/bloodbank/REQUEST.php" >Request Blood</a></li>
			    <li><a  href="http://localhost/bloodbank/about.php">About</a></li>
			  <li><a  href="http://localhost/bloodbank/bloodbank.php">Home</a></li>
			</ul>
		</div>
		
	</div>
	</div>
</header>
<div class="container">
    <h2 style="text-align:center;color:orangered;margin-top: 10px;">DONORS GUIDELINES</h2>
    <h4>Eligibilities</h4>
    <ul>
        <li>Any donor, who is healthy, fit and not suffering from any transmittable diseases can donate blood.</li>
        <li>Donor must be 18 -60 years age and having a minimum weight of 50Kg can donate blood.</li>
        <li>Donor’s Hemoglobin level is 12.5% minimum.</li>
        <li>A donor can again donate blood after 3 months of your last donation of blood.</li>
        <li>Pulse rate must be between 50 to 100mm without any irregularities.</li>
        <li>BP Diastolic 50 to 100 mm Hg and Systolic 100 to 180 mm Hg.</li>
        <li>Body temperature should be normal and oral temperature should not exceed 37.5 degree Celsius.</li>
    </ul>

    <h4>Non-Eligibilities</h4>
    <ul>

        <li>Donors should not suffer from Cardiac arrest, hypertension, kidney alignments, epilepsy or diabetics.</li>
        <li>Ladies with a bad miscarriage should avoid donating blood for the next 6 months.</li>
        <li>If donor already donated blood or have been treated for malaria within the last three months.</li>
        <li>If donor undergone any immunization within the past one month.</li>
        <li>If donor consumed alcohol within the last 24 hours.</li>
        <li>If you are HIV+.</li>
        <li> If donor had a dental work for next 24 hours and wait for one month if donor had a major dental procedure.</li>

    </ul>


    <h4>Preparation</h4>
    <ul>

        <li>Prepare yourself by having enough fruit juice and water in the night and morning before you donate blood.</li>
        <li>Avoid donating blood in empty stomach. Eat three hours before you donate blood. Avoid fatty foods. Eat food which is rich in iron such as whole grains, eggs, and beef, and spinach, leafy vegetables, orange and    citrus.</li>
        <li>Don’t consume Alcohol or caffeine beverages before donating blood.</li>
        <li>Avoid donating blood for 6 months if you had any major surgery.</li>

    </ul>
    <h4>Post Donation Care</h4>
    <ul>
        <li>Have some rest 5 to 20 minutes after donation. Do not drive after donation of blood.</li>
        <li>Have some snacks and juice with high sugar content which will help to rejuvenate the blood sugar back    up.</li>
        <li> Have a good meal with high protein content such as Chicken, Beef etc,.</li>
        <li>Do not consume Alcohol for 8 hours after donation of blood.</li>
        <li>Avoid going for a heavy body works such as gym, dancing, running etc at least for next one day.</li>

    </ul>
    <h4>How to Relieve</h4>
    <ul style="margin-bottom:20px;">
        <li>
            While you are being needled to take blood, relax to the maximum, have a deep breath. There will be little pain or no pain. Try to distract yourself from the process by having a chewing gum. Listen to some music or watch some entertaining TV program.
        </li>

    </ul>
</div>
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