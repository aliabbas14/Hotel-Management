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
	<title>Booking History Details</title>
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/dataTables.bootstrap.min.css">
	<link rel="stylesheet" href="css/bootstrap-social.css">
	<link rel="stylesheet" href="css/bootstrap-select.css">
	<link rel="stylesheet" href="css/fileinput.min.css">
	<link rel="stylesheet" href="css/awesome-bootstrap-checkbox.css">
	<link rel="stylesheet" href="css/style.css">
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
						<h2 class="page-title">Booking History</h2>
						<div class="panel panel-default">
							<div class="panel-heading">Booking History Details</div>
							<div class="scroll">
							<div class="panel-body">
								<table id="zctb" class="display table table-striped table-bordered table-hover" cellspacing="0" width="100%">
									<thead>
										<tr>
											<th>Name</th>
											<th>Room Type</th>
										<th>Room No</th>
										<!--<th>Student Login id</th>-->
										
										<th>Check In Date</th>
										<th>Check Out Date</th>
										<th>Payment</th>
										
										
										<th>Phone No</th>
										<th>Country</th>
										<th>City</th>
										<th>Address</th>
										<th>Pincode</th>
										<th>Email</th>
										<th>Gender</th>
										
											
										</tr>
									</thead>
									<tbody>
<?php	
include 'config.php';

$result=mysqli_query($conn,"select * from booking_history inner join payment_details on booking_history.payment_id=payment_details.payment_id inner join room_type on booking_history.room_type_id=room_type.room_type_id");


	//"select * from booking_history"


		


while($a=mysqli_fetch_array($result,MYSQLI_BOTH))
			{ 	?>
		

		<tr><td><?php echo $a['name'] ?></td>
				<td><?php echo $a['type'] ?></td>
				<td><?php echo $a['room_no'] ?></td>
				<td><?php echo $a['check_in_date'] ?></td>
				<td><?php echo $a['check_out_date'] ?></td>
				<td><?php echo $a['total_payment'] ?></td>
				<td><?php echo $a['phone_no'] ?></td>
				<td><?php echo $a['country'] ?></td>
				<td><?php echo $a['city'] ?></td>
				<td><?php echo $a['address'] ?></td>
				<td><?php echo $a['pincode'] ?></td>
				<td><?php echo $a['email'] ?></td> 
					<td><?php echo $a['gender'] ?></td> 
					
				</tr>
			<?php  } ?>
									
										
									</tbody>
								</table>

								
							</div>
						</div>
					</div>
					
					</div>
				</div>

			

			</div>
		</div>
	</div>

	<!-- Loading Scripts -->
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

</html>
