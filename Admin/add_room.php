<?php
session_start();

if(!isset($_SESSION['A_login']))
{
	header('location:admin_login.php');
}
	
if(isset($_POST['submit']))
{
					include('config.php');

$room_no=$_POST['roomno'];
$type=$_POST['room_type'];
$hotel_id=1;
$status=0;
$active=1;					
 
	$sql = "insert into rooms values('".$room_no."','".$hotel_id."','".$type."','".$status."','".$active."')"; 
				$result = mysqli_query($conn, $sql); 

        
				if($result==1)
				{
					header('location:manage-rooms.php');
					echo "<script>alert('Room Added successfully.')</script>";
				}else{
					echo "<script>alert('Something is Wrong.')</script>";
				} 		
		
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
	<title>Add Rooms</title>
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

</head>
<body>
	<?php include('header.php');?>
	<div class="ts-main-content">
		<?php include('sidebar.php');?>
		<div class="content-wrapper">
			<div class="container-fluid">

				<div class="row">
					<div class="col-md-12">
					
						<h2 class="page-title">Add Rooms </h2>

						<div class="row">
							<div class="col-md-12">
								<div class="panel panel-primary">
									<div class="panel-heading">Fill all Information</div>
									<div class="panel-body">
			<form method="post" action="" name="addrooms" class="form-horizontal" onSubmit="return valid();">
											
										

<div class="form-group">
<label class="col-sm-2 control-label">Room_no</label>
<div class="col-sm-8">
<input type="text" name="roomno" id="roomno"  class="form-control" required="required" >
</div>
</div>

<div class="form-group">
<label class="col-sm-2 control-label">Room type</label>
<div class="col-sm-8">
<select name="room_type"   class="form-control">
		<option value="select ">Select Type </option>
		<?php
		include('config.php');
		$qry="select * from room_type";
		$result=mysqli_query($conn,$qry);
								while ($a=mysqli_fetch_array($result)) 
								{
								
										echo "<option value=".$a['room_type_id'].">".$a['type']."</option>";		
										
	}
		?>
		  </select>

</div>
</div>



<div class="col-sm-6 col-sm-offset-4">
<button name="submit" Value="Add" class="btn btn-primary">Add Rooms</button>
<button class="btn btn-default"><a href="manage-rooms.php">Cancel</a></button>

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