<?php
session_start();

if(!isset($_SESSION['A_login']))
{
	header('location:admin_login.php');
}
?>
<?php
	if(isset($_POST['add_manager']))
	{
		
		$name=$_POST['name'];
$hotel_id=$_POST['hotel_id'];
$city=$_POST['city'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$address=$_POST['address'];
$username=$_POST['username'];




		include('config.php');
	$sql ="INSERT INTO `manager_details`(name,hotel_id,city,email,phone,address,username) VALUES ('".$name."', '".$hotel_id."', '".$city."', '".$email."', '".$phone."','".$address."', '".$username."')";


		//echo "<script type='text/javascript'>alert('$x')</script>";
		
		$result2=mysqli_query($conn,$sql);


		if($result2==1)
		{
			echo "<script>alert('Staff added successfully...')</script>";
			header('location:manage_manager.php');
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
	<title>Add Manager</title>
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
					
						<h2 class="page-title">Add Manager </h2>

						<div class="row">
							<div class="col-md-12">
								<div class="panel panel-primary">
									<div class="panel-heading">Fill all Information</div>
									<div class="scroll">
									<div class="panel-body">
			<form method="post" action="" name="addrooms" class="form-horizontal" onSubmit="return valid();">
											
										



<div class="form-group">
				<label class="col-sm-2 control-label">Name</label>
		<div class="col-sm-8">
	<input type="text" class="form-control" name="name" required="required">
	
</div>
</div>


<div class="form-group">
				<label class="col-sm-2 control-label">City</label>
		<div class="col-sm-8">
	<input type="text" class="form-control" name="city" required="required">
	
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
	<input type="text" class="form-control" name="phone" required="required">
	
</div>
</div>
<div class="form-group">
				<label class="col-sm-2 control-label">Address</label>
		<div class="col-sm-8">
	<input type="text" class="form-control" name="address" required="required">
	
</div>
</div>
<div class="form-group">
				<label class="col-sm-2 control-label">Username</label>
		<div class="col-sm-8">
	<input type="text" class="form-control" name="username">
	
</div>
</div>



<div class="col-sm-6 col-sm-offset-4">
<button name="add_manager" Value="Add" class="btn btn-primary">Add Manager</button>
<button class="btn btn-default"><a href="manage_manager.php">Cancel</a></button>

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