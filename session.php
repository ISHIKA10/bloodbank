<?php
 session_start();
$user = $_SESSION['login_user'];
if(isset($user)){
	echo"Hello ".$user."<br><br>"; 
	echo"<a href='logout.php'>Logout</a>";
}
else{
	header("location:login.php");
}
      
    
?>
