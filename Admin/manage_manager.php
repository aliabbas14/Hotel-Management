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
	<meta name="theme-color" content="#3e454c"><br>
	<title>Manage Manager</title>
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
	<!--3d pie chart starts-->
 </head>

<body>

	<?php include('header.php');?>

	<div class="ts-main-content">
			<?php include('sidebar.php');?>
		<div class="content-wrapper">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-12">
						<h2 class="page-title">Manage Manager</h2>
						
						<div class="panel panel-default">
							<div class="panel-heading">All Manager Details</div>
							<form method="post">
								<div class="scroll">
							<div class="panel-body">
								
								<table id="zctb" class="display table table-striped table-bordered table-hover" cellspacing="0" width="100%">
									<thead>
										<tr>
											<th>Sno.</th>
										
											<th>Manager-id</th>

											<th>Manager name</th>
											<th>Hotel-id</th>
											<th>City</th>

											<th>Email</th>
											<th>Phone no</th>
											<th>Address</th>
											<th>Username</th>
											<th>Action</th>
											</tr>
									</thead>
									
									<tbody>
										
<?php
include('config.php');
$query="SELECT * FROM manager_details";

$result=mysqli_query($conn,$query);
$cnt=1;
while ($row=mysqli_fetch_array($result)) 
	  {
	  	
	  	?>
<tr><td><?php echo $cnt;?></td>	  	
<td><?php echo $row['manager_id'];?></td>
<td><?php echo $row['name'];?></td>

<td><?php echo  $row['hotel_id'];?></td>
<td><?php echo $row ['city'];?></td>
<td><?php echo $row ['email'];?></td>
<td><?php echo $row ['phone'];?></td>
<td><?php echo $row ['address'];?></td>
<td><?php echo $row ['username'];?></td>

<td><a href="edit_manager.php?id=<?php echo $row['manager_id'];?>"><i class="fa fa-edit">update</i></a>&nbsp;&nbsp;
<a href="delete_manager.php?del=<?php echo $row['manager_id'];?>"><i class="fa fa-close">delete</i></a></td>
										</tr>
									<?php
$cnt=$cnt+1;
									 } ?>
											
										
									</tbody>
								</table>

								
							</div>
    </form>
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

