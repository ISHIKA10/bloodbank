<?php
	include_once("db_connect.php");
	session_start();
	$user = $_SESSION['login_user'];
	if(isset($user)){
	}
	else{
		header("location:login.php");
	}

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
		
		$name=mysqli_real_escape_string($conn,$_POST['name']);
		$bg=mysqli_real_escape_string($conn,$_POST['bloodgroup']);
			$place=mysqli_real_escape_string($conn,$_POST['places']);
	  $contact=mysqli_real_escape_string($conn,$_POST['contact']);
	
		
		$sql="INSERT INTO request(name,place,bloodgroup,contact) 
		VALUES('$name','$place','$bg',$contact)";
		$result=mysqli_query($conn,$sql);
		print_r($result);
		
	}
	
	

?>
<!DOCTYPE html>
<html>
<head>
  <title>blood bank REQUEST</title>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
   <link rel="stylesheet" type="text/css" href="REQUESTSTYLE.css">
   
  
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
		
		<div class="col-md-7 menu">	
			<ul>
			
			  <li><a href="http://localhost/bloodbank/tips.php" >Blog</a></li> 
			  <li><a href="http://localhost/bloodbank/contact.php">Contact</a></li> 
			  <li><a href="http://localhost/bloodbank/REQUEST.php" >Request Blood</a></li>
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
else{?>

	<div class="col-md-2">	
		 <a href="http://localhost/bloodbank/login.php" target="_blank">LOG IN.</a>
	</div>
<?php }


?>
		
		
	</div>	
</div>
</header>

<section class="xyz">
<div class="container1">
<div class="head">
<h3 >Request Blood </h3>
</div>

<div class="row">
<div class="col-md-6">
  <form action="REQUEST.php" method="post">
    <label for="fname">Name:</label>
    <input type="text" name="name" placeholder="Your name.." required>

    <label for="bloodgroup">Blood Group Id:</label>
  <select name="bloodgroup" required>
<?php 
foreach($bloodgroup as $val)
{
	echo "<option value='".$val['bg_id']."'>".$val['bloodgroup']."</option>";
}
?>
</select>

    <label for="place">Place Id:</label>
				<select name="places">
								<?php 
								foreach($places as $val)
								{
									echo "<option value='".$val['place_id']."'>".$val['place_name']."</option>";
								}
								?>
						</select>
    <label for="contact">Contact:</label>
    <input type="text" name="contact" placeholder="Your no.." required>

    <input type="submit" name="submit">
  </form>
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
