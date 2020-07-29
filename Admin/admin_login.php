<?php
session_start();
$a="";
if(isset($_POST["submit"]))
{
		include 'config.php';
		$n=$_POST['user_name'];
		$p=$_POST['password'];
		$result =mysqli_query($conn,"select * from admin_details where username='".$n."'");
		$row=mysqli_fetch_array($result,MYSQLI_BOTH);
		if($p==$row['password'])
		{
			
			$_SESSION['A_login']=$n;

			header('location:dashboard.php');
		}
		else
		{
			echo "<script>alert('fail')</script>";
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
	<title>Admin Login</title>
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
</head>
<body>
	<?php include('header.php');?>
	<div class="ts-main-content">
		<?php include('sidebar.php');?>
		<div class="content-wrapper">
			<div class="container-fluid">

				<div class="row">
					<div class="col-md-12">
					
						<h2 class="page-title">Admin Login <?php echo $a; ?> </h2>
	
						<div class="row">
							<div class="col-md-12">
								<div class="panel panel-default">
									<div class="panel-heading">	 Admin Login  </div>
									<div class="panel-body">
										<form method="post" class="form-horizontal">
											
											<div class="hr-dashed"></div>
											<div class="form-group">
												<label class="col-sm-2 control-label">Enter User Name </label>
												<div class="col-sm-8">
													<input type="text"  name="user_name"  class="form-control" required> </div>
											</div>
											<div class="form-group">
												<label class="col-sm-2 control-label">Enter Password</label>
												<div class="col-sm-8">
												<input type="password" class="form-control" name="password" id="cns" value="" required="required">
						 
												</div>
											</div>



												<div class="col-sm-8 col-sm-offset-2">
													
													<a href="admin_profile.php?id=<?php echo $row['username'];?>"><input class="btn btn-primary" type="submit" name="submit" value="Log in">
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
