<?php
		include_once("header3.php");
	?>
<!DOCTYPE html>
<html>
<head>
	<title>Feedback</title>
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
<style type="text/css">
	.book-form input[type="email"]
	{
		width:50%;
	}
</style>
</head>
<body>
	
	<div class="book-form">
	<form name="form1">
	<div class="container">
	<fieldset>
		<legend align="center" style="border-color:orange;border-width: 5px;"><h2 class="w3l-inner-h-title">Feedback</h2></legend>
		<div style="color:white;font-weight: bold;text-align: center;position: relative;font-size: 20px;">
		We appericiate your feedback and hope to improve your future site experience.</div><br>
		<div style="color:blue;position: relative;">
			<label>Your Email Address :</label>
		</div>
		<div>
			<br><br><input type="Email" name="useremail" placeholder="Enter Email Here" style="width: 50%;">
		</div><br><br>
		<div style="color:blue;position: relative;">
			<label>please tell us what your feedback is about:</label>
		</div>
		<div>
			<br><br><select>
				<option>Select</option>
				<option>Website Feedback</option>
				<option>Hotel Services</option>
				<option>Reservation feedbak</option>
				<option>Hotel Experience Feedback</option>
				<option>Customer Service Feedback</option>
				<option>Others</option>
			</select>
		</div><br><br>
		<div style="color:blue;position: relative;">
			<label>Please share your feedback Below :</label><br>
		</div>
		<div>
			<br><textarea name="feedback" rows="auto" columns="auto" style="width: 500px;height: 200px;position: relative;" placeholder="Enter Feedback Here"></textarea> 
		</div>
		<div>
				<input type="submit" value="submit" style="margin-left:350px;width: 150px; ">			
		</div>
		<hr style="border-color: orange;border-width: 5px; ">
	</fieldset>
</div>
</form>
</div>
	<?php
		include_once("footer.php");
	?>
</body>
</html>