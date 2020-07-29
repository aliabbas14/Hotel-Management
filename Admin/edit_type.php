
<?php
session_start();

if(!isset($_SESSION['A_login']))
{
	header('location:admin_login.php');
}
if(isset($_POST['update'])){
	include("config.php");
	$selected_rooms=$_GET['id'];
		$rate=$_POST['rate'];

		$feature=$_POST['feature'];


 
 $name = $_FILES['file']['name'];
 $target_file =  basename($_FILES["file"]["name"]);

 // Select file type
 $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

 // Valid file extensions
 $extensions_arr = array("jpg","jpeg","png","gif");

 // Check extension
 if( in_array($imageFileType,$extensions_arr) ){
 
  // Convert to base64 
  $image_base64 = base64_encode(file_get_contents($_FILES['file']['tmp_name']) );
  $image = 'data:image/'.$imageFileType.';base64,'.$image_base64;
  // Insert record
  $query = "update room_type set rate='".$rate."',features='".$feature."',image='".$image."' where room_type_id=".$selected_rooms;
  $uploadImage=mysqli_query($conn,$query);
  
  // Upload file
// $uploadImage= move_uploaded_file($_FILES['file']['tmp_name'],$target_file.$name);
 if($uploadImage==1)
 	echo"<script>alert('Data updated successfully.')</script>";
 else
 	echo"<script>alert('Data not inserted successfully.')</script>";
 }
 
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
	<title>Edit Room Type</title>
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
	$room_type_id=$_GET['id'];
	
	include('config.php');
		
	

	$result=mysqli_query($conn,"SELECT * FROM room_type where room_type_id='$room_type_id'");
	$row=mysqli_fetch_array($result); 
	
		
	?>

	<?php include('header.php');?>
	<div class="ts-main-content">
		<?php include('sidebar.php');?>
		<div class="content-wrapper">
			<div class="container-fluid">

				<div class="row">
					<div class="col-md-12">
					
						<h2 class="page-title">Edit Room Type </h2>
	
						<div class="row">
							<div class="col-md-12">
								<div class="panel panel-default">
									<div class="panel-heading">Edit Room Type</div>
									<div class="panel-body">
										<form method="post" class="form-horizontal" enctype="multipart/form-data">
												
						<div class="hr-dashed"></div>
						
						
						<div class="form-group">


						</div>
						<div class="scroll">
						 <div class="form-group">
				<label class="col-sm-2 control-label">Room_type_id </label>
		<div class="col-sm-8">
	<input type="text" class="form-control" name="rmtype" id="rmtype" value="<?php echo $row['room_type_id'];?> "disabled>
	<span class="help-block m-b-none" style="color: red;">
													Room_type_id can't be changed.</span>
						 </div>
						</div>	
						
								
											
						
					
					<div class="form-group">
						<label class="col-sm-2 control-label">Room type</label>
					<div class="col-sm-8">
					<select name="room_type"  class="form-control" disabled>
						
						<?php
						$selected=$row["type"];
						$result1=mysqli_query($conn,"SELECT * From room_type");
						while($row1=mysqli_fetch_array($result1))
						{
							$values=$row1['type'];
						?>
						<option value="<?php echo $row1['room_type_id']; ?>" <?php if($values==$selected){echo "selected";} ?>><?php echo $row1['type']; ?></option> 
						<?php
						}
						?>
				</select>
				<span class="help-block m-b-none" style="color: red;">
													Room_type can't be changed.</span>

					</div>
					</div>
				
			<div class="form-group">
				<label class="col-sm-2 control-label">Rate</label>
				<div class="col-sm-8">
				<input type="text" class="form-control" name="rate" id="rate" value="<?php echo $row['rate'];?> ">
			 </div>

			<div class="form-group">	
						</div>

		<!--	 <div class="form-group">
				<label class="col-sm-2 control-label">Image</label>
				<div class="col-sm-8">
				<input type="file" class="form-control" name="image" id="image" readonly value="<?php echo $row['image'];?> ">
			 </div>-->
		
			<div class="form-group">	
						</div>
						<div class="form-group">
				<label class="col-sm-2 control-label">Room Features</label>
		<div class="col-sm-8">
	<input type="text" class="form-control" name="feature" id="feature" value="<?php echo $row['features'];?> ">

						 </div>

						 
						 <div class="form-group"></div>
		<div class="form-group">
				<label class="col-sm-2 control-label">Image</label>
				<div class="col-sm-8">
				<input type="file" class="form-control" name="file" id="image">
			 </div>
		
											<br><br><br><br>
											<div class="col-sm-8 col-sm-offset-2">
													
													<input class="btn btn-primary"  name="update" type="submit" name="submit" value="Update Room Details ">
													<button class="btn btn-default" style="width: 120px;"><a href="category_details.php">Cancel</a></button>
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
<script type="text/javascript">
	var room_value='<?php echo $room_type_id; ?>';
	//window.alert(room_value);
</script>
<?php
	/*if(isset($_POST['update']))
	{
		$selected_rooms=$_GET['id'];
		$rate=$_POST['rate'];

		$feature=$_POST['feature'];
		 //echo "<script type='text/javascript'>alert('$room_no')</script>";
		include('config.php');
		 $x="update room_type set rate='".$rate."',features='".$feature."' where room_type_id=".$selected_rooms;
		//echo "<script type='text/javascript'>alert('$x')</script>";
		 echo"<script>alert('$x')</script>";
		$result2=mysqli_query($conn,$x);
		 
		if($result2)
			echo"<script>alert('data updated successfully')</script>";
		else
			echo"<script>alert('data not updated successfully')</script>";
		
		//echo "<script type='text/javascript'>window.location.href = 'edit_type.php?id='+room_value;</script>";
	}*/
?>	