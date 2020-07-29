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
	<title>Login-History</title>
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
						<h2 class="page-title">Display Login History</h2>
						<div class="panel panel-default">
							<div class="panel-heading">All Login History</div>
							<div class="scroll">
							<div class="panel-body">
								<table id="zctb" class="display table table-striped table-bordered table-hover" cellspacing="0" width="100%">
									<thead>
										<tr>
											<th>User-id</th>
										<th>IP-Address</th>
										
										
										<th>Login-Time</th>
										<th>Logout-Time</th>
										
										
										
											
										</tr>
									</thead>
									<tbody>
<?php	
include('config.php');

$result=mysqli_query($connection,"select * from login_history");
		


while($a=mysqli_fetch_array($result,MYSQLI_BOTH))
			{ 	?>
		

			<tr><td><?php echo $a['user_id'] ?></td>
				<td><?php echo $a['ip_address'] ?></td>
				<td><?php echo $a['login_time'] ?></td>
				<td><?php echo $a['logout_time'] ?></td>
							
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
