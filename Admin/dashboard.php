<?php
session_start();?>
<?php
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
	<title>DashBoard</title>
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/dataTables.bootstrap.min.css">
	<link rel="stylesheet" href="css/bootstrap-social.css">
	<link rel="stylesheet" href="css/bootstrap-select.css">
	<link rel="stylesheet" href="css/fileinput.min.css">
	<link rel="stylesheet" href="css/awesome-bootstrap-checkbox.css">
	<link rel="stylesheet" href="css/style.css">
<!-- Donute chart-->
	<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
        
          ['Booked Rooms',      <?php 
          					include 'config.php';
          					$sql = "SELECT * FROM rooms where status=1"; 
							$result = mysqli_query($conn, $sql);
							$no=mysqli_num_rows($result);
							echo $no; ?>],
          ['Available Rooms',  <?php 
          					include 'config.php';
          					$sql = "SELECT * FROM rooms where status=0 and active=1"; 
							$result = mysqli_query($conn, $sql);
							$no=mysqli_num_rows($result);
							echo $no; ?>],

          ['Pending Rooms', <?php 
          					include 'config.php';
          					$sql = "SELECT * FROM rooms where active=0"; 
							$result = mysqli_query($conn, $sql);
							$no=mysqli_num_rows($result);
							echo $no; ?>],

          
        ]);

        var options = {
          title: 'Rooms status',
          pieHole: 0.4,
        };

        var chart = new google.visualization.PieChart(document.getElementById('donutchart'));
        chart.draw(data, options);
      }
    </script>

<!-- Donute chart ends here-->
<!-- 3D pie chart-->
    
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Rooms', 'Rooms_type'],
         ['Single Rooms',      <?php 
          					include 'config.php';
          					$sql = "SELECT * FROM rooms where room_type_id='1'"; 
							$result = mysqli_query($conn, $sql);
							$no=mysqli_num_rows($result);
							echo $no; ?>],
          ['Double Rooms',  <?php 
          					include 'config.php';
          					$sql = "SELECT * FROM rooms where room_type_id='2'"; 
							$result = mysqli_query($conn, $sql);
							$no=mysqli_num_rows($result);
							echo $no; ?>],

          ['Triple Rooms', <?php 
          					include 'config.php';
          					$sql = "SELECT * FROM rooms where room_type_id='3'"; 
							$result = mysqli_query($conn, $sql);
							$no=mysqli_num_rows($result);
							echo $no; ?>],
        
          ['Duplex Rooms', <?php 
          					include 'config.php';
          					$sql = "SELECT * FROM rooms where room_type_id='4'";
							$result = mysqli_query($conn, $sql);
							$no=mysqli_num_rows($result);
							echo $no; ?>],
        
          ['Standard Rooms', <?php 
          					include 'config.php';
          					$sql = "SELECT * FROM rooms where room_type_id='5'";
							$result = mysqli_query($conn, $sql);
							$no=mysqli_num_rows($result);
							echo $no; ?>],
        ]);

        var options = {
          title: 'Rooms status',
          is3D: true,
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
        chart.draw(data, options);
      }
    </script>
<!-- 3D pie chart ends here-->




<!-- Column chart-->

<script type="text/javascript">
	//Bar chart
    google.charts.load("current", {packages:["corechart"]});
    google.charts.setOnLoadCallback(drawChart);
    function drawChart() {
      var data = google.visualization.arrayToDataTable([
        ["Rooms", "Quantity", { role: "style" } ],
        ["Single Rooms", <?php 
          					include 'config.php';
          					$sql = "SELECT * FROM rooms where room_type_id='1'"; 
							$result = mysqli_query($conn, $sql);
							$no=mysqli_num_rows($result);
							echo $no; ?>, "blue"],
        ["Double Rooms", <?php 
          					include 'config.php';
          					$sql = "SELECT * FROM rooms where room_type_id='2'";  
							$result = mysqli_query($conn, $sql);
							$no=mysqli_num_rows($result);
							echo $no; ?>, "red"],
		["Triple Rooms", <?php 
          					include 'config.php';
          					$sql = "SELECT * FROM rooms where room_type_id='3'"; 
							$result = mysqli_query($conn, $sql);
							$no=mysqli_num_rows($result);
							echo $no; ?>, "violet"],

        ["Duplex Rooms", <?php 
          					include 'config.php';
          					$sql = "SELECT * FROM rooms where room_type_id='4'"; 
							$result = mysqli_query($conn, $sql);
							$no=mysqli_num_rows($result);
							echo $no; ?>, "green"],

        ["Standard Rooms", <?php 
          					include 'config.php';
          					$sql = "SELECT * FROM rooms where room_type_id='5'"; 
							$result = mysqli_query($conn, $sql);
							$no=mysqli_num_rows($result);
							echo $no; ?>, "yellow"]
              ]);

      var view = new google.visualization.DataView(data);
      view.setColumns([0, 1,
                       { calc: "stringify",
                         sourceColumn: 1,
                         type: "string",
                         role: "annotation" },
                       2]);

      var options = {
        title: "Total Rooms",
        width: 1000,
        height: 800,
        bar: {groupWidth: "95%"},
        legend: { position: "none" },


      };
      var chart = new google.visualization.ColumnChart(document.getElementById("barchart_values"));
      chart.draw(view, options);
  }
  </script>
