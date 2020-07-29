
<?php
session_start();

if(!isset($_SESSION['A_login']))
{
	header('location:admin_login.php');
}
if(isset($_POST['update'])){
	include("config.php");
	$offer_id=$_GET['id'];
	$desc=$_POST['description'];
	$start=$_POST['start'];
	$end=$_POST['end'];
	$discount=$_POST['discount'];
	$code=$_POST['code']; 
  // Insert record
  $query = "update offer_details set offer_desc='".$desc."',offer_start='".$start."',offer_end='".$end."',discount='".$discount."',promocode='".$code."' where offer_id=".$offer_id;
  $result=mysqli_query($conn,$query);
  
  // Upload file
// $uploadImage= move_uploaded_file($_FILES['file']['tmp_name'],$target_file.$name);
 if($result==1)
 	echo"<script>alert('Data updated successfully.')</script>";
 else
 	echo"<script>alert('Data not updated successfully.')</script>";
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
	<title>Edit Offers</title>
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

<style type="text/css">
	.scroll{overflow: scroll;height: 500px;}
</style>
</head>
<body>

	<?php
	$offer_id=$_GET['id'];
	
	include('config.php');
		
	

	$result=mysqli_query($conn,"SELECT * FROM offer_details where offer_id='$offer_id'");
	$row=mysqli_fetch_array($result); 
	
		
	?>

	<?php include('header.php');?>
	<div class="ts-main-content">
		<?php include('sidebar.php');?>
		<div class="content-wrapper">
			<div class="container-fluid">

				<div class="row">
					<div class="col-md-12">
					
						<h2 class="page-title">Edit Offers</h2>
	
						<div class="row">
							<div class="col-md-12">
								<div class="panel panel-default">
									<div class="panel-heading">Edit Offers</div>
									<div class="panel-body">
										<form method="post" class="form-horizontal" >
												
						
						<div class="scroll">
							 <div class="form-group">
								<label class="col-sm-2 control-label">Offer_id </label>
								<div class="col-sm-8">
									<input type="text" class="form-control" name="offerid" value="<?php echo $row['offer_id'];?> "disabled>
									<span class="help-block m-b-none" style="color: red;">
													Offer_id can't be changed.</span>
						 		</div>
							</div>							
					
							<div class="form-group">
								<label class="col-sm-2 control-label">Hotel_id</label>
								<div class="col-sm-8">
									<input type="text" class="form-control" name="hotelid" value="<?php echo $row['hotel_id'];?> "disabled>								
									<span class="help-block m-b-none" style="color: red;">
													Hotel_id can't be changed.</span>
								</div>
							</div>
				
						<div class="form-group">
							<label class="col-sm-2 control-label">Offer Description</label>
							<div class="col-sm-8">
								<input type="text" class="form-control" name="description" value="<?php echo $row['offer_desc'];?> ">
			 				</div>
			 			</div>

						<div class="form-group">
							<label class="col-sm-2 control-label">Offer_Start_Date</label>
							<div class="col-sm-8">
								<input type="datetime" class="form-control" name="start"  value="<?php echo $row['offer_start'];?> ">
							</div>
						</div>

						<div class="form-group">
							<label class="col-sm-2 control-label">Offer_End_Date</label>
							<div class="col-sm-8">
								<input type="datetime" class="form-control" name="end" value="<?php echo $row['offer_end'];?> ">
			 				</div>
			 			</div>
						

						<div class="form-group">
							<label class="col-sm-2 control-label">Discount</label>
							<div class="col-sm-8">
								<input type="text" class="form-control" name="discount" value="<?php echo $row['discount'];?> ">
			 				</div>
			 			</div>


						<div class="form-group">
							<label class="col-sm-2 control-label">Promocode</label>
							<div class="col-sm-8">
								<input type="text" class="form-control" name="code" value="<?php echo $row['promocode'];?> ">
			 				</div>
			 			</div>
											<br>
											<div class="col-sm-8 col-sm-offset-2">
													
													<input class="btn btn-primary"  name="update" type="submit" name="submit" value="Update Offer Details ">
													<button class="btn btn-default" style="width: 120px;"><a href="offers_details.php">Cancel</a></button>
												</div>
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

</script>
</body>

</html>
