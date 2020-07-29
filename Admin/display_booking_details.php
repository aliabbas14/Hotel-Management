<?php
	$room= array();
	$roomno= array();
	$m=0;
	$arra= array();

	$curdate=date('Y-m-d');

	$conn=mysqli_connect("localhost","root","") or die(mysqli_error($conn));
	mysqli_select_db($conn,"hotel_managment") or die(mysqli_error($conn));

	$q="select room_no,booking_id,check_out_date from booking_details";
	$r=mysqli_query($conn,$q);

	while ($p=mysqli_fetch_array($r))
	{
		if($p['check_out_date'] < $curdate)
		{
			$arra[$m]=$p['booking_id'];
			$roomno[$m]=$p['room_no'];
			$m++;
		}
	}

	for ($o=0; $o < sizeof($arra) ; $o++)
	{ 
		$q2="INSERT INTO booking_history(`payment_id`, `room_type_id`, `room_no`, `user_id`, `offer_id`, `check_in_date`, `check_out_date`, `name`, `phone_no`, `country`, `city`, `address`, `pincode`, `email`, `gender`) SELECT `payment_id`, `room_type_id`, `room_no`, `user_id`, `offer_id`, `check_in_date`, `check_out_date`, `name`, `phone_no`, `country`, `city`, `address`, `pincode`, `email`, `gender` FROM `booking_details` where booking_id=".$arra[$o];

		$r2=mysqli_query($conn,$q2);

		$q4="update payment_details set booking_id=null where booking_id=".$arra[$o];
		//echo $q4;
		$r4=mysqli_query($conn,$q4);

		$q3="delete from booking_details where booking_id=".$arra[$o];
		//echo $q3;
		$r3=mysqli_query($conn,$q3);
	}
	


	$q5="select room_no from booking_details";
	$r5=mysqli_query($conn,$q5);


	$flag=0;
	for ($j=0; $j < sizeof($roomno); $j++) { 

		while ($row60=mysqli_fetch_array($r5)) {
			if ($roomno[$j]==$row60['room_no']) {
				$flag=1;
				break;
			}
		}

		if ($flag==0) {
			$room[$j]=$roomno[$j];
		}

		$flag=0;
		
	}

	$room=array_values($room);
	//print_r($room);

	for ($l=0; $l <sizeof($room) ; $l++) { 
		$query7="update rooms set status=0 where room_no=".$room[$l];
		$result7=mysqli_query($conn,$query7);
	}
?>
<?php
error_reporting(0);
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
	<br><br>
	<title>Display Booking Details</title>
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
						<h2 class="page-title">Display Booking Details</h2>
						<div class="panel panel-default">
							<div class="panel-heading">All Booking Details</div>
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

$result=mysqli_query($conn,"select * from booking_details inner join payment_details on booking_details.payment_id=payment_details.payment_id inner join room_type on booking_details.room_type_id=room_type.room_type_id");
		


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
