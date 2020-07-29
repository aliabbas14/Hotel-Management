<?php
session_start();
if(!isset($_SESSION['A_login']))
{
	header('location:admin_login.php');

}
?>
<?php
	if(isset($_POST['add_staff']))
	{
		
		 
		
		$stype=$_POST['staff_type'];
		$sname=$_POST['name'];
		$sgen=$_POST['gender'];
		$date=date('Y-m-d');		
		$salary=$_POST['salary'];
		$se=$_POST['email'];
		$sp=$_POST['phon'];
		
		$sc=$_POST['city'];
		$sa=$_POST['address'];

		


		include('config.php');
	$sql ="INSERT INTO `staff_details` (`staff_id`, `hotel_id`, `staff_type`, `name`, `gender`,`joining_date`, `salary`, `email`, `city`, `address`,`phone`) VALUES (NULL, '1', '$stype', '$sname', '$sgen','$date','$salary', '$se', '$sc', '$sa','$sp')";


		//echo "<script type='text/javascript'>alert('$x')</script>";
		
		$result2=mysqli_query($conn,$sql);


		if($result2==1)
		{
			header('location:manage_staff.php');
			
			
		}
		else
		{
			echo "<script>alert('Something went Wrong...')</script>";
		}

		//echo "<script type='text/javascript'>window.location.href = 'edit_rooms.php?id='+room_value;</script>";
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
	<meta name="theme-color" content="#3e454c"><br>
	<title>Add Staff</title>
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
<script type="text/javascript" src="http://code.jquery.com/jquery.min.js"></script>
<style type="text/css">
	.scroll{overflow: scroll;}
	
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
					
						<h2 class="page-title">Add Staff </h2>

						<div class="row">
							<div class="col-md-12">
								<div class="panel panel-primary">
									<div class="panel-heading">Fill all Information</div>
									<div class="scroll">
									<div class="panel-body">
			<form method="post" action="" name="addrooms" class="form-horizontal" onSubmit="return valid();">
											
										


<div class="form-group">
						<label class="col-sm-2 control-label">Staff-Type</label>
					<div class="col-sm-8">
					<select name="staff_type"  class="form-control">
						<option value="select ">Select Type </option>
						<!--<option><?php echo $row["type"];?></option>	-->
						<?php
						include('config.php');
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
	<input type="text" class="form-control" name="name" required="required">
	
</div>
</div>
<div class="form-group">
				<label class="col-sm-2 control-label">Gender</label>
		<div class="col-sm-8">
	  <input type="radio" name="gender" value="male"> Male
  <input type="radio" name="gender" value="female"> Female
	
</div>
</div>





<div class="form-group">
				<label class="col-sm-2 control-label">Salary</label>
		<div class="col-sm-8">
	<input type="text" class="form-control" name="salary" required="required">
	
</div>
</div>

<div class="form-group">
				<label class="col-sm-2 control-label">E-mail</label>
		<div class="col-sm-8">
	<input type="text" class="form-control" name="email" required="required">
	
</div>
</div>
<div class="form-group">
				<label class="col-sm-2 control-label">Phone</label>
		<div class="col-sm-8">
	<input type="text" class="form-control" name="phon" required="required">
	
</div>
</div>

<div class="form-group">
				<label class="col-sm-2 control-label">City</label>
		<div class="col-sm-8">
	<input type="text" class="form-control" name="city" required="required">
	
</div>
</div>
<div class="form-group">
				<label class="col-sm-2 control-label">Address</label>
		<div class="col-sm-8">
	<input type="text" class="form-control" name="address" required="required">
	
</div>
</div>


<div class="col-sm-6 col-sm-offset-4">
<button name="add_staff" Value="Add" class="btn btn-primary">Add Staff</button>
<button class="btn btn-default"><a href="manage_staff.php">Cancel</a></button>

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
</body>
	<script>
function checkAvailability() {

$("#loaderIcon").show();
jQuery.ajax({
url: "check_availability.php",
data:'emailid='+$("#email").val(),
type: "POST",
success:function(data){
$("#user-availability-status").html(data);
$("#loaderIcon").hide();
},
error:function ()
{
event.preventDefault();
alert('error');
}
});
}
</script>

</html>