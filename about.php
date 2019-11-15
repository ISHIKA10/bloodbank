<?php
  	include_once("db_connect.php");
	session_start();

	


if (!$conn)
{ die('Could not connect: ' . mysqli_error());
 }
 
	 $sql9 = "SELECT * FROM request ";
	 $result12=mysqli_query($conn,$sql9);
	 
?>


 

<body class="aboutbody">

<?php include("header110.php"); ?>

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


	


<?php include("footer.php"); ?>

</body>
</html>
