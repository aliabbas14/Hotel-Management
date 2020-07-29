
<?php
error_reporting(0);
session_start();

if(!isset($_SESSION['A_login']))
	{
		header('location:admin_login.php');
	}
	$admin=$_SESSION['A_login'];
	include('config.php');
	$qry="select * from admin_details where username='$admin'";
	$result=mysqli_query($conn,$qry);
	while ($row=mysqli_fetch_array($result))
	 {
	 	$adminid=$row['admin_id'];
		$name=$row['name'];
		$hi=$row['hotel_id'];
		$city=$row['city'];
		$email=$row['email'];
		$phone=$row['phone'];
		$address=$row['address'];
		
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
	<title>My Profile</title>
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/dataTables.bootstrap.min.css">>
	<link rel="stylesheet" href="css/bootstrap-social.css">
	<link rel="stylesheet" href="css/bootstrap-select.css">
	<link rel="stylesheet" href="css/fileinput.min.css">
	<link rel="stylesheet" href="css/awesome-bootstrap-checkbox.css">
	<link rel="stylesheet" href="css/style.css">
<script type="text/javascript" src="js/jquery-1.11.3-jquery.min.js"></script>
<script type="text/javascript" src="js/validation.min.js"></script>

<style type="text/css">
	.scroll{overflow: scroll;height: 500px;}
</style>
</head>
<body>

	
	<?php include('header.php');?>
	<div class="ts-main-content">
		<?php include('sidebar.php');?>
		<div class="content-wrapper">
			<div class="container-fluid">

				<div class="row">
					<div class="col-md-12">
					
						<h2 class="page-title">MY Profile</h2>
	
						<div class="row">
							<div class="col-md-12">
								<div class="panel panel-default">
									<div class="panel-heading">Profile</div>
									<div class="panel-body">
										<form method="post" class="form-horizontal" enctype="multipart/form-data">
												
						<div class="hr-dashed"></div>
						
						
						<div class="form-group">


						</div>
						
						<div class="scroll">
							 <div class="form-group">
								<label class="col-sm-2 control-label">Admin_id</label>
								<div class="col-sm-8">
									<input type="text" class="form-control" name="adminid" value="<?php echo $adminid;?>" disabled>
									<span class="help-block m-b-none" style="color: red;">
													admin_id can't be changed.</span>
						 		</div>
						</div>	
						
						
						
							 <div class="form-group">
								<label class="col-sm-2 control-label">Name </label>
								<div class="col-sm-8">
									<input type="text" class="form-control" name="aname" value="<?php echo $name;?>" >
						 		</div>
						</div>	


						
							 <div class="form-group">
								<label class="col-sm-2 control-label">Hotel_id </label>
								<div class="col-sm-8">
									<input type="text" class="form-control" name="hotelid" value="<?php echo $hi;?>" >
									
						 		</div>
						</div>	


						
							 <div class="form-group">
								<label class="col-sm-2 control-label">City</label>
								<div class="col-sm-8">
									<input type="text" class="form-control" name="city"  value="<?php echo $city;?>" >
									</div>
							</div>	

							 <div class="form-group">
								<label class="col-sm-2 control-label">Email</label>
								<div class="col-sm-8">
									<input type="email" class="form-control" name="email" value="<?php echo $email;?>" >
									</div>
							</div>	

							 <div class="form-group">
								<label class="col-sm-2 control-label">Phone No.</label>
								<div class="col-sm-8">
								<input type="tel" class="form-control" name="phone"  value="<?php echo $phone;?>" >
									</div>
							</div>	

							  <div class="form-group">
								<label class="col-sm-2 control-label">Address</label>
								<div class="col-sm-8">
									<textarea rows="auto" cols="auto" class="form-control" name="address"><?php echo $address;?></textarea>  
									</div>
							</div>	

							 <div class="form-group">
								<label class="col-sm-2 control-label">Username</label>
								<div class="col-sm-8">
								<input type="email" class="form-control" name="username"  value="<?php echo $admin;?>" >
									</div>
							</div>	

							



					
											<br>
											<div class="col-sm-8 col-sm-offset-2">
													
													<input class="btn btn-primary"  name="update" type="submit" name="submit" value="Update Profile ">
													<button class="btn btn-default" style="width: 120px;"><a href="dashboard.php">Cancel</a></button>
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
<?php 
	if(isset($_POST['update'])){

		$a=$_POST['username'];
		
		echo"<script>alert('$a')</script>";
		$name=$_POST['aname'];
		$hi=$_POST['hotelid'];
		$city=$_POST['city'];
		$email=$_POST['email'];
		$phone=$_POST['phone'];
		$address=$_POST['address'];
		
	
	include 'config.php';  	
	$sql =" UPDATE `admin_details` SET `name` = '$name',`hotel_id` = '$hi',`city` = '$city',`email` = '$email',`phone` = '$phone',`address` = '$address' WHERE `admin_details`.`username` = '$a'";
	$result=mysqli_query($conn,$sql);
	 
	 if($result==1)
	 {
	 	echo"<script>alert('Profile updated successfully.')</script>";
	 }else{
	 	echo"<script>alert('Profile not updated successfully.')</script>";}
 
}
?>