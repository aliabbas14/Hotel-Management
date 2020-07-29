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
	<title>Manage Staff</title>
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
 <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Staff Type', 'Staff Members'],
         ['Security',      <?php 
          					include 'config.php';
          					$sql = "SELECT * FROM staff_details where staff_type='Security'"; 
							$result = mysqli_query($conn, $sql);
							$no=mysqli_num_rows($result);
							echo $no; ?>],
          ['Waiter',  <?php 
          					include 'config.php';
          					$sql = "SELECT * FROM staff_details where staff_type='wiater'"; 
							$result = mysqli_query($conn, $sql);
							$no=mysqli_num_rows($result);
							echo $no; ?>],
		 ['Receptionist',      <?php 
          					include 'config.php';
          					$sql = "SELECT * FROM staff_details where staff_type='Receptionist'"; 
							$result = mysqli_query($conn, $sql);
							$no=mysqli_num_rows($result);
							echo $no; ?>],
          ['Kitchen',  <?php 
          					include 'config.php';
          					$sql = "SELECT * FROM staff_details where staff_type='Kitchen'"; 
							$result = mysqli_query($conn, $sql);
							$no=mysqli_num_rows($result);
							echo $no; ?>],

         
         ]);

        var options = {
          title: 'Staff Details',
          is3D: true,
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart_3d1'));
        chart.draw(data, options);
      }
    </script>
<!-- 3D pie chart ends here-->
</head>

<body>
	

?>

	<?php include('header.php');?>

	<div class="ts-main-content">
			<?php include('sidebar.php');?>
		<div class="content-wrapper">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-12">
						<h2 class="page-title">Manage Staff</h2>
						
						<div class="panel panel-default">
							<div class="panel-heading">All Staff Details</div>
							<form method="post">
								<div class="scroll">
							<div class="panel-body">
								
								<table id="zctb" class="display table table-striped table-bordered table-hover" cellspacing="0" width="100%">
									<thead>
										<tr>
											<th>Sno.</th>
										
											<th>Staff-id</th>
											<th>Hotel-id</th>
											<th>Staff-type</th>

											<th>Name</th>
											<th>Gender</th>
											<th>Joining-Date</th>
											
											<th>Salary</th>
											<th>E-mail</th>
											<th>Phone</th>
											
											<th>City</th>
											<th>Address</th>
											<th>Action</th>
										</tr>
									</thead>
									
									<tbody>
										
<?php
include('config.php');
$query="SELECT * FROM staff_details where reliving_date=''";

$result=mysqli_query($conn,$query);
$cnt=1;
while ($row=mysqli_fetch_array($result)) 
	  {
	  	
	  	?>
<tr><td><?php echo $cnt;?></td>	  	
<td><?php echo $row['staff_id'];?></td>
<td><?php echo  $row['hotel_id'];?></td>
<td><?php echo $row['staff_type'];?></td>
<td><?php echo $row ['name']?></td>
<td><?php echo $row ['gender'];?></td>
<td><?php echo $row ['joining_date'];?></td>

<td><?php echo $row ['salary'];?></td>
<td><?php echo $row ['email'];?></td>
<td><?php echo $row ['phone'];?></td>

<td><?php echo $row ['city'];?></td>
<td><?php echo $row ['address'];?></td>

<td><a href="edit_staff.php?id=<?php echo $row['staff_id'];?>"><i class="fa fa-edit">update</i></a>&nbsp;&nbsp;
<a href="staffdelete.php?del=<?php echo $row['staff_id'];?>"><i class="fa fa-close">delete</i></a></td>
										</tr>
									<?php
$cnt=$cnt+1;
									 } ?>
											
										
									</tbody>
								</table>

								
							</div>


						
    <br>
    <!-- 3D pie chart--><div id="piechart_3d1" style="width: 900px; height: 500px;"></div>
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

<?php
	if(isset($_POST['save']))
	{
		include('config.php');
		$query2="select room_no from booking_details";
		$result2=mysqli_query($conn,$query2);

		while ($row2=mysqli_fetch_array($result2)) 
	  	{	
	  					
	  	}

	  	echo "<script type='text/javascript'>window.location.href = 'manage_staff.php';</script>";
	  	//header('Location:edit_rooms.php');
	}
?>

