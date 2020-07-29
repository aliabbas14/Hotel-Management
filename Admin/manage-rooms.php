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
	<title>Manage Rooms</title>
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
<?php  
	if(isset($_GET['del']))
{
	$room_no=$_GET['del'];

	include('config.php');
	$query="delete from rooms where room_no=".$room_no;
	$result=mysqli_query($conn,$query);
      
}
if($result==1)
	{
		echo"<script>alert('Room Deleted')</script>";
	}

?>

	<?php include('header.php');?>

	<div class="ts-main-content">
			<?php include('sidebar.php');?>
		<div class="content-wrapper">
			<div class="container-fluid">
				<div class="row">
					<br>
					<div class="col-md-12">
						<h2 class="page-title">Manage Rooms</h2>
						<div class="panel panel-default">
							<div class="panel-heading">All Room Details</div>
							<form method="post">

							<div class="panel-body">
								
								<table id="zctb" class="display table table-striped table-bordered table-hover" cellspacing="0" width="100%">
									<thead>
										<tr>
											<th>Sno.</th>
										
											<th>Seater</th>
											<th>Room No.</th>
											<th>Rate </th>

											<th>Room Type </th>
											<th>Active </th>
											<th>Action</th>
										</tr>
									</thead>
									<tbody>
										
<?php
include('config.php');
$query="SELECT room_no,active,type,rate FROM rooms INNER JOIN room_type on rooms.room_type_id=room_type.room_type_id ";

$result=mysqli_query($conn,$query);
$cnt=1;
$seater="";
while ($row=mysqli_fetch_array($result)) 
	  {
	  	if($row['type']=="Single")
	  	{
	  		$seater=1;

	  	}
	  	if($row['type']=="Double")
	  	{
	  		$seater=2;
	  	}
	  	if($row['type']=="Triple")
	  	{
	  		$seater=3;
	  	}
	  	if($row['type']=="Duplex")
	  	{
	  		$seater=4;
	  	}
	  	if($row['type']=="Standard")
	  	{
	  		$seater=5;
	  	}
	  	?>
	  	
<tr><td><?php echo $cnt;;?></td>
<td><?php echo  $seater;?></td>
<td><?php echo $row['room_no'];?></td>
<td><?php echo $row ['rate']?></td>
<td><?php echo $row ['type'];?></td>
<td><input type="checkbox" name="<?php echo $row['room_no'];?>" <?php if($row ['active']==1){echo "checked";} ?>></td>
<td><a href="edit_rooms.php?id=<?php echo $row['room_no'];?>"><i class="fa fa-edit">update</i></a>&nbsp;&nbsp;
<a href="manage-rooms.php?del=<?php echo $row['room_no'];?>" onclick="return confirm("Do you want to delete");"><i class="fa fa-close">delete</i></a></td>
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
		$query2="select room_no from rooms";
		$result2=mysqli_query($conn,$query2);

		while ($row2=mysqli_fetch_array($result2)) 
	  	{	
	  		$name=$row2['room_no'];
	  		//echo "<script type='text/javascript'>alert('$name')</script>";
			$status=$_POST[$name];
			//echo "<script type='text/javascript'>alert('$status')</script>";
			if($status=="on")
			{
				$query3="update rooms set active=1 where room_no=".$name;
			}
			else
			{
				$query3="update rooms set active=0 where room_no=".$name;
			}

			//echo "<script type='text/javascript'>alert('$query3')</script>";
			$result3=mysqli_query($conn,$query3);



			
	  	}

	  	echo "<script type='text/javascript'>window.location.href = 'manage-rooms.php';</script>";
	  	//header('Location:edit_rooms.php');
	}
?>
