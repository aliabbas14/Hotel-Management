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
<title>About dream hotel</title>
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
  
  <!--/banner-section-->
 <!--//main-header-->
    <!-- breadcrumb -->
	<div class="w3_breadcrumb">
	<div class="breadcrumb-inner">	
			<ul>
				<li><a href="index.php">Home</a> <i> /</i></li>
				<li>About</li>
			</ul>
		</div>
	</div>
<!-- //breadcrumb -->
			<!--/content-inner-section-->
				<div class="w3_content_agilleinfo_inner">
					<div class="container">
					      <div class="inner-agile-w3l-part-head">
					            <h2 class="w3l-inner-h-title">About</h2>
							</div>
							<div class="ab-w3l-spa">
							 <img src="images/ab.jpg" alt="" class="img-responsive" />
								<p>
									<?php
	$connection=mysqli_connect("localhost","root","") or die("Unable to connect with Database");
	$select_db=mysqli_select_db($connection,"hotel_management") or die("Unable to connect with Database");
	$result=mysqli_query($connection,"select * from home");
	while($a=mysqli_fetch_array($result))
	{
		echo $a['wel_msg'];
		$dr=$a['delux_room'];
		$lr=$a['luxury_room'];
		$sp=$a['swimming_pool'];
		$sc=$a['spa_care'];
		$f1=$a['feature1'];
		$f2=$a['feature2'];
		$f3=$a['feature3'];
		$f4=$a['feature4'];
		$fb1=$a['feed1'];
		$fb2=$a['feed2'];
		$fb3=$a['feed3'];
		
	}


				
?>
								</p>
							</div>
								<!-- services -->
							<div class="w3_agileits_services_grids">
								<div class="col-md-3 w3_agileits_services_grid hvr-overline-from-center">
									<div class="w3_agileits_services_grid_agile">
										<div class="w3_agileits_services_grid_1">
											<img src="images/5.jpg" alt="service-img">
										</div>
										<h3>Deluxe Room</h3>
										<p><?php echo $dr; ?></p>
									</div>
								</div>
								<div class="col-md-3 w3_agileits_services_grid hvr-overline-from-center">
									<div class="w3_agileits_services_grid_agile">
										<div class="w3_agileits_services_grid_1">
											<img src="images/6.jpg" alt="service-img">
										</div>
										<h3>Luxury Room</h3>
										<p><?php echo $lr; ?></p>
									</div>
								</div>
								<div class="col-md-3 w3_agileits_services_grid hvr-overline-from-center">
									<div class="w3_agileits_services_grid_agile">
										<div class="w3_agileits_services_grid_1">
											<img src="images/7.jpg" alt="service-img">
										</div>
										<h3>Swimming Pool</h3>
										<p><?php echo $sp; ?></p>
									</div>
								</div>
								<div class="col-md-3 w3_agileits_services_grid hvr-overline-from-center">
									<div class="w3_agileits_services_grid_agile">
										<div class="w3_agileits_services_grid_1">
											<img src="images/8.jpg" alt="service-img">
										</div>
										<h3>Spa Care</h3>
										<p><?php echo $sc;?></p>
									</div>
								</div>
								<div class="clearfix"> </div>
							</div>
				<!-- //services -->
				
				           <div class="agileinf-button">    <a class="read" href="single.html">
											Read More
							   </a>
							   </div>

					</div>

		 	<div class="featured-facility">
	  <!-- welcome -->
		
			<div class="spa-agile">
			<h3 class="tittle fea">Featured  Services</h3>
				<div class="col-md-3 spa-grid">
					
						<i class="fa fa-cutlery" aria-hidden="true"></i>
					
						<h4>Restaurant </h4>
					
				</div>
				<div class="col-md-3 spa-grid">
					
					<i class="fa fa-glass" aria-hidden="true"></i>
					
					
						<h4>Bar</h4>
						
				
				</div>
				<div class="col-md-3 spa-grid lost">
					
						<i class="fa fa-wheelchair-alt" aria-hidden="true"></i>
					
						<h4>Gym</h4>
						
					
				</div>
				<div class="col-md-3 spa-grid lost">
					
					<i class="fa fa-car" aria-hidden="true"></i>
					
					
						<h4>Pick Up</h4>
						
				
				</div>
				<div class="clearfix"> </div>
			</div>
		
	<!-- //welcome -->
	</div>
