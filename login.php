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


   <link rel="stylesheet" type="text/css" href="loginstyle102.css">
   
<?php include("header110.php"); ?>

	
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

<?php include("footer.php"); ?>
</body>
</html>
