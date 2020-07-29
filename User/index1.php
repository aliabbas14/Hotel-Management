<!--
author: W3layouts
author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php include_once'header2.php' ?>
<!DOCTYPE html>
<html>
<head>
		<style type="text/css">
		
	.inner-header-agile {
    padding: 0 1em !important;
    position: relative;
    border-bottom: 1px solid rgba(255, 255, 255, 0.45);
}

	</style>
<title>Dreame hotel</title>


</head>
<body>
<!--/main-header-->
  <!--/banner-section-->
   

 
			
		<!--//header-w3l-->
			<!--/banner-info-->
			
  <!--/banner-section-->
 <!--//main-header-->
 
 	<div class="special featured">
		  <div class="container">
				   <div class="ab-w3l-spa">
				        <h3 class="tittle">Welcome to Our Hotel!</h3>
						<p>
Hotel Dreame is located in the heart of the historic center of Ahmedabad in an extremely characteristic quite and lively area within short walk distance to all sites and is surrounded by the extraordinary beauty of churches buildings shops and monuments. Dreame Hotel is part of a lovingly restored 1800 palace.
						<?php 
								include_once 'config.php';
								$da="select * from hotel_details";
								$ddd=mysqli_query($conn,$da);
								while ($r=mysqli_fetch_array($ddd)) {
									# code...
									echo$r['description'];
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
										<p>These Deluxe Rooms let you relax as you admire a beautiful view of the pool. Stay connected as you enjoy our free WiFi and watch movies with our 32-inch LCD TV and DVD player. Refresh yourself as you take a step into our rain shower.</p>
									</div>
								</div>
								<div class="col-md-3 w3_agileits_services_grid hvr-overline-from-center">
									<div class="w3_agileits_services_grid_agile">
										<div class="w3_agileits_services_grid_1">
											<img src="images/6.jpg" alt="service-img">
										</div>
										<h3>Luxury Room</h3>
										<p>superior luxury suite offers 52 sqm of well designed spaces with Rajasthani furniture and block printed furnishings. The Suites have well ventilated large air-conditioned bedrooms with attached bathroom facing the garden.</p>
									</div>
								</div>
								<div class="col-md-3 w3_agileits_services_grid hvr-overline-from-center">
									<div class="w3_agileits_services_grid_agile">
										<div class="w3_agileits_services_grid_1">
											<img src="images/7.jpg" alt="service-img">
										</div>
										<h3>Swimming Pool</h3>
										<p>Swimming Pool at The Dream, Ahmedabad
Located in a private courtyard, our pool is tiled with rich, blue ceramics and framed with chic, black stained teak decking. Drinks and snacks can be enjoyed at a poolside table, or by a sun lounger. </p>
									</div>
								</div>
								<div class="col-md-3 w3_agileits_services_grid hvr-overline-from-center">
									<div class="w3_agileits_services_grid_agile">
										<div class="w3_agileits_services_grid_1">
											<img src="images/8.jpg" alt="service-img">
										</div>
										<h3>Spa Care</h3>
										<p>The Dream Spa at The Dream, Ahmedabad is a luxurious haven of peace and tranquility, providing a perfect escape from busy schedules and the rush of a bustling city.There is also an infra-red sauna, and indoor and outdoor heated swimming pools.</p>
									</div>
								</div>
								<div class="clearfix"> </div>
							</div>
				<!-- //services -->
				  
				          <!-- <div class="agileinf-button">    <a class="read" href="single.html">
											Read More
							   </a>
							   </div>-->

		   </div>
    </div>
	<div class="featured-facility">
	  <!-- welcome -->
		
			<div class="spa-agile">
			<h3 class="tittle fea">Featured  Facilities</h3>
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
			</div>
	<!-- //welcome -->
	
	<!-- about-bottom -->
	<div class="about-bottom">
		<div class="col-md-6 w3l_about_bottom_left">
				  <div class="video-grid-single-page-agileits">
														<div data-video="44fbHx7P-t8" id="video"> <img src="images/watch.jpg" alt="" class="img-responsive" /> </div>
													</div>

			<div class="w3l_about_bottom_left_video" >
				<h4>watch our video</h4>
			</div>
		</div>
		<div class="col-md-6 w3l_about_bottom_right one" style="width:50%">
			<h3 class="tittle why">why choose us ?</h3>
			<p>Lorem Aenean aliquet nec mi et lacinia. Aliquam maximus iaculis mi, sed efficitur orci efficitur nec.</p>
			<div class="panel-group w3l_panel_group_faq" id="accordion" role="tablist" aria-multiselectable="true">
			  <div class="panel panel-default">
				<div class="panel-heading" role="tab" id="headingOne">
				  <h4 class="panel-title asd">
					<a class="pa_italic" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
					  <span class="glyphicon glyphicon-plus" aria-hidden="true"></span><i class="glyphicon glyphicon-minus" aria-hidden="true"></i>Restaurant & Banquets
					</a>
				  </h4>
				</div>
				<div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
				  <div class="panel-body panel_text">
					Lorem Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia.
				  </div>
				</div>
			  </div>
			  <div class="panel panel-default">
				<div class="panel-heading" role="tab" id="headingTwo">
				  <h4 class="panel-title asd">
					<a class="pa_italic collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
					  <span class="glyphicon glyphicon-plus" aria-hidden="true"></span><i class="glyphicon glyphicon-minus" aria-hidden="true"></i>Transportation Included
					</a>
				  </h4>
				</div>
				<div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
				   <div class="panel-body panel_text">
					Lorem Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia.
				  </div>
				</div>
			  </div>
			  <div class="panel panel-default">
				<div class="panel-heading" role="tab" id="headingThree">
				  <h4 class="panel-title asd">
					<a class="pa_italic collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
					  <span class="glyphicon glyphicon-plus" aria-hidden="true"></span><i class="glyphicon glyphicon-minus" aria-hidden="true"></i>The best care for our precious visitors
					</a>
				  </h4>
				</div>
				<div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
				   <div class="panel-body panel_text">
					Lorem Amet quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia.
				  </div>
				</div>
				
			  </div>
			  <div class="panel panel-default">
				<div class="panel-heading" role="tab" id="headingThree">
				  <h4 class="panel-title asd">
					<a class="pa_italic collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
					  <span class="glyphicon glyphicon-plus" aria-hidden="true"></span><i class="glyphicon glyphicon-minus" aria-hidden="true"></i>Pool Deluxe Room
					</a>
				  </h4>
				</div>
				<div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
				   <div class="panel-body panel_text">
					Lorem Amet quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia.
				  </div>
				</div>
				
			  </div>
			</div>
		</div>
		<div class="clearfix"> </div>
	</div>
<!-- //about-bottom -->
	<!-- about-bottom -->
	
	<!-- /plans -->
      <div class="plans-section" >
				 <div class="container">
				 <h3 class="w3l-inner-h-title">Rates and Booking</h3>
						<div class="priceing-table-main">
							<?php 
								include_once 'config.php';
								$r="select * from room_type";
								$data=mysqli_query($conn,$r);
								while ($row=mysqli_fetch_array($data)) {
									# code...
								
							?>
				 <div class="col-md-3 price-grid" style="width:33.33%">
					<div class="price-block agile">
						<div class="price-gd-top pric-clr1">
							<h4><?php echo$row['type'];?> ROOM</h4>
							<h3><span>Rs.</span><?php echo$row['rate'];?></h3>
							<h5>1 Night</h5>
						</div>
						<div class="price-gd-bottom">
							   <div class="price-list">
								
									
									 <h6 class="bed"><i class="fa fa-bed" aria-hidden="true"></i></h6>
							</div>
							<!--<div class="price-selet pric-sclr1">		    			   
<a href="check_avail.php" class="scroll" >Book Now</a>
							</div>-->
						</div>
					</div>
				</div>
<?php
	}
 ?>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
<!-- testimonials -->
	<div class="guests-agile">
			<h3 class="tittle">Our Guests</h3>
			<div class="w3_agileits_testimonial_grids">
				<section class="slider">
					<div class="flexslider">
						<ul class="slides">
							<?php 
								include_once 'config.php';
								$feed="select * from feedback where status=1";
								$feed1=mysqli_query($conn,$feed);
								$cont=0;
								while ($row=mysqli_fetch_array($feed1)) {
									# code...
				?>
							<li>
								<div class="w3_agileits_testimonial_grid">
								<i class="fa fa-quote-right" aria-hidden="true"></i>
									<p><?php echo$row['feedback']; ?></p>
									
									
								</div>
							</li>
							<?php		
								$cont++;
								if($cont==3){break;}
								}
							?>
							
						</ul>
					</div>
				</section>
				
				<!-- //flexSlider -->
			</div>
	</div>
<!-- //testimonials -->
	<?php include_once 'footer.php'; ?>


		<!-- //Dropdown-Menu-JavaScript -->


<!-- //for bootstrap working -->
</body>
</html>