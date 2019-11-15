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




   <link rel="stylesheet" type="text/css" href="registerstyle111.css">
   
  

<?php include("header110.php"); ?>

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
<?php include("footer.php"); ?>
</body>
</html>
