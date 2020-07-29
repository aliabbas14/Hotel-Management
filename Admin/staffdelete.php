<?php  
	if(isset($_GET['del']))
{
	$staff_id=$_GET['del'];
	
	include('config.php');
	$date=date('Y-m-d');
	$query="update staff_details set reliving_date='".$date."' where staff_id=".$staff_id;
	$result=mysqli_query($conn,$query);
      
}
if($result==1)
	{
		echo "<script>alert('deleted');</script>";
		header('Location:manage_staff.php');
	}

?>