<?php
	$room= array();
	$roomno= array();
	$m=0;
	$arra= array();

	$curdate=date('Y-m-d');

	$conn=mysqli_connect("localhost","root","") or die(mysqli_error($conn));
	mysqli_select_db($conn,"hotel_managment") or die(mysqli_error($conn));

	$q="select room_no,booking_id,check_out_date from booking_details";
	$r=mysqli_query($conn,$q);

	while ($p=mysqli_fetch_array($r))
	{
		if($p['check_out_date'] < $curdate)
		{
			$arra[$m]=$p['booking_id'];
			$roomno[$m]=$p['room_no'];
			$m++;
		}
	}

	for ($o=0; $o < sizeof($arra) ; $o++)
	{ 
		$q2="INSERT INTO booking_history(`payment_id`, `room_type_id`, `room_no`, `user_id`, `offer_id`, `check_in_date`, `check_out_date`, `name`, `phone_no`, `country`, `city`, `address`, `pincode`, `email`, `gender`) SELECT `payment_id`, `room_type_id`, `room_no`, `user_id`, `offer_id`, `check_in_date`, `check_out_date`, `name`, `phone_no`, `country`, `city`, `address`, `pincode`, `email`, `gender` FROM `booking_details` where booking_id=".$arra[$o];

		$r2=mysqli_query($conn,$q2);

		$q4="update payment_details set booking_id=null where booking_id=".$arra[$o];
		//echo $q4;
		$r4=mysqli_query($conn,$q4);

		$q3="delete from booking_details where booking_id=".$arra[$o];
		//echo $q3;
		$r3=mysqli_query($conn,$q3);
	}
	


	$q5="select room_no from booking_details";
	$r5=mysqli_query($conn,$q5);


	$flag=0;
	for ($j=0; $j < sizeof($roomno); $j++) { 

		while ($row60=mysqli_fetch_array($r5)) {
			if ($roomno[$j]==$row60['room_no']) {
				$flag=1;
				break;
			}
		}

		if ($flag==0) {
			$room[$j]=$roomno[$j];
		}

		$flag=0;
		
	}

	$room=array_values($room);
	//print_r($room);

	for ($l=0; $l <sizeof($room) ; $l++) { 
		$query7="update rooms set status=0 where room_no=".$room[$l];
		$result7=mysqli_query($conn,$query7);
	}
?>



<?php
$left=0;

	$conn=mysqli_connect("localhost","root","") or die(mysqli_error($conn));
	mysqli_select_db($conn,"hotel_managment") or die(mysqli_error($conn));
		date_default_timezone_set('Asia/Kolkata');
	  $in=date('Y-m-d');
      $out=date('Y-m-d',strtotime("+1 day"));
      $room=1;
	  $type="Single";


	   $query="SELECT room_no FROM rooms INNER JOIN room_type on rooms.room_type_id=room_type.room_type_id WHERE status=0 AND active=1 AND room_type.type='".$type."'";

     
      $result=mysqli_query($conn,$query);

        $u=mysqli_num_rows($result);
        //    echo "<script type='text/javascript'>alert('$u')</script>";

      if(mysqli_num_rows($result) >= $room)
      {
         //echo "<script type='text/javascript'>alert('$room room available in $type type')</script>";
          $row=mysqli_fetch_array($result);
          $x=$row['room_no'];
      }
      else
      {
          
            $z=mysqli_num_rows($result);
      
            $left=$room-$z;



            $query2="SELECT * from booking_details INNER JOIN room_type WHERE booking_details.room_type_id=room_type.room_type_id AND room_type.type='".$type."'";
          
            $result2=mysqli_query($conn,$query2);

            while($row2=mysqli_fetch_array($result2))
            {

                $check_in_book=$row2['check_in_date'];
                $check_out_book=$row2['check_out_date'];

                if(($in >= $check_in_book && $in<= $check_out_book) || ($out >= $check_in_book && $out<= $check_out_book))
                {
                      
                }
                elseif ($in==$check_in_book || $in==$check_out_book || $out==$check_in_book || $out==$check_out_book) {
                	
                }
                else
                {
                  $left--;
                  if($left==0)
                  {
                    break;
                  }
                    
              }
            
            }

          /*  if($left==0)
                 // echo "<script type='text/javascript'>alert('$room room available in $type type')</script>";
            else
            {
                //echo "<script type='text/javascript'>alert('$left room not available in $type type')</script>";
            }*/

            if($room==$left)
           	{?>
           		<style type="text/css">
           			#ro{
           				display: none;
           			}
           			#sin{
           				display: none;
           			}
           		</style>
           		<?php
           	}


           	/* if($room==$left)
           	{?>
           		<script type="text/javascript">
           			alert("fdvb");
           			document.getElementById('bookroom').innerHTML="Not available";
           		</script>
           		<?php
           	}*/

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
<title>Check Availibility</title>
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
	.button
	{
		text-transform: capitalize;
    background: #ff401b;
    color: #FFFFFF;
    padding: .8em 2em;
    border: none;
    font-size: 1em;
    outline: none;
    -webkit-transition: 0.5s all;
    -moz-transition: 0.5s all;
    -o-transition: 0.5s all;
    -ms-transition: 0.5s all;
    text-transform: uppercase;
    width: 100%;
    font-weight: 600;
    margin-top: 2em;
    -webkit-appearance: none;	
	}
