<?php
  	include_once("db_connect.php");
	session_start();

	/*bg options*/
	$sql="select * from bloodgroups";
	$bloodgroup = array();
	$query = mysqli_query($conn,$sql);
	while($row = mysqli_fetch_assoc($query))
	{
		$bloodgroup[] = $row;
	}
	
		/*place options*/
	$sql1="select * from places";
	$places = array();
	$query = mysqli_query($conn,$sql1);
	while($row = mysqli_fetch_assoc($query))
	{
		$places[] = $row;
	}


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
	<div class="row">
		<div class="col-md-6">
		<div class="shadow-lg p-3 mb-5 bg-white rounded">
			<form action="" method="post" >
				<div class="row">
					<div class="col-md-6">
					<h3>SEARCH FOR DONORS</h3>
					</div>
				</div>
		
		

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
					
					<input type="submit" name="btn"  ></input>
				
				</div>
			</div>
		
		
		</form>
		</div>
		</div>
		
		<div class="col-md-6">
		<div class="shadow-lg p-3 mb-5 bg-white rounded">
			<form action="" method="post" >
				<div class="row">
					<div class="col-md-6">
					<h3>SEARCH FOR RECIEVER</h3>
					</div>
				</div>
		
		

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
					
					<input type="submit" name="btn"  ></input>
				
				</div>
			</div>
		
		
		</form>
		</div>
		</div>
    </div>
</div>	

</section>

<div class="container">
<div class="row">
		<div class="col-md-6 col-sm-12">
		<?php
		  
			if(isset($_POST['btn'])){
				 
				$group = mysqli_real_escape_string($conn,$_POST['bgroup']);
				$place = mysqli_real_escape_string($conn,$_POST['place']);
			 
				$sql = "SELECT * FROM register WHERE bloodgroup = '$group' and places = '$place'";
					
				$result=mysqli_query($conn,$sql);
		?>
			<table class="table table-hover table-bordered shadow-lg p-3 mb-5 bg-white rounded">
			 <caption style="caption-side: top;"><b>LIST FOR DONORS:</b></caption>
					<thead>
						<tr>
							<th>NAME</th>
							<th>BLOODGROUP</th>
							<th>CONTACT</th>
							<th>PLACE</th>
						</tr>              
					</thead>
					<tbody>
						
						  <?php
							
							
							   while($row = mysqli_fetch_assoc($result))
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
										  
										  <td><?php echo $row['mobile_no']; ?></td> 
										  
													 <?php
													$place1 = $row['places'];
													$sql2 = "SELECT * FROM places WHERE place_id = '$place1'";
													$run1 = mysqli_query($conn,$sql2);
													$data1 = mysqli_fetch_assoc($run1);
												  ?>
											 <td><?php echo $data1['place_name']; ?></td>
									</tr>
						  <?php
								}
										

							?>
										
										
						
					</tbody>
			   </table>
		<?php
			
			 }
		?>
		</div>


		<div class="col-md-6 col-sm-12">
		<?php
		  
			if(isset($_POST['btn'])){
				 
				$group = mysqli_real_escape_string($conn,$_POST['bgroup']);
				$place = mysqli_real_escape_string($conn,$_POST['place']);
			 
				$sql = "SELECT * FROM request WHERE bloodgroup = '$group' and place = '$place'";
					
				$result=mysqli_query($conn,$sql);
		?>
			<table class="table table-hover table-bordered shadow-lg p-3 mb-5 bg-white rounded">
				 <caption style="caption-side: top;"><b>LIST FOR RECIEVERS:</b></caption>
				 <thead>
						<tr>
							<th>NAME</th>
							<th>BLOODGROUP</th>
							<th>CONTACT</th>
							<th>PLACE</th>
						</tr>              
					</thead>
					<tbody>
						
						  <?php
							
							
							   while($row = mysqli_fetch_assoc($result))
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
										  
													 <?php
													$place1 = $row['place'];
													$sql2 = "SELECT * FROM places WHERE place_id = '$place1'";
													$run1 = mysqli_query($conn,$sql2);
													$data1 = mysqli_fetch_assoc($run1);
												  ?>
											 <td><?php echo $data1['place_name']; ?></td>
									</tr>
						  <?php
								}
										

							?>
										
										
						
					</tbody>
			   </table>
		<?php
			
			 }
		?>
		</div>

</div>
</div>
<hr>	
	<section class="ubr">

	<div class="row">
				<div class="col-md-12">
					
						<div class="bh1">
							<h2>URGENT BLOOD REQUIRED</h2>
						</div>
				
				</div>
			</div>
			
			
	 <div class="container table-wrapper-scroll-y my-custom-scrollbar">	 
     <table class="table table-bordered table-striped mb-0">
			<thead>
				<tr>
					<th>NAME</th>
					<th>BLOODGROUP</th>
					<th>CONTACT</th>
					
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
			
					<div class="col-md-4 ">
						<div class="sec2div ">
								
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
					
					<div class="col-md-4 ">
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