<!-- Column chart ends here-->
 
</head>

<body>
<?php include("header.php");?>

	<div class="ts-main-content">
		<?php include("sidebar.php");?>
		<div class="content-wrapper">
			<div class="container-fluid">

				<div class="row">
					<div class="col-md-12">

						<h2 class="page-title">Dashboard</h2>
						
						<?php 
						include('config.php');
					?>


						<div class="row">
							<div class="col-md-12">
								<div class="row">
									<div class="col-md-3">
										<div class="panel panel-default">
											<div class="panel-body bk-primary text-light">
												<div class="stat-panel text-center">
													<div class="stat-panel-number h1 " ><?php 	$sql = "SELECT * FROM user_details"; 
														$result = mysqli_query($conn, $sql);
														$no=mysqli_num_rows($result);
														echo $no;
														?>
													</div>
												</div>
											</div>
											<a href="view_user_details.php" class="block-anchor panel-footer"  style="font-size: 20px;color: white;font-weight:bold;background-color: 	orange;">Users&nbsp;<i class="fa fa-arrow-right"></i></a>
										</div>
									</div>
									<div class="col-md-3">
										<div class="panel panel-default">
											<div class="panel-body bk-success text-light">
												<div class="stat-panel text-center">

													<div class="stat-panel-number h1 "><?php 	$sql = "SELECT * FROM rooms"; 
														$result = mysqli_query($conn, $sql);
														$no=mysqli_num_rows($result);
													        echo $no; 
														?>
													</div>
																				
												</div>
											</div>
											<a href="manage-rooms.php" class="block-anchor panel-footer text-center"  style="font-size: 20px;color: white;font-weight:bold;background-color:orange;">Total Rooms&nbsp; <i class="fa fa-arrow-right"></i></a>
										</div>
									</div>
										
									<div class="col-md-3">
										<div class="panel panel-default">
											<div class="panel-body bk-primary text-light">
												<div class="stat-panel text-center">

													<div class="stat-panel-number h1 "><?php 	$sql = "SELECT * FROM rooms where status=1 and active=1"; 
														$result = mysqli_query($conn, $sql);
														$no=mysqli_num_rows($result);
						       							echo $no; 
														?>
													</div>
													
												</div>
											</div>
											<a href="booked_rooms.php" class="block-anchor panel-footer" style="font-size: 20px;color: white;font-weight:bold;background-color: 	orange;">Booked Rooms&nbsp;<i class="fa fa-arrow-right"></i></a>
										</div>
									</div>

									<div class="col-md-3">
										<div class="panel panel-default">
											<div class="panel-body bk-success text-light">
												<div class="stat-panel text-center">

												<div class="stat-panel-number h1 "><?php 	$sql = "SELECT * FROM rooms where status=0 and active=1"; 
														$result = mysqli_query($conn, $sql);
														$no=mysqli_num_rows($result);
													      echo $no;   
														?>
							 					</div>
													
												</div>
											</div>
											<a href="available_rooms.php" class="block-anchor panel-footer text-center" style="font-size: 20px;color: white;font-weight:bold;background-color: 	orange;">Available Rooms&nbsp; <i class="fa fa-arrow-right"></i></a>
										</div>
									</div>
							
									<div class="col-md-3">
										<div class="panel panel-default">
											<div class="panel-body bk-success text-light">
												<div class="stat-panel text-center">

												<div class="stat-panel-number h1 "><?php 	$sql = "SELECT * FROM rooms where active=0"; 
														$result = mysqli_query($conn, $sql);
														$no=mysqli_num_rows($result);
													      echo $no;   
														?>
							 					</div>
													
												</div>
											</div>
											<a href="pending_rooms.php" class="block-anchor panel-footer text-center" style="font-size: 20px;color: white;font-weight:bold;background-color: 	orange;">Pending Rooms&nbsp; <i class="fa fa-arrow-right"></i></a>
										</div>
									</div>



								</div>
							</div>
						</div>
<!-- Donute chart-->	<div id="donutchart" style="width: 900px; height: 500px; margin-right: 0px;"></div>
   <!-- 3D pie chart--><div id="piechart_3d" style="width: 900px; height: 500px;"></div>
   
   <!-- Columnchart--><div id="barchart_values" style="width: 900px; height: 300px;"></div> 	