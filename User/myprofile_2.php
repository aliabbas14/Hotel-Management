<?php
	$a="readonly";
	if(isset($_POST['edit']))
	{
		
		$a="";
	}

?>
<?php include_once 'header3.php';?>
<html>

<head>
	<style type="text/css">
		.text{
				    border: 1px solid #e4e4e4;
    outline: none;
    -webkit-appearance: none;
    background: none;
    font-size: 15px;
    letter-spacing: 1px;
    color: #555;
    width: 100%;
    background: #f5f5f5;
    padding: 1em 1em;
		}

		.button{

			margin-top: 0.5em;
    font-size: 18px;
    color: rgb(255, 255, 255);
    -webkit-appearance: none;
    text-transform: uppercase;
    letter-spacing: 1px;
    border-width: initial;
    border-style: none;
    border-color: initial;
    border-image: initial;
    padding: 0.8em 2em;
    outline: none;
    background: rgb(227, 66, 52);
    transition: all 0.5s ease;
		}

	</style>
<title>Resort a Hotel Category Flat Bootstrap Responsive Website Template | About :: w3layouts</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Resort Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" property="" />

<link rel="stylesheet" type="text/css" href="css/zoomslider.css" />
<link rel="stylesheet" type="text/css" href="css/style.css" />
<link href="css/font-awesome.css" rel="stylesheet"> 
<script type="text/javascript" src="js/modernizr-2.6.2.min.js"></script>
<!--/web-fonts-->
<link href="//fonts.googleapis.com/css?family=Dosis:200,300,400,500,600" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i" rel="stylesheet">
<!--//web-fonts-->
</head>
	
	<body>
		<div class="w3_breadcrumb">
	<div class="breadcrumb-inner">	
			<ul>
				<li><a href="index.html">Home</a> <i> /</i></li>
				<li>My Profile</li>
			</ul>
		</div>
	</div>

	<div class="inner-agile-w3l-part-head">
					            <h2 class="w3l-inner-h-title" style="margin-top: 3%">My Profile</h2>
							</div>

		<div>	
		<div>	
			<img src="Screenshot.png" height="300px" width="300px" style="border-radius:100%;margin-left:39%;margin-top:2%;margin-bottom:2%"	>
		</div>

		<div style="margin-left: 34%;margin-top: 1%">
			<input type="file" name="" value="Choose Photo" class="button">
		</div>

		<div>	
			<form method="post">	
				<div style="margin-top:3% ">
				<div style="float:left;margin-left:5%">	
				<label>Name</label>
				<div><input type="text" name="" placeholder="Name" class="text" style="width: 180%" <?php echo $a; ?>></div>
				</div>

				<div style="margin-left:68%">	
				<label>Gender</label><br>
				<div><input type="radio" name="a" readonly checked>Male
				<input type="radio" name="a" readonly>Female</div>
				</div>
					</div>

				<div>		
				<div style="margin-top: 2%;float:left;margin-left:-15.7%">	
				<label>E-mail</label>
				<div><input type="email" name="" placeholder="E-mail" class="text" style="width: 180%" <?php echo $a; ?>></div>
				</div>

				<div style="margin-left: 73%;margin-top: 1%;">	
					<label style="margin-left: -19%">Phone</label>
				<div><input type="tel" name="" placeholder="Phone" class="text" style="width: 100%;margin-left: -19%" <?php echo $a; ?>></div>
				</div>

				</div>

				<div>		
				<div style="    margin-top: 3%;margin-left:5%">	 
				<label>Password</label>
				<div><input type="password" name="" placeholder="Password" class="text" style="width: 29.5%" <?php echo $a; ?>></div>
				</div>

				

				</div>
				<div style="margin-bottom: 2%">
				<div style="float: left;margin-left: 38%">
					<input type="submit" value="Submit" name="" class="button">
				</div>
				<div style="margin-left: 53% ">
					<input type="submit" value="Edit" name="edit" class="button" >
				</div>
</div>


			</form>
		</div>
		</div>
	</body>
</html>
<?php include_once 'footer.php';?>
