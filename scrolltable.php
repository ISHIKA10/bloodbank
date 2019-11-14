<?php
  	include_once("db_connect.php");
	session_start();

	



	 
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
   <link rel="stylesheet" type="text/css" href="bb10.css">
      <link rel="stylesheet" type="text/css" href="searchsec.css">
    <link rel="stylesheet" type="text/css" href="scroll.css">
  
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
			  <li><a href="#">Contact</a></li> 
			  <li><a href="http://localhost/bloodbank/REQUEST.php" >Request Blood</a></li>
			    <li><a  href="#">About</a></li>
			  <li><a  href="http://localhost/bloodbank/bloodbank.php">Home</a></li>
			</ul>
		</div>
		
	</div>
	</div>
</header>


	


<section class="sec1">
<div class="container">
<div class="row">
	<div class="col-md-7 ">
	<h5>The Blood you donate gives someone another chance at Life.</h5>
	<h2>GIVE THE GIFT OF LIFE</h2>
	<h1><b>DONATE BLOOD</b></h1>
	</div>
	<div class="col-md-5">
		 <img src="main.png" alt="bb" class="img-fluid">
	</div>
</div>
</div>
</section>

<section class="searchsec">
	<div class="containersearch">
		<form action="" method="post" >
			<div class="row">
				<div class="col-md-12">
				<h3>SEARCH FOR DONORS</h3>
				</div>
			</div>
		<hr>
	

		<div class="row">
			<div class="col-md-6">
				<label for="bloodgroup">Blood Group:</label><br>
					<select name="bgroup">
						<?php 
						foreach($bloodgroup as $val)
						{
							echo "<option value='".$val['bg_id']."'>".$val['bloodgroup']."</option>";
						}
						?>
					</select>
			</div>
			
			
		</div>
	
		
         <div class="row">
				<div class="col-md-6">
				    <label for="country">Place Id:</label><br>
					   <select name="place">
								<?php 
								foreach($places as $val)
								{
									echo "<option value='".$val['place_id']."'>".$val['place_name']."</option>";
								}
								?>
				</select>

				</div>
		    </div>
		
		<div class="row">
			<div class="col-md-12">
			    <form action="http://localhost/bloodbank/redirect.php" method="POST">
				<input type="submit" name="btn"  ></input>
				</form>
			</div>
		</div>
	
	
	</form>
</div>
</section>

	
	
	<section>
	 <div class="container table-wrapper-scroll-y my-custom-scrollbar">
			
			<div class="row">
				<div class="col-md-12">
					<h2>Urgent Blood Required</h2>
				</div>
			</div>
	 
	 
     <table class=" table table-bordered table-striped mb-0">
			<thead>
				<tr>
					<th>Name</th>
					<th>Bloodgroup</th>
					<th>Contact</th>
					
				</tr>              
			</thead>
			<tbody>
				
				  <?php
					
					   If(mysqli_num_rows($result12)>0)
					   {
							while($row=mysqli_fetch_array($result12))
							{  

								?>
								<tr>
								  <td><?php echo $row['name']; ?></td> 
								  
								   <?php
											$bg1 = $row['bloodgroup'];
											$sql1 = "SELECT * FROM bloodgroups WHERE bg_id = '$bg1'";
											$run = mysqli_query($conn,$sql1);
											$data = mysqli_fetch_assoc($run);
										  ?>
								  <td><?php echo $data['bloodgroup']; ?></td> 
								 
								  <td><?php echo $row['contact']; ?></td> 
							
								</tr>	
								<?php
								
							}
						}
					 ?>
				
			</tbody>
       </table>
    </div>
</section>
	
	
	


<section class="sec2">
	<div class="container">
	
			<div class="row">
				<div class="col-md-12">
						<div class="bh">
							<h2>DONATION PROCESS</h2>
							<h4>The donation process from the time you arrive center until the time you leave</h4>
						</div>
				
				</div>
			</div>
			
			<div class="row">
			
					<div class="col-md-4">
						<div class="sec2div">
								
									 <div class="div2">
									 <img src="pic1.jpg" alt="bb" class="img-fluid">
									 </div>
								 
								 
								 <div class="div2">
									<h3> REGISTRATION</h3>
							         <p>You need to complete a very simple registration form.
									 Which contains all required contact information to be entered  in the donation process</p>
								 </div>
						</div>
					</div>	
					
					<div class="col-md-4">
						<div class="sec2div">
								
									 <div class="div2">
									 <img src="pic2.jpg" alt="bb" class="img-fluid">
									 </div>
								
								 
								 <div class="div2">
									<h3> SCREENING</h3>
							         <p>A drop of blood from your finger will take for simple test to ensure that your blood iron levels are proper enough for donation process.</p>
								 </div>
						</div>
					</div>

					<div class="col-md-4">
						<div class="sec2div">
						
									 <div class="div2">
									 <img src="pic3.jpg" alt="bb" class="img-fluid">
									 </div>
						
								 
								 <div class="div2">
									<h3> DONATION</h3>
							         <p>After ensuring and passed screening test successfully you will be directed to a donor bed for donation. It will take only 6-10 minutes.</p>
								 </div>
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
