<?php
	include_once("db_connect.php");

	$sql="select * from bloodgroups";
	$bloodgroup = array();
	$query = mysqli_query($conn,$sql);
	while($row = mysqli_fetch_assoc($query))
	{
		$bloodgroup[] = $row;
	}
	
		$sql1="select * from places";
	$places = array();
	$query = mysqli_query($conn,$sql1);
	while($row = mysqli_fetch_assoc($query))
	{
		$places[] = $row;
	}
	
	if(isset($_POST['submit'])){
   $reg=2;
		$name=mysqli_real_escape_string($conn,$_POST['name']);
		$mobile_no=mysqli_real_escape_string($conn,$_POST['mobile_no']);
		$email=mysqli_real_escape_string($conn,$_POST['email']);
		$dob=mysqli_real_escape_string($conn,$_POST['DOB']);
		
			$bg=mysqli_real_escape_string($conn,$_POST['bloodgroup']);
		$date=mysqli_real_escape_string($conn,$_POST['last_ddate']);
		
		$p1=mysqli_real_escape_string($conn,$_POST['password1']);
		$p2=mysqli_real_escape_string($conn,$_POST['password2']);
		$add=mysqli_real_escape_string($conn,$_POST['address']);
			$place=mysqli_real_escape_string($conn,$_POST['places']);
		$pincode=mysqli_real_escape_string($conn,$_POST['pincode']);
		
		
			if (!empty($p1) && !empty($name) &&  $p1 == $p2)
				{
					echo "ishika";
        $sql2="INSERT INTO register(name,mobile_no,email,DOB,bloodgroup,last_ddate,password1,password2,address,places,pincode) 
		VALUES('$name',$mobile_no,'$email','$dob','$bg','$date','$p1','$p2','$add','$place',$pincode)";
		
		
		$result=mysqli_query($conn,$sql2);
		print_r($result);
				} 
		else {
        $message = "Please check your Password/Username";
        echo  $message;
			}
		
	}
	

?>



<!DOCTYPE html>
<html>
<head>
  <title>blood bank REGISTER</title>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
   <link rel="stylesheet" type="text/css" href="registerstyle111.css">
   
  
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
	<div class="col-md-3">	
		 <img src="footerimg.png" alt="bb" class="img-fluid">
		</div>
		
		<div class="col-md-9 menu">	
			<ul>
			
			  <li><a href="http://localhost/bloodbank/tips.php" >Blog</a></li> 
			  <li><a href="http://localhost/bloodbank/contact.php">Contact</a></li> 
			  <li><a href="http://localhost/bloodbank/REQUEST.php">Request Blood</a></li>
			    <li><a  href="#">About</a></li>
			  <li><a  href="http://localhost/bloodbank/bloodbank.php">Home</a></li>
			</ul>
		</div>
		<?php

if(isset( $_SESSION['login_user'])){?>
	
	<div class="col-md-2">
		<ul style="display:inline-block;">
			<li><?php echo"Hello ".$_SESSION['login_user']."<br><br>";?></li>
			<li><a href="http://localhost/bloodbank/logout.php" target="_blank">Logout</a></li>
		</ul>
		 
	</div>
	 
			
<?php }



?>
		
		
	</div>	
</div>
</header>

<section class="registration_form aboutbody">
	<div class="shadow-lg p-5 mb-5 bg-white rounded" >
	<div class="container1">
		<form action="register.php" method="post" >
			<div class="row">
				<div class="col-md-12">
				<center><h3>REGISTER</h3></center>
				</div>
			</div>
		<hr>
		<div class="row">
			<div class="col-md-6">
				<label for="fname">Name:</label><br>
    <input type="text" name="name" placeholder="Your name.." required>
	 
				
					
			</div>
			<div class="col-md-6">
			<label for="fname">Mobile Number:</label><br>
    <input type="text"  name="mobile_no" placeholder="Your number.." required>
			</div>
		</div>
		
		<div class="row">
			<div class="col-md-6">
				<label for="email">E-mail:</label><br>
    <input type="text" name="email" placeholder="Your email.." >
			</div>
			<div class="col-md-6">
			<label for="fname">DOB:</label><br>
    <input type="date"  name="DOB" placeholder="Your DOB.." required>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6">
				<label for="bloodgroup">Blood Group:</label><br>
                   <select name="bloodgroup">
<?php 
foreach($bloodgroup as $val)
{
	echo "<option value='".$val['bg_id']."'>".$val['bloodgroup']."</option>";
}
?>
</select>
			</div>
			<div class="col-md-6">
			<label for="fname">Last Blood Donation Date:</label><br>
    <input type="date" id="fname" name="last_ddate" >
			</div>
		</div>
			
		<div class="row">
			<div class="col-md-6">
				<label for="fname">Password:</label><br>
    <input type="password"  name="password1" required >
			</div>
			<div class="col-md-6">
			<label for="fname">Confirm Password:</label><br>
    <input type="password"  name="password2"  required>
			</div>
		</div>
		
		
		
		<div class="row">
			<div class="col-md-12">
				<label for="fname">Address:</label><br>
    <textarea  name="address" placeholder="Write something.." style="height:200px" required></textarea>
			</div>
		</div>

			<div class="row">
			<div class="col-md-6">
				    <label for="country">Place Id:</label><br>
						<select name="places">
								<?php 
								foreach($places as $val)
								{
									echo "<option value='".$val['place_id']."'>".$val['place_name']."</option>";
								}
								?>
						</select>

			</div>
			<div class="col-md-6">
				<label for="fname">Pincode:</label><br>
        <input type="text"  name="pincode" required >
			</div>
		</div>
		
	<div class="row">
		<div class="col-md-12">
			<input type="submit" name="submit" style="margin-left: 45%">
		</div>
	</div>
	</form>
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
