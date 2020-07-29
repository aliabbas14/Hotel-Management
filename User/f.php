<?php
	$uid=$_GET['email'];
		$feed_about=$_GET['feedback_about'];
		$feedback=$_GET['feedback'];
		$feed_date=date('Y/m/d');	
		
		$hotel_id=1;
		

		include('conf.php');
		$qry="INSERT INTO `feedback`( `email`, `feedback`, `hotel_id`, `feed_date`, `feed_about`) VALUES ('".$uid."','".$feedback."','".$hotel_id."','".$feed_date."','".$feed_about."')";
		$result=mysqli_query($connection,$qry);
		if($result==1)
		{
			echo"<script>alert(Feedback Successfully Sent...)</script>";
		}
		else
		{
			echo"<script>alert(Something Went Wrong...)</script>";
		}
	
?>