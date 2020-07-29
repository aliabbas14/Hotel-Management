<?php 
session_start();
if(!isset($_SESSION['login1']))
{
  header('Location:index.php');
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
	<title>Payment</title>
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/dataTables.bootstrap.min.css">
	<link rel="stylesheet" href="css/bootstrap-social.css">
	<link rel="stylesheet" href="css/bootstrap-select.css">
	<link rel="stylesheet" href="css/fileinput.min.css">
	<link rel="stylesheet" href="css/awesome-bootstrap-checkbox.css">
	<link rel="stylesheet" href="css/style.css">
</head>

<body>
	<?php include('includes/header.php');?>

	<div class="ts-main-content">
			<?php include('includes/sidebar.php');?>
		<div class="content-wrapper">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-12" style="margin-top: 2%;">
						<h2 class="page-title">Payment</h2>
						<div class="panel panel-default">
							<div class="panel-heading">Payment</div>
								
								<?php
									$type=$_GET['type'];
									$rooms=$_GET['rooms'];
									$nights=$_GET['nights'];

									$conn=mysqli_connect("localhost","root","") or die(mysqli_error($conn));
									mysqli_select_db($conn,"hotel_managment") or die(mysqli_error($conn));

									$query="select rate from room_type where type='".$type."'";
									
									$result=mysqli_query($conn,$query);

									$row=mysqli_fetch_array($result);

									

									$total=(($row['rate']*$nights)*$rooms);



								?>

							<div class="panel-body">
								<?php
									$type=$_GET['type'];
									$rooms=$_GET['rooms'];
									$nights=$_GET['nights'];

									$conn=mysqli_connect("localhost","root","") or die(mysqli_error($conn));
									mysqli_select_db($conn,"hotel_managment") or die(mysqli_error($conn));

									$query="select rate from room_type where type='".$type."'";
									
									$result=mysqli_query($conn,$query);

									$row=mysqli_fetch_array($result);

									

									$total=(($row['rate']*$nights)*$rooms);

									

								?>

								<label>Kindly collect Rs. <?php echo $total; ?> from customer</label>
								<a href="rooms.php"><button class="btn btn-primary">Okay</button></a>
								
								
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
