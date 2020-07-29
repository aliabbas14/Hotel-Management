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
	<title>Category Details</title>
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/dataTables.bootstrap.min.css">
	<link rel="stylesheet" href="css/bootstrap-social.css">
	<link rel="stylesheet" href="css/bootstrap-select.css">
	<link rel="stylesheet" href="css/fileinput.min.css">
	<link rel="stylesheet" href="css/awesome-bootstrap-checkbox.css">
	<link rel="stylesheet" href="css/style.css">
	<style type="text/css">
	.scroll
	{
		overflow: scroll;
		height: 500px;
	}
</style>

</head>

<?php  
	if(isset($_GET['del']))
{
	$offer_id=$_GET['del'];

	include('config.php');
	$query="delete from offer_details where offer_id=".$offer_id;
		echo"<script>alert('$query')</script>";
	$result=mysqli_query($conn,$query);
      

if($result==1)
	{
		echo"<script>alert('Offer Deleted')</script>";

	}
	else
	{
		echo"<script>alert('Offer not Deleted')</script>";	
	}
}
?>

<body>
	<?php include('header.php');?>

	<div class="ts-main-content">
			<?php include('sidebar.php');?>
		<div class="content-wrapper">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-12">
						<h2 class="page-title">Offer Details</h2>
						<div class="panel panel-default">
							<div class="panel-heading">All Offer Details</div>
							<form method="post">
								<div class="scroll">
							<div class="panel-body">
								
								<table id="zctb" class="display table table-striped table-bordered table-hover" cellspacing="0" width="100%">
									<thead>
										<tr>
											<th>offer_id</th>
										
											<th>hotel_id</th>
											<th>offer_description</th>
											<th>Offer_startDate</th>
											<th>Offer_endDate</th>
											<th>Discount</th>
											<th>Promocode</th>
											<th>Action</th>

										</tr>
									</thead>
									<tbody>
										
<?php
include('config.php');
$query="SELECT offer_id,hotel_id,offer_desc,offer_start,offer_end,discount,promocode FROM offer_details";

$result=mysqli_query($conn,$query);
$cnt=1;
while ($row=mysqli_fetch_array($result)) 
	  {

	  	?>
	  	
<td><?php echo $row['offer_id'];?></td>
<td><?php echo $row ['hotel_id']?></td>
<td><?php echo $row ['offer_desc'];?></td>
<td><?php echo $row ['offer_start'];?></td>
<td><?php echo $row ['offer_end']?></td>
<td><?php echo $row ['discount'];?></td>
<td><?php echo $row ['promocode'];?></td>

<td><a href="edit_offer.php?id=<?php echo $row['offer_id'];?>"><i class="fa fa-edit">update</i></a>&nbsp;&nbsp;
<a href="offers_details.php?del=<?php echo $row['offer_id'];?>" onclick="return confirm("Do you want to delete");"><i class="fa fa-close">delete</i></a></td>
</tr>
		<?php $cnt=$cnt+1; } ?>											
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

