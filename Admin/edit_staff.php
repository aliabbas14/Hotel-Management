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
	<title>Edit Staff Details</title>
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
	$staff_id=$_GET['id'];
	
	include('config.php');
		
	

	$result=mysqli_query($conn,"SELECT * FROM staff_details where staff_id='$staff_id'");
	$row=mysqli_fetch_array($result); 
	
		
	?>



	<?php
	if(isset($_POST['update']))
	{
		 
		
$si=$_GET['id'];
$sname=$_POST['name'];
$salary=$_POST['salary'];
$se=$_POST['email'];
$sp=$_POST['phon'];
$st=$_POST['staff_type'];
$sc=$_POST['city'];
$sa=$_POST['address'];


		include('config.php');
	$sql ="UPDATE `staff_details` SET `staff_type` = '$st',`name` = '$sname',`salary` = '$salary',`email` = '$se' ,`phone` = '$sp',`city` = '$sc',`address` = '$sa' WHERE `staff_details`.`staff_id` = '$si' ";		
		$result2=mysqli_query($conn,$sql);


		if($result2)
		{
			echo "<script>alert('Update  done...')</script>";
			header('location:manage_staff.php');
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
					
						<h2 class="page-title">Edit Staff Details </h2>
	
						<div class="row">
							<div class="col-md-12">
								<div class="panel panel-default">
									<div class="panel-heading">Edit Staff Details</div>
									<div class="scroll">
									<div class="panel-body">
										<form method="post" class="form-horizontal" enctype="multipart/form-data">
												
						<div class="hr-dashed"></div>
						
						
						<div class="form-group">


						</div>
						 <div class="form-group">
				<label class="col-sm-2 control-label">staff-id </label>
		<div class="col-sm-8">
	<input type="text" class="form-control" name="staff_id" id="rmno" value="<?php echo $row['staff_id'];?> " disabled>
	<span class="help-block m-b-none" style="color: red;">
													staff-id can't be changed.</span>
	
						 </div>
						</div>	
						<div class="form-group">


						</div>
						 <div class="form-group">
				<label class="col-sm-2 control-label">Hotel-id </label>
		<div class="col-sm-8">
	<input type="text" class="form-control" name="hotel_id"  value="<?php echo $row['hotel_id'];?> " disabled>
	<span class="help-block m-b-none" style="color: red;">
													hotel-id can't be changed.</span>
	
	 </div>
	</div>		
								
						<div class="form-group">
						<label class="col-sm-2 control-label">Staff-Type</label>
					<div class="col-sm-8">
					<select name="staff_type"  class="form-control">
						<!--<option><?php echo $row["type"];?></option>	-->
						<?php
							$selected=$row["type"];
						$result1=mysqli_query($conn,"SELECT * From staff_type");
						while($row1=mysqli_fetch_array($result1))
						{
							$values=$row1['type'];
						?>
						<option value="<?php echo $row1['type']; ?>" <?php if($values==$selected){echo "selected";} ?>><?php echo $row1['type']; ?></option> 
						<?php
						}
						?>
				</select>
					</div>
					</div>

<div class="form-group">
				<label class="col-sm-2 control-label">Name</label>
		<div class="col-sm-8">
	<input type="text" class="form-control" name="name"  value="<?php echo $row['name'];?> ">
	
</div>
</div>
<div class="form-group">
				<label class="col-sm-2 control-label">Gender</label>
		<div class="col-sm-8">
	<input type="text" class="form-control" name="gender"  value="<?php echo $row['gender'];?> " disabled>
	<span class="help-block m-b-none" style="color: red;">
													Gender can't be changed.</span>
	
</div>
</div>

<div class="form-group">
				<label class="col-sm-2 control-label">Joining-Date</label>
		<div class="col-sm-8">
	<input type="text" class="form-control" name="joining_date" value="<?php echo $row['joining_date'];?> " disabled>
	<span class="help-block m-b-none" style="color: red;">
													Joining-date can't be changed.</span>
	
</div>
</div>
<div class="form-group">
				<label class="col-sm-2 control-label">Reliving-Date</label>
		<div class="col-sm-8">
	<input type="text" class="form-control" name="reliving_date"  value="<?php echo $row['reliving_date'];?> " disabled>
	<span class="help-block m-b-none" style="color: red;">
													Reliving-date can't be changed.</span>
	
</div>
</div>
<div class="form-group">
				<label class="col-sm-2 control-label">Salary</label>
		<div class="col-sm-8">
	<input type="text" class="form-control" name="salary"  value="<?php echo $row['salary'];?> ">
	
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
	<input type="text" class="form-control" name="phon" value="<?php echo $row['phone'];?> ">
	
</div>
</div>

<div class="form-group">
				<label class="col-sm-2 control-label">City</label>
		<div class="col-sm-8">
	<input type="text" class="form-control" name="city"  value="<?php echo $row['city'];?> ">
	
</div>
</div>
<div class="form-group">
				<label class="col-sm-2 control-label">Address</label>
		<div class="col-sm-8">
	<input type="text" class="form-control" name="address"   value="<?php echo $row['address'];?> ">
	
</div>
</div>


											
											<div class="col-sm-8 col-sm-offset-2">
													
													<input class="btn btn-primary"  name="update" type="submit" name="submit" value="Update Room Details ">
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
<script type="text/javascript">
	var room_value='<?php echo $room_no; ?>';
	//window.alert(room_value);
</script>