</div>
	 <div class="team-section">
	 		      <div class="container">
				  <h3 class="tittle">Our Team</h3>
		      <div class="team-row" >
				<div class="col-md-3 team-grids" >
					<div class="team-img">
						<img class="img-responsive" src="images/ali.jpg" alt="" style="height:360px">
						<div class="captn">
							<ul class="top-links">
									<li><a href="#"><i class="fa fa-facebook"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter"></i></a></li>
									
									<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
								</ul>
						
						</div>
					</div>
					<div class="team-agile">
						<h4>AliAbbas</h4>
						
					</div>
				</div>
				<div class="col-md-3 team-grids">
					<div class="team-img">
						<img class="img-responsive" src="images/Arbaz.jpg" alt="" style="height:360px">
						<div class="captn">
							<ul class="top-links">
									<li><a href="#"><i class="fa fa-facebook"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter"></i></a></li>
									
									<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
								</ul>
						
						</div>
					</div>
					<div class="team-agile">
						<h4>Arbaz</h4>
						
					</div>
				</div>
				<div class="col-md-3 team-grids" >
					<div class="team-img" >
						<img class="img-responsive" src="images/nirav.jpg" alt="" style="height:360px">
						<div class="captn">
							<ul class="top-links">
									<li><a href="#"><i class="fa fa-facebook"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter"></i></a></li>
									
									<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
								</ul>
						
						</div>
					</div>
					<div class="team-agile">
						<h4>Nirav</h4>
						
					</div>
				</div>
				<div class="col-md-3 team-grids">
					<div class="team-img">
						<img class="img-responsive" src="images/chetan.jpg" alt="" >
						<div class="captn">
							<ul class="top-links">
									<li><a href="#"><i class="fa fa-facebook"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter"></i></a></li>
									
									<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
								</ul>
						
						</div>
					</div>
					<div class="team-agile">
						<h4>Chetan</h4>
						
					</div>
				</div>
				<div class="clearfix"> </div>
			</div> 
		</div>	
