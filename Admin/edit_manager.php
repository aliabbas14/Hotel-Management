<?php
session_start();

if(!isset($_SESSION['A_login']))
{
	header('location:admin_login.php');
}
?>
<!doctype html>
<html lang="en" class="no-js">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<meta name="theme-color" content="#3e454c">
	<title>Edit Manager Details</title>
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/dataTables.bootstrap.min.css">
	<link rel="stylesheet" href="css/bootstrap-social.css">
	<link rel="stylesheet" href="css/bootstrap-select.css">
	<link rel="stylesheet" href="css/fileinput.min.css">
	<link rel="stylesheet" href="css/awesome-bootstrap-checkbox.css">
	<link rel="stylesheet" href="css/style.css">
<script type="text/javascript" src="js/jquery-1.11.3-jquery.min.js"></script>
<script type="text/javascript" src="js/validation.min.js"></script>
<style type="text/css">
	.scroll{overflow: scroll;}
</style>
</head>
<body>
	
<?php
	$manager_id=$_GET['id'];
	
	include('config.php');
		
	

	$result=mysqli_query($conn,"SELECT * FROM manager_details where manager_id='$manager_id'");
	$row=mysqli_fetch_array($result); 
	
		
	?>



	<?php
	if(isset($_POST['update']))
	{
		$manager_id=$_POST['manager_id'];
		 //echo "<script type='text/javascript'>alert('$room_no')</script>";
		$name=$_POST['name'];
$hotel_id=$_POST['hotel_id'];
$city=$_POST['city'];
$email=$_POST['email'];
$phone=$_POST['phone'];


$address=$_POST['address'];
$username=$_POST['username'];


		include('config.php');
	$sql =" UPDATE `manager_details` SET `name` = '$name',`hotel_id` = '$hotel_id',`city` = '$city',`email` = '$email',`phone` = '$phone',`address` = '$address',`username`='$username' WHERE `manager_details`.`manager_id` = '$manager_id'";


		echo "<script type='text/javascript'>alert('$sql')</script>";
		
		$result2=mysqli_query($conn,$sql);


		if($result2)
		{
						echo "<script>alert('Data updated...')</script>";

			header('location:manage_manager.php');
		}
		else
		{
			echo "<script>alert('Update not done...')</script>";
		}

		//echo "<script type='text/javascript'>window.location.href = 'edit_rooms.php?id='+room_value;</script>";
	}
?>	

	
	




	<?php include('header.php');?>
	<div class="ts-main-content">
		<?php include('sidebar.php');?>
		<div class="content-wrapper">
			<div class="container-fluid">

				<div class="row">
					<div class="col-md-12">
					
						<h2 class="page-title">Edit manager Details </h2>
	
						<div class="row">
							<div class="col-md-12">
								<div class="panel panel-default">
									<div class="panel-heading">Edit manager Details</div>
									<div class="scroll">
									<div class="panel-body">
										<form method="post" class="form-horizontal" enctype="multipart/form-data">
												
						<div class="hr-dashed"></div>
						
						
						<div class="form-group">


						</div>
						 <div class="form-group">
				<label class="col-sm-2 control-label">manager-id </label>
		<div class="col-sm-8">
	<input type="text" class="form-control" name="manager_id" value="<?php echo $row['manager_id'];?> ">
	
						 </div>
						</div>


<div class="form-group">
				<label class="col-sm-2 control-label">Name</label>
		<div class="col-sm-8">
	<input type="text" class="form-control" name="name"  value="<?php echo $row['name'];?> ">
	
</div>
</div>
						 <div class="form-group">
				<label class="col-sm-2 control-label">Hotel-id </label>
		<div class="col-sm-8">
	<input type="text" class="form-control" name="hotel_id"  value="<?php echo $row['hotel_id'];?> ">
	
	 </div>
	</div>		
								
						
<div class="form-group">
				<label class="col-sm-2 control-label">City</label>
		<div class="col-sm-8">
	<input type="text" class="form-control" name="city"  value="<?php echo $row['city'];?> ">
	
</div>
</div>

<div class="form-group">
				<label class="col-sm-2 control-label">E-mail</label>
		<div class="col-sm-8">
	<input type="text" class="form-control" name="email"  value="<?php echo $row['email'];?> ">
	
</div>
</div>
<div class="form-group">
				<label class="col-sm-2 control-label">Phone</label>
		<div class="col-sm-8">
	<input type="text" class="form-control" name="phone" value="<?php echo $row['phone'];?> ">
	
</div>
</div>
<div class="form-group">
				<label class="col-sm-2 control-label">Address</label>
		<div class="col-sm-8">
	<input type="text" class="form-control" name="address"   value="<?php echo $row['address'];?> ">
	
</div>
</div>

<div class="form-group">
				<label class="col-sm-2 control-label">username</label>
		<div class="col-sm-8">
	<input type="text" class="form-control" name="username" value="<?php echo $row['username'];?> ">
	
</div>
</div>


											
											<div class="col-sm-8 col-sm-offset-2">
													
													<input class="btn btn-primary"  name="update" type="submit" name="submit" value="Update Manager Details ">
												</div>
											</div>

										</form>
								</div>
								</div>
							</div>
							</div>
							</div>
						</div>
					</div>
				</div> 
			</div>
		</div>
	</div>
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap-select.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.dataTables.min.js"></script>
	<script src="js/dataTables.bootstrap.min.js"></script>
	<script src="js/Chart.min.js"></script>
	<script src="js/fileinput.js"></script>
	<script src="js/chartData.js"></script>
	<script src="js/main.js"></script>

</script>
</body>

</html>
