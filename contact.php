<?php
  	include_once("db_connect.php");
	session_start();

	


if (!$conn)
{ die('Could not connect: ' . mysqli_error());
 }
 
	 $sql9 = "SELECT * FROM request ";
	 $result12=mysqli_query($conn,$sql9);
	 
?>
     
      <link rel="stylesheet" type="text/css" href="searchsec10.css">
	   <link rel="stylesheet" type="text/css" href="scroll.css">
  
</head>
<body class="aboutbody">
<?php include("header110.php"); ?>
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

<?php include("footer.php"); ?>

</body>
</html>