</style>
</head>
<body>
<!--/main-header-->
  
  <!--/banner-section-->
 <!--//main-header-->
    <!-- breadcrumb -->

    <script type="text/javascript">
	function fetchdate() {
		 var input = document.getElementById("in").value;
    		document.getElementById("out").min=input;
    		}
	
</script>
	<div class="w3_breadcrumb">
	<div class="breadcrumb-inner">	
			<ul>
				<li><a href="index1.php">Home</a> <i> /</i></li>
				<li>Check Availibility</li>
			</ul>
		</div>
	</div>
<!-- //breadcrumb -->
			<!--/content-inner-section-->
				<div class="w3_content_agilleinfo_inner">
					<div class="container">
					      <div class="inner-agile-w3l-part-head">
					            <h2 class="w3l-inner-h-title">Check Availibility</h2>
							</div>
							<div class="ab-w3l-spa">
								<form method="post">
		<div class="book-form">

		<div class="col-md-6 form-date-w3-agileits"><label>
			<i class="fa fa-calendar" aria-hidden="true"></i>
		Check-In Date</label>
		<input type="date" id="in" name="in" class="hasDatepicker" value="<?php echo date('Y-m-d'); ?>" min="<?php echo date('Y-m-d'); ?>" onchange="fetchdate()"></div>

		<div class="col-md-6 form-date-w3-agileits"><label><i class="fa fa-calendar" aria-hidden="true"></i>Check-Out Date</label>
		<input type="date" id="out" name="out" value="<?php echo date('Y-m-d',strtotime("+1 day")); ?>" min="<?php echo date('Y-m-d',strtotime("+1 day")); ?>"></div>

		<div class="col-md-6 form-date-w3-agileits"><label><i class="fa fa-home" aria-hidden="true"></i>Room-Type</label>
			
			<select name="type" class="form-control">
				<?php 
					require_once 'config.php';
					$a="select room_type_id,type from room_type";
					$result3=mysqli_query($conn,$a);
					while ($row3=mysqli_fetch_array($result3)) 
					{
						echo "<option value='".$row3['type']."'>".$row3['type']."</option>";
					}
					
				?>
			</select>
		</div>

		<div class="col-md-6 form-date-w3-agileits"><label><i class="fa fa-users" aria-hidden="true"></i>Rooms</label>
		
			<select name="room" class="form-control">
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
				<option value="4">4</option>
				<option value="5">5</option>
				<option value="6">6</option>
			</select>
		</div>

		<div class="make wow shake"><button name="available" class="button">Check Availibility</button></div>

		</div>
	</form>	


								
							</div>
								<!-- services -->

								<?php
						require_once 'config.php';

						$u="select rate,image,features from room_type where type='Single'";
						$result4=mysqli_query($conn,$u);

						$row4=mysqli_fetch_array($result4);

						$img=base64_encode($row4['image']);
					?>

							<div class="w3_agileits_services_grids" id="sin">
								<h3 class="tittle fea" id="ro">Rooms</h3>

								<div class="col-md-3 w3_agileits_services_grid hvr-overline-from-center"  style="    width: 63%;
    margin-left: 17%;">
									<div class="w3_agileits_services_grid_agile">

										<div class="w3_agileits_services_grid_1">
											<img src="data:text/html;base64,<?php echo $img; ?>" alt="service-img">
										</div>
										<h3>Single Type</h3>
										<p><?php echo $row4['features']?></p>
										<p><?php echo $row4['rate']?></p>
										<p>Available</p>

										<!--<button class="button">Book</button>-->

										<a href="details.php?type=Single&room=1&in=<?php echo $in;?>&out=<?php echo $out;?>"><button class="button" id="bookroom">Book Rooms</button></a>
									</div>
								</div>
							</div>

							<?php	if($room==$left)
           	{	//echo "<script type='text/javascript'>alert('called')</script>";	
           		?>
							<div class="w3_agileits_services_grids" id="s">
							
								<h3 class="tittle fea" id="r" >Rooms not available</h3>

							</div>
							<?php
           	}?>

			<!--<?php	if($room==$left)
           	{	echo "<script type='text/javascript'>alert('called')</script>";	
           		?>
           		<style type="text/css">
           			#r{
           				display: block;
           			}
           			#s{
           				display: block;
           			}
           		</style>
           		<?php
           	}?>-->





					

							<div class="w3_agileits_services_grids" >


									<?php
						function divison($roomstypes,$no,$total,$indate,$outdate)
						{


							//echo "<script type='text/javascript'>alert('called')</script>";
														$conn=mysqli_connect("localhost","root","") or die(mysqli_error($conn));
	mysqli_select_db($conn,"hotel_managment") or die(mysqli_error($conn));

						$u="select rate,image,features from room_type where type='".$roomstypes."'";
						$result4=mysqli_query($conn,$u);

						$row4=mysqli_fetch_array($result4);

						$img=base64_encode($row4['image']);
						
					?>
					<h3 class="tittle fea"  id="croom">Rooms</h3>

								<div id="croomtypes" class="col-md-3 w3_agileits_services_grid hvr-overline-from-center" style="    width: 63%;
    margin-left: 17%;display: block;">
									<div class="w3_agileits_services_grid_agile">

										<div class="w3_agileits_services_grid_1">
											<img src="data:text/html;base64,<?php echo $img; ?>" alt="service-img">
										</div>
										<h3><?php echo $roomstypes; ?> Type</h3>
										<p><?php echo $row4['features']?></p>
										<p>Rs. <?php echo $row4['rate']?>/night</p>
										<p><?php echo $no; ?> room Available out of <?php echo $total; ?></p>
										<a href="details.php?type=<?php echo $roomstypes;?>&room=<?php echo $no;?>&in=<?php echo $indate;?>&out=<?php echo $outdate;?>"><button class="button" <?php if($no==0){echo "disabled";} ?> >Book <?php echo $no; ?> Rooms</button></a>
									</div>
								</div>
								<?php
							}
						?>

								
							</div>
				<!-- //services -->
				
				          <!-- <div class="agileinf-button">    <a class="read" href="single.html">
											Read More
							   </a>
							   </div>

					</div>

		 	<div class="featured-facility">
	  <!-- welcome 
		
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
		
	<!-- //welcome 
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
	<!-- /plans 
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
	<!-- Modal1 
						<div class="modal fade" id="myModal1" role="dialog">
							<div class="modal-dialog">
							<!-- Modal content
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
 <?php// include_once 'footer.php'; ?>
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









