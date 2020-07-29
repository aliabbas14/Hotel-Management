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
						<p>	<?php
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
										<p><?php echo $sc; ?></p>
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

			<div class="w3l_about_bottom_left_video">
				<h4>watch our video</h4>
			</div>
		</div>
		<div class="col-md-6 w3l_about_bottom_right one">
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
					<?php echo $f1; ?>
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
					<?php echo $f2; ?>
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
					<?php echo $f3; ?>
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
					<?php echo $f4; ?>
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
<a href="#ab" class="scroll" >Book Now</a>
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
								<a href="#ab" class="scroll" >Book Now</a>

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
								<a href="#ab" class="scroll" >Book Now</a>
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
								<a href="#ab" class="scroll" >Book Now</a>
							</div>
						</div>
					</div>
				</div>
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
							<li>
								<div class="w3_agileits_testimonial_grid">
								<i class="fa fa-quote-right" aria-hidden="true"></i>
									<p><?php echo $fb1; ?></p>
									<img src="images/admin.jpg" alt=" " class="img-responsive" />
									
								</div>
							</li>
							<li>
								<div class="w3_agileits_testimonial_grid">
								<i class="fa fa-quote-right" aria-hidden="true"></i>
									<p><?php echo $fb2; ?></p>
									<img src="images/admin2.jpg" alt=" " class="img-responsive" />
									
								</div>
							</li>
							<li>
								<div class="w3_agileits_testimonial_grid">
								<i class="fa fa-quote-right" aria-hidden="true"></i>
									<p><?php echo $fb3; ?></p>
									<img src="images/admin.jpg" alt=" " class="img-responsive" />
									
								</div>
							</li>
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