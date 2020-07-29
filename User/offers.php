<?php
	$date=date('Y-m-d');
	$conn=mysqli_connect("localhost","root","") or die(mysqli_error($conn));
	mysqli_select_db($conn,"hotel_managment") or die(mysqli_error($conn));

	$query="select * from offer_details";
	$result=mysqli_query($conn,$query);

	while ($row=mysqli_fetch_array($result)) {
		if ($row['offer_end'] < $date) {
			$query2="update offer_details set status=0 where offer_id=".$row['offer_id'];
			$result2=mysqli_query($conn,$query2);
		}
	}
?>



<!--
author: W3layouts
author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->

<?php include 'header3.php'; ?>
<!DOCTYPE html>
<html>
<head>
<title>Offers</title>
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
<!--/main-header-->
<?php
include('config.php');
$qry="select * from offer_details";
$result=mysqli_query($conn,$qry);
?>

  
  <!--/banner-section-->
 <!--//main-header-->
    <!-- breadcrumb -->
	<div class="w3_breadcrumb">
	<div class="breadcrumb-inner">	
			<ul>
				<li><a href="index.php">Home</a> <i> /</i></li>
				<li>Offers</li>
			</ul>
		</div>
	</div>
<!-- //breadcrumb -->
			<!--/content-inner-section-->
				<div class="w3_content_agilleinfo_inner">
					<div class="container">
					      <div class="inner-agile-w3l-part-head">
					            <h2 class="w3l-inner-h-title">Offers</h2>
							</div>
							

							<?php
								$conn=mysqli_connect("localhost","root","") or die(mysqli_error($conn));
								mysqli_select_db($conn,"hotel_managment") or die(mysqli_error($conn));

								$query="select offer_desc,promocode from offer_details where status=1";
								$result=mysqli_query($conn,$query);

								while ($row=mysqli_fetch_array($result)) {
									?>


										<div class="w3_agileits_services_grids">
								<div class="col-md-3 w3_agileits_services_grid hvr-overline-from-center">
									<div class="w3_agileits_services_grid_agile">
										<div class="w3_agileits_services_grid_1">
											<img src="images/5.jpg" alt="service-img">
										</div>
										
										<h3>Promocode: <?php echo $row['promocode']; ?></h3>
										<p><?php echo $row['offer_desc']; ?>
										</p>
										
									</div>
								</div>
							</div>







									
						<?php		}

							?>

								<!-- services -->
						
							<!--	<div class="col-md-3 w3_agileits_services_grid hvr-overline-from-center">
									<div class="w3_agileits_services_grid_agile">
										<div class="w3_agileits_services_grid_1">
											<img src="images/6.jpg" alt="service-img">
										</div>
										<?php 
										$row2=mysqli_fetch_array($result);?>
										<h3>Single Room</h3>
										<p>Upto <?php echo $row2['discount']; ?> % discount using promocode <?php echo $row2['promocode'];?>
										</p>
										<div class="agileinf-button"><a class="read" href="readmore.php">Read More</a></div>
									</div>
								</div>
								<div class="col-md-3 w3_agileits_services_grid hvr-overline-from-center">
									<div class="w3_agileits_services_grid_agile">
										<div class="w3_agileits_services_grid_1">
											<img src="images/7.jpg" alt="service-img">
										</div>
										<?php 
										$row3=mysqli_fetch_array($result);?>
									
										<h3>Standard Room</h3>
											<p>Upto <?php echo $row3['discount']; ?> % discount using promocode <?php echo $row3['promocode'];?>
										</p>
										<div class="agileinf-button"><a class="read" href="readmore.php">Read More</a></div>
									</div>
								</div>
								<div class="col-md-3 w3_agileits_services_grid hvr-overline-from-center">
									<div class="w3_agileits_services_grid_agile">
										<div class="w3_agileits_services_grid_1">
											<img src="images/8.jpg" alt="service-img">
										</div>
											<?php 
										$row4=mysqli_fetch_array($result);?>
									
										<h3>Double Room</h3>
											<p>Upto <?php echo $row4['discount']; ?> % discount using promocode <?php echo $row4['promocode'];?>
										</p>
										
										<div class="agileinf-button"><a class="read" href="readmore.php">Read More</a></div>
									</div>-->

								</div>
								<div class="clearfix"> </div>
							</div>
				<!-- //services -->
				
				           

					</div>

		 	</div>
		 
		 
 <!-- Footer -->
 <?php include_once 'footer.php'; ?>
 
		<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
	

<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>

<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},900);
				});
			});
</script>
 <script type="text/javascript">
						$(document).ready(function() {
							/*
							var defaults = {
					  			containerID: 'toTop', // fading element id
								containerHoverID: 'toTopHover', // fading element hover id
								scrollSpeed: 1200,
								easingType: 'linear' 
					 		};
							*/
							
							$().UItoTop({ easingType: 'easeOutQuart' });
							
						});
					</script>
<!--end-smooth-scrolling-->
<!--js for bootstrap working-->
	<script src="js/bootstrap.js"></script>
<!-- //for bootstrap working -->
</body>
</html>