</div>			
	<!-- /plans -->
      <div class="plans-section">
				 <div class="container">
				 <h3 class="w3l-inner-h-title">Rates and Booking</h3>
						<div class="priceing-table-main">
				 <div class="col-md-3 price-grid">
					<div class="price-block agile">
						<div class="price-gd-top pric-clr1">
							<h4>SINGLE ROOM</h4>
							<h3><span>$</span>79</h3>
							<h5>1 Night</h5>
						</div>
						<div class="price-gd-bottom">
							   <div class="price-list">
								
									<ul>
											<li><i class="fa fa-star" aria-hidden="true"></i></li>
											<li><i class="fa fa-star-o" aria-hidden="true"></i></li>
											<li><i class="fa fa-star-o" aria-hidden="true"></i></li>
											<li><i class="fa fa-star-o" aria-hidden="true"></i></li>
											<li><i class="fa fa-star-o" aria-hidden="true"></i></li>
									
								     </ul>
									 <h6 class="bed"><i class="fa fa-bed" aria-hidden="true"></i></h6>
							</div>
							<div class="price-selet pric-sclr1">		    			   
								<a href="#" data-toggle="modal" data-target="#myModal1" >Book Now</a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-3 price-grid ">
					<div class="price-block agile">
						<div class="price-gd-top pric-clr2">
							<h4>THE COTTAGE</h4>
							<h3><span>$</span>119</h3>
							<h5>1 Night</h5>
						</div>
						<div class="price-gd-bottom">
							<div class="price-list">
								
									<ul>
									<li><i class="fa fa-star" aria-hidden="true"></i></li>
									<li><i class="fa fa-star" aria-hidden="true"></i></li>
									<li><i class="fa fa-star-o" aria-hidden="true"></i></li>
									<li><i class="fa fa-star-o" aria-hidden="true"></i></li>
									<li><i class="fa fa-star-o" aria-hidden="true"></i></li>
									
								</ul>
								<h6 class="bed two"><i class="fa fa-bed" aria-hidden="true"></i></h6>
								
							</div>
							<div class="price-selet pric-sclr2">
								<a href="#" data-toggle="modal" data-target="#myModal1" >Book Now</a>

							</div>
						</div>
					</div>
				</div>
				<div class="col-md-3 price-grid lost">
					<div class="price-block agile">
						<div class="price-gd-top pric-clr3">
							<h4>GUEST HOUSE</h4>
							<h3><span>$</span>159</h3>
							<h5>1 Night</h5>
						</div>
						<div class="price-gd-bottom">
							<div class="price-list">
								<ul>
									<li><i class="fa fa-star" aria-hidden="true"></i></li>
									<li><i class="fa fa-star" aria-hidden="true"></i></li>
									<li><i class="fa fa-star" aria-hidden="true"></i></li>
									<li><i class="fa fa-star-o" aria-hidden="true"></i></li>
									<li><i class="fa fa-star-o" aria-hidden="true"></i></li>
									
								</ul>
								<h6 class="bed three"><i class="fa fa-bed" aria-hidden="true"></i></h6>
							</div>
							<div class="price-selet pric-sclr3">
								<a href="#" data-toggle="modal" data-target="#myModal1" >Book Now</a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-3 price-grid wthree lost">
					<div class="price-block agile">
						<div class="price-gd-top pric-clr4">
							<h4>THE SEA VILLA</h4>
							<h3><span>$</span> 199</h3>
							<h5>1 Night</h5>
						</div>
						<div class="price-gd-bottom">
							<div class="price-list">
								<ul>
									<li><i class="fa fa-star" aria-hidden="true"></i></li>
									<li><i class="fa fa-star" aria-hidden="true"></i></li>
									<li><i class="fa fa-star" aria-hidden="true"></i></li>
									<li><i class="fa fa-star" aria-hidden="true"></i></li>
									<li><i class="fa fa-star-o" aria-hidden="true"></i></li>
									
								</ul>
								<h6 class="bed four"><i class="fa fa-bed" aria-hidden="true"></i></h6>
							</div>
							<div class="price-selet pric-sclr4">
								<a href="#" data-toggle="modal" data-target="#myModal1" >Book Now</a>
							</div>
						</div>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- Modal1 -->
						<div class="modal fade" id="myModal1" role="dialog">
							<div class="modal-dialog">
							<!-- Modal content-->
								<div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal">&times;</button>
										<h4>Reservation Form</h4>
											<div class="book-form-inner">

											   <form action="#" method="post">
													<div class="col-md-6 form-date-w3-agileits1">
														<label><i class="fa fa-user" aria-hidden="true"></i> Name :</label>
														<input type="text" name="name" placeholder="Your name" required="">
													</div>
													<div class="col-md-6 form-date-w3-agileits1 second-agile1">
														<label><i class="fa fa-envelope" aria-hidden="true"></i> Email :</label>
														<input type="email" name="email" placeholder="Your email" required="">
													</div>
													  <div class="col-md-6 form-date-w3-agileits">
																<label><i class="fa fa-calendar" aria-hidden="true"></i> Arrival Date :</label>
																<input  id="datepicker" name="Text" type="text" value="mm/dd/yyyy" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'mm/dd/yyyy';}" required="">
															
															</div>
												<div class="col-md-6 form-time-w3layouts second-agile">
														<label><i class="fa fa-clock-o" aria-hidden="true"></i> Time :</label>
														<input type="time">
												</div>
												<div class="col-md-6 form-date-w3-agileits">
															<label><i class="fa fa-calendar" aria-hidden="true"></i> Departure Date :</label>
																<input  id="datepicker1" name="Text" type="text" value="mm/dd/yyyy" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'mm/dd/yyyy';}" required="">
																
															</div>
													<div class="col-md-6 form-time-w3layouts1 second-agile1">
															<label><i class="fa fa-clock-o" aria-hidden="true"></i> Time :</label>
															<input type="time">
													</div>
													<div class="col-md-6 form-left-agileits-w3layouts1 bottom-w3ls1">
															<label><i class="fa fa-home" aria-hidden="true"></i> Choose a Room :</label>
															<select class="form-control">
																<option></option>
																<option>Standard Double Room</option>
																<option>Standard Family Room</option>
																<option>Garden Family Room</option>
																<option>Deluxe Double Room</option>
																<option>Executive Junior Suite</option>
																<option>Maisonette</option>
															</select>
													</div>
													<div class="col-md-6 form-left-agileits-w3layouts1 second-agile1">
															<label><i class="fa fa-users" aria-hidden="true"></i> No.of People :</label>
															<select class="form-control">
																<option></option>
																<option>1 Person</option>
																<option>2 People</option>
																<option>3 People</option>
																<option>4 People</option>
																<option>5 People</option>
																<option>More</option>
															</select>
													</div>
													<div class="clearfix"> </div>
													<div class="make wow shake" data-wow-duration="1s" data-wow-delay=".5s">
														  <input type="submit" value="Make a Reservation">
													</div>
											</form>
								</div>
									</div>
								</div>
							</div>
						</div>
						<!-- //Modal1 -->
			
			<!--//content-inner-section-->

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