<?php
  if(isset($_POST['available']))
  { ?>

  		<style type="text/css">
           			#ro{
           				display: none;
           			}
           			#sin{	
           				display: none;
           			}
           		</style>	

<?php

     $left=0;
  	$conn=mysqli_connect("localhost","root","") or die(mysqli_error($conn));
	mysqli_select_db($conn,"hotel_managment") or die(mysqli_error($conn));

      $checkin=$_POST['in'];
      $checkout=$_POST['out']; 
      $rooms=$_POST['room']; 
	  $room_type=$_POST['type'];

	 // echo "<script type='text/javascript'>alert('$checkin')</script>";
	  //echo "<script type='text/javascript'>alert('$checkout')</script>";

       $query="SELECT room_no FROM rooms INNER JOIN room_type on rooms.room_type_id=room_type.room_type_id WHERE status=0 AND active=1 AND room_type.type='".$room_type."'";

     
      $result=mysqli_query($conn,$query);

        $u=mysqli_num_rows($result);
        //    echo "<script type='text/javascript'>alert('$u')</script>";

      if(mysqli_num_rows($result) >= $rooms)
      {
        // echo "<script type='text/javascript'>alert('$rooms room available in $room_type type')</script>";
         // $row=mysqli_fetch_array($result);
          //$x=$row['room_no'];
      }
      /*else
      {
          
            $z=mysqli_num_rows($result);
      
            $left=$rooms-$z;



            $query2="SELECT * from booking_details INNER JOIN room_type WHERE booking_details.room_type_id=room_type.room_type_id AND room_type.type='".$room_type."'";
          
            $result2=mysqli_query($conn,$query2);

            while($row2=mysqli_fetch_array($result2))
            {

                $check_in_book=$row2['check_in_date'];
                $check_out_book=$row2['check_out_date'];

                if(($checkin >= $check_in_book && $checkin<= $check_out_book) || ($checkout >= $check_in_book && $checkout<= $check_out_book))
                {
                      
                }
                else
                {
                  $left--;
                  if($left==0)
                  {
                    break;
                  }
                    
              }
            
            }

           /* if($left==0)
                 // echo "<script type='text/javascript'>alert('$rooms room available in $room_type type')</script>";
            else
            {
               // echo "<script type='text/javascript'>alert('$left room not available in $room_type type')</script>";
          //  }


      }*/










 else
      {
      	$i=0;
 $room_array_not_available= array();
 $array_delete= array();
 $room_array= array();
          
            $z=mysqli_num_rows($result);
            //echo "<script type='text/javascript'>alert('Status 0 wali number of rows $z')</script>";
            if ($z>0) {

            	 while ($row5=mysqli_fetch_array($result))
           		{
           			$room_array[$i]=$row5['room_no'];
           			$i++;
           		}
            	
            }

          /*  for ($u=0; $u <sizeof($room_array) ; $u++) { 
            	// echo "<script type='text/javascript'>alert('Status 0 wala room no $room_array[$u]')</script>";
            }*/
      
            $left=$rooms-$z;

           	 //$query2="SELECT * from booking_details INNER JOIN room_type ON booking_details.room_type_id=room_type.room_type_id INNER JOIN rooms on room_type.room_type_id=rooms.room_type_id WHERE rooms.active=1 AND room_type.type='".$room_type."'";

            $query2="SELECT * from booking_details INNER JOIN room_type WHERE booking_details.room_type_id=room_type.room_type_id AND room_type.type='".$room_type."'";
          
            $result2=mysqli_query($conn,$query2);

         /*   while($row2=mysqli_fetch_array($result2))
            {

                $check_in_book=$row2['check_in_date'];
                $check_out_book=$row2['check_out_date'];

                if(($checkin >= $check_in_book && $checkin <= $check_out_book) || ($checkout >= $check_in_book && $checkout <= $check_out_book))
                {
                      
                }
                else
                {
                	$room_array[$i]=$row2['room_no'];
           			$i++;
                  $left--;
                  if($left==0)
                  {
                    break;
                  }
                    
              }
            
            }*/
            $k=0;

             while($row2=mysqli_fetch_array($result2))
            {
            	// echo '<script type="text/javascript">alert("status 1 wala rooms $row2['room_no']")</script>';
            	 	//echo "<script type='text/javascript'>alert('status 1 wala rooms ".$row2['room_no']."')</script>";


                $check_in_book=$row2['check_in_date'];
                $check_out_book=$row2['check_out_date'];

                // echo "<script type='text/javascript'>alert('status 1 wala ni checkin date $check_in_book')</script>";
                //  echo "<script type='text/javascript'>alert('status 1 wala ni checkin date $check_out_book')</script>";

                if(($checkin >= $check_in_book && $checkin <= $check_out_book) || ($checkout >= $check_in_book && $checkout <= $check_out_book))
                {
                	// echo "<script type='text/javascript'>alert('room_array_not_available con wala room no ".$row2['room_no']."')</script>";
                    $room_array_not_available[$k]=$row2['room_no'];  
                    $k++;
                }
                else
                {
                	 //echo "<script type='text/javascript'>alert('apdi taarik ma available ".$row2['room_no']."')</script>";
                	$room_array[$i]=$row2['room_no'];
           			$i++;
                  
                    
              }
            
            }


           /* for ($m=0; $m < sizeof($room_array); $m++)
            { 
            	 for ($n=0; $n < sizeof( $room_array_not_available); $n++)
           		 { 
            			if($room_array[$m]==$room_array_not_available[$n])
            			{

            			}
            	 }
            }*/

            	$n=0;
            for ($m=0; $m < sizeof($room_array_not_available); $m++)
            { 
            	$array_delete[$n]=array_search($room_array_not_available[$m],$room_array);
            	$n++;
            }

            for ($p=0; $p < sizeof($array_delete); $p++)
            { 	
            	unset($room_array[$array_delete[$p]]);
            }

            array_values($room_array);

            $array_size=sizeof($room_array);

           /* for ($e=0; $e <sizeof($room_array) ; $e++) { 
            	 echo "<script type='text/javascript'>alert('apdi taarik ma available badha rooms final $room_array[$e]')</script>";
            }*/
            

           	if($array_size>=$rooms)
            {
            	$left=0;
            	/*for ($j=0; $j < $rooms; $j++) {

            		$l=$room_array[$j];

            		$query7="INSERT INTO `booking_details`(`room_type_id`, `room_no`, `check_in_date`, `check_out_date`, `name`, `phone_no`, `country`, `city`, `address`, `pincode`, `email`, `gender`) VALUES ('".$room_id."','".$l."','".$checkin."','". $checkout."','".$name."','".$no."','".$country."','".$city."','".$add."','".$pin."','".$mail."','".$gen."')";
            		
           
            			 $result7=mysqli_query($conn,$query7);
            			  $query6="update rooms set status=1 where room_no=".$l;
       					  $result6=mysqli_query($conn,$query6);
            	}

            	if ($result7==1 && $result6==1) {
            			echo "<script type='text/javascript'>alert('Booking Successful')</script>";
            			//header("Location:payment.php?type=".$room_type."&rooms=".$rooms."&nights=".$night);
            			echo "<script>location.href='payment.php?type=".$room_type."&rooms=".$rooms."&nights=".$night."'</script>";
            	}

            	else
            	{
            		echo "<script type='text/javascript'>alert('Booking Unsuccessful')</script>";
            	}*/
            	
            }
            else
            {
            	//echo "<script type='text/javascript'>alert('Rooms not available')</script>";	
            }

           /* if($left==0)
                 // echo "<script type='text/javascript'>alert('$rooms room available in $room_type type')</script>";
            else
            {
               // echo "<script type='text/javascript'>alert('$left room not available in $room_type type')</script>";
            }*/


     }















