
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
	<title>Edit Room Details</title>
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
</head>
<body>

	<?php
	$room_no=$_GET['id'];
	
	include('config.php');
		
	

	$result=mysqli_query($conn,"SELECT * FROM rooms INNER JOIN room_type on rooms.room_type_id=room_type.room_type_id where room_no=".$room_no);
	$row=mysqli_fetch_array($result); 
	
		
	?>

	
	




	<?php include('header.php');?>
	<div class="ts-main-content">
		<?php include('sidebar.php');?>
		<div class="content-wrapper">
			<div class="container-fluid">

				<div class="row">
					<div class="col-md-12">
					
						<h2 class="page-title">Edit Room Details </h2>
	
						<div class="row">
							<div class="col-md-12">
								<div class="panel panel-default">
									<div class="panel-heading">Edit Room Details</div>
									<div class="panel-body">
										<form method="post" class="form-horizontal" enctype="multipart/form-data">
												
						<div class="hr-dashed"></div>
						
						
						<div class="form-group">


						</div>
						 <div class="form-group">
				<label class="col-sm-2 control-label">Room no </label>
		<div class="col-sm-8">
	<input type="text" class="form-control" name="rmno" id="rmno" value="<?php echo $row['room_no'];?> "disabled>
	<span class="help-block m-b-none" style="color: red;">
													Room no can't be changed.</span>
						 </div>
						</div>	
						
								
											
						
					
					<div class="form-group">
						<label class="col-sm-2 control-label">Room-Type</label>
					<div class="col-sm-8">
					<select name="room_type"  class="form-control">
						<!--<option><?php echo $row["type"];?></option>	-->
						<?php
							$selected=$row["type"];
						$result1=mysqli_query($conn,"SELECT * From room_type");
						while($row1=mysqli_fetch_array($result1))
						{
							$values=$row1['type'];
						?>
						<option value="<?php echo $row1['room_type_id']; ?>" <?php if($values==$selected){echo "selected";} ?>><?php echo $row1['type']; ?></option> 
						<?php
						}
						?>
				</select>
					</div>
					</div>
				
<div class="form-group">
				<label class="col-sm-2 control-label">Rate</label>
		<div class="col-sm-8">
	<input type="text" class="form-control" name="rmno" id="rmno" value="<?php echo $row['rate'];?> "disabled>
	<span class="help-block m-b-none" style="color:red;">
													Rate can't be changed.</span>
						 </div>
											<div class="form-group">	
						</div>
						<div class="form-group">
				<label class="col-sm-2 control-label">Room-Decription</label>
		<div class="col-sm-8">
	<input type="text" class="form-control" name="rmno" id="rmno" value="<?php echo $row['features'];?> "disabled>
	<span class="help-block m-b-none" style="color:red;">
													Room-Description can't be changed.</span>
						 </div>
											<div class="col-sm-8 col-sm-offset-2">
													
													<input class="btn btn-primary"  name="update" type="submit" name="submit" value="Update Room Details ">
													<button class="btn btn-default" style="width: 120px;"><a href="manage-rooms.php">Cancel</a></button>
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
<?php
	if(isset($_POST['update']))
	{
		$selected_room=$_POST['room_type'];
		 //echo "<script type='text/javascript'>alert('$room_no')</script>";

		 $x="update rooms set room_type_id=".$selected_room." where room_no=".$room_no;
		//echo "<script type='text/javascript'>alert('$x')</script>";
		
		$result2=mysqli_query($conn,$x);

		echo "<script type='text/javascript'>window.location.href = 'edit_rooms.php?id='+room_value;</script>";
	}
?>	