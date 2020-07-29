
<?php
session_start();

if(!isset($_SESSION['A_login']))
{
	header('location:admin_login.php');
}


if(isset($_POST['cancel']))
	header('location:dashboard.php');

if(isset($_POST['submit']))
{
	include("config.php");
$hotel_id=$_POST['hotel_id'];
	$desc=$_POST['description'];
	//$image=$_POST['image'];

 
/* $name = $_FILES['file']['name'];
 $target_file =  basename($_FILES["file"]["name"]);

 // Select file type
 $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

 // Valid file extensions
 $extensions_arr = array("jpg","jpeg","png","gif");

 // Check extension
 if( in_array($imageFileType,$extensions_arr) ){
 
  // Convert to base64 
 // $image_base64 = base64_encode(file_get_contents($_FILES['file']['tmp_name']));
  $image = 'data:image/'.$imageFileType.';base64,'.$image_base64;
  // Insert record
  $query = "insert into gallery(hotel_id,des,image) values('".$hotel_id."','".$desc."','".$image."')";
 	echo"<script>alert('$query')</script>"; 
  $uploadImage=mysqli_query($conn,$query);
  
  // Upload file
// $uploadImage= move_uploaded_file($_FILES['file']['tmp_name'],$target_file.$name);
 if($uploadImage==1)
 	echo"<script>alert('Data inserted successfully.')</script>";
 else
 	echo"<script>alert('Data not inserted successfully.')</script>";
 }
 
}
*/
  if($_FILES["image"]["name"])
    {
        
    $check = getimagesize($_FILES["image"]["tmp_name"]);
 
 
    // $fileExtension = $_FILES['image']['name'];
      $imageFileType = strtoupper(pathinfo($_FILES["image"]["name"],PATHINFO_EXTENSION));
    if($check !== false){
      
        $image = $_FILES['image']['tmp_name'];          

       
        $imgContent = addslashes(file_get_contents($image)); 



if($imageFileType != "JPG" && $imageFileType != "PNG" && $imageFileType != "JPEG"&& $imageFileType != "GIF" ) 
{
    

    echo " You have uploaded <b> " .$imageFileType ."  </b>file.</br> Sorry, only JPG, JPEG, PNG & GIF files are allowed!!";
}
else
{
//include_once 'config.php';     
            

        $conn = mysqli_connect('localhost','root','','hotel_managment');
        
        // Check connection
       if (!$conn) {
           die("Connection failed: " . mysqli_connect_error());
        }
    
 
$sql = "INSERT into gallery (hotel_id,des,image) VALUES ('".$hotel_id."','".$desc."','$imgContent')"; 
$result = mysqli_query($conn, $sql); 



        
        
        if($result){
            echo "<script>alert('File uploaded successfully.')</script>";
        }else{
            echo "File upload failed, please try again.";
        } 
        
    }
    }
    else{
         echo " You have uploaded <b> " .$imageFileType ."  </b>file.</br> Sorry, only JPG, JPEG, PNG & GIF files are allowed!!";
    }

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
	<title>Gallery</title>
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


	<?php include('header.php');?>
	<div class="ts-main-content">
		<?php include('sidebar.php');?>
		<div class="content-wrapper">
			<div class="container-fluid">

				<div class="row">
					<div class="col-md-12">
					
						<h2 class="page-title">Gallery</h2>
	
						<div class="row">
							<div class="col-md-12">
								<div class="panel panel-default">
									<div class="panel-heading">Gallery</div>
									<div class="panel-body">
										<form method="post" class="form-horizontal" enctype="multipart/form-data">
												
						<div class="hr-dashed"></div>
						<div class="form-group"></div>
						<div class="scroll">
							

						 <div class="form-group">
							<label class="col-sm-2 control-label">Hotel id </label>
							<div class="col-sm-8">
								<input type="text" class="form-control" name="hotel_id" >
							</div>
						</div>

						
						<div class="form-group">
							<label class="col-sm-2 control-label">Description</label>
							<div class="col-sm-8">
								<input type="text" class="form-control" name="description" >
			 				</div>	
						</div>

			 <div class="form-group">
				<label class="col-sm-2 control-label">Image</label>
				<div class="col-sm-8">
				<input type="file" class="form-control" name="image" >
			 </div>
			</div>
		
											<br><br><br><br>
											<div class="col-sm-8 col-sm-offset-2">
													
													<input class="btn btn-primary"  name="submit" type="submit" name="submit" value="Update Gallery">
													<a href="dashboard.php"><button class="btn btn-default" style="width: 120px;" name="cancel">Cancel</button></a>

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