divison($room_type,$rooms-$left,$rooms,$checkin,$checkout);
    /*  if($rooms==$left)
           	{?>
           		<style type="text/css">
           			#croom{
           				display: none;
           			}
           			#croomtypes{
           				display: none;
           			}
           		</style>
           		<?php
           	}

       else
       {
       		divison($room_type,$rooms-$left,$rooms);
       }*/
  } 
  

?>

<!DOCTYPE html>
<html>
<head>
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
<!-- Footer -->
	<div class="w3l-footer" style="    margin-top: 95%;
    width: 132%;
    margin-left: -16%;">
		<div class="container">
         <div class="footer-info-agile">
				<div class="col-md-2 footer-info-grid links">
					<h4>Quick links</h4>
					<ul>
						       <li><a href="index1.php">Home</a></li> 
								<li><a href="about.php">About</a></li> 
								<li><a href="tac1.php">Terms & Condition</a></li> 
								<li><a href="privacypolicy.php">Privacy</a></li> 
								<li><a href="contact.php">Contact</a></li> 
					</ul>
				</div>
				<div class="col-md-3 footer-info-grid address">
					<h4>Address</h4>
					<address>
						<ul>
							<li>C.G. Road</li>
							<li>Ahmedabad,Gujarat</li>
							<li>India</li>
							<li>Telephone : +1 (734) 123-4567</li>
							<li>Email : <a class="mail" href="mailto:dreamehotelahmedabad@example.com">dreamehotelahmedabad@gmail.com</a></li>
						</ul>
					</address>
				</div>
				<div class="col-md-3 footer-grid">
				   <h4>Instagram</h4>
					<div class="footer-grid-instagram">
					<a href="#"><img src="images/f1.jpg" alt=" " class="img-responsive"></a>
					</div>
					<div class="footer-grid-instagram">
					<a href="#"><img src="images/f2.jpg" alt=" " class="img-responsive"></a>
					</div>
					<div class="footer-grid-instagram">
						<a href="#"><img src="images/f3.jpg" alt=" " class="img-responsive"></a>
					</div>
					<div class="footer-grid-instagram">
					<a href="#"><img src="images/f4.jpg" alt=" " class="img-responsive"></a>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="col-md-4 footer-info-grid">
				<div class="connect-social">
					<h4>Connect with us</h4>
					<section class="social">
                        <ul>
							<li><a class="icon fb" href="#"><i class="fa fa-facebook"></i></a></li>
							<li><a class="icon tw" href="#"><i class="fa fa-twitter"></i></a></li>
							
							
							<li><a class="icon pin" href="#"><i class="fa fa-pinterest"></i></a></li>
							<li><a class="icon db" href="#"><i class="fa fa-dribbble"></i></a></li>
							<li><a class="icon gp" href="#"><i class="fa fa-google-plus"></i></a></li>
						</ul>
					</section>

				</div>
					

					
				</div>
				<div class="clearfix"></div>
			</div>

			<div class="connect-agileits newsletter">
				<h4>Newsletter</h4>
					<p>Subscribe to our newsletter and we will inform you about newest projects and promotions.
					</p>
					<form action="#" method="post" class="newsletter">
						<input class="email" type="email" placeholder="Your email address..." required="">
						<input type="submit" class="submit" value="Subscribe">
					</form>
			</div>
	   </div>
     </div>

			<!--w3agile_footer_copy -->
			<div class="w3agile_footer_copy" style="    width: 132%;
    margin-left: -16%;margin-bottom: -6%">
				    <p>© 2017 Resort. All rights reserved | Design by <a href="http://w3layouts.com/">Arbaz & Ali & Chetan & Nirav</a></p>
			</div>
		<a href="#home" id="toTop" class="scroll" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
	
<!-- //for bootstrap working -->
</body>
</html>


