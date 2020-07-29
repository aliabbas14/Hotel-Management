	
<?php  
	if(isset($_GET['del']))
{
	$manager_id=$_GET['del'];
	
	include('config.php');
	$query="delete from manager_details where manager_id=".$manager_id;
	$result=mysqli_query($conn,$query);
      if($result==1)
	{
		echo"<script>alert('Data deleted successfully')</script>";
		header('location:manage_manager.php');
	}
	else
		{echo"<script>alert('Data not deleted successfully')</script>";}

}

?>
