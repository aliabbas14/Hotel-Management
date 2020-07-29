<?php include_once 'header3.php'; ?>
<!DOCTYPE html>
<html>
<head>
<title>Resort a Hotel Category Flat Bootstrap Responsive Website Template | Contact :: w3layouts</title>
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
				<li><a href="index.php">Home</a> <i>/</i></li>
				
				<li>feedback</li>
			</ul>
		</div>
	</div>
	 <div class="container">
    
         <div class="w3_content_agilleinfo_inner">
                        <div class="container">
                            <div class="inner-agile-w3l-part-head">
                               <h2 class="w3l-inner-h-title">Feedback</h2>
                                
                            </div>
                            </div>
                            </div>
    


    <div class="panel-group" id="accordion">
        <div class="faqHeader">User's feedbacks</div>
        <div class="panel panel-default">
        	<?php 
        	include('conf.php');
        	$qry="select feedback,feed_about from feedback where status=1";
        	$result=mysqli_query($connection,$qry);
        	while ($row=mysqli_fetch_array($result))
        	 {
        	 	?>
        	 	 <div class="panel-group" id="accordion">
        	<div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseOne"><?php echo $row['feed_about'];?></a>
                </h4>
            </div>
            <div id="collapseOne" class="panel-collapse collapse in">
                <div class="panel-body">
                    <?php echo $row['feedback'];?>
                </div>
            </div>
        </div>
    </div>
        <?php
        	}
        	?>
           
        </div>
       
        
</div>
<!--/main-header-->

  <!--/banner-section-->
 <!--//main-header-->
	<?php
	/*if(isset($_POST['submit_feed']))
	{
		$uid=$_POST['email'];
		$feed_about=$_POST['feedback_about'];
		$feedback=$_POST['feedback'];
		$feed_date=date('Y/m/d');	
		
		$hotel_id=1;
		

		include('conf.php');
		$qry="INSERT INTO `feedback`( `email`, `feedback`, `hotel_id`, `feed_date`, `feed_about`) VALUES ('".$uid."','".$feedback."','".$hotel_id."','".$feed_date."','".$feed_about."')";
		$result=mysqli_query($connection,$qry);
		if($result==1)
		{
			echo"<script>alert(Feedback Successfully Sent...)</script>";
		}
		else
		{
			echo"<script>alert(Something Went Wrong...)</script>";
		}
	}*/
?>
	        
						<!-- breadcrumb -->
	<div class="w3_breadcrumb">
	<div class="breadcrumb-inner">	
			<ul>
				<li><a href="index.php">Home</a> <i>/</i></li>
				
				<li>feedback</li>
			</ul>
		</div>
	</div>

<!-- //breadcrumb -->
			<!--/content-inner-section-->
				  <div class="w3_content_agilleinfo_inner">
					    <div class="container">
							<div class="inner-agile-w3l-part-head">
					           <h2 class="w3l-inner-h-title"> Leav Your Feedback</h2>

							</div>
									<div class="w3_mail_grids">
										<form  method="post">
											<div class="col-md-6 w3_agile_mail_grid">
			
				<input type="email" id="email" name="email" required="" placeholder="Your Email">

				
		<div>
				<input type="text" id="feedback_about" name="feedback_about" required="" placeholder=" Feedback-About">			
		</div>


			</div></div>


			<script type="text/javascript">
				function ajax() {

					var a = document.getElementById("email").value;
					var b = document.getElementById("feedback_about").value;
					var c = document.getElementById("feedback").value;

					alert(c);


					var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
               // document.getElementById("txtHint").innerHTML = this.responseText;
            }
        };

        
        xhttp.open("GET", "f.php?email="+a+"&feedback_about="+b+"&feedback="+c, true);
  //xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  //xhttp.send("email="+a+"&feedback_about="+b+"&feedback="+c);
xhttp.send();


        
				}
			</script>

				<div class="col-md-6 w3_agile_mail_grid">
					
												<br><textarea id="feedback" name="feedback" required="" placeholder="Your Feedback Message"></textarea>
												<input type="submit" value="Submit" onclick="ajax()" name="submit_feed" formmethod="post" >
											</div>

											<div class="clearfix"> </div>
									
							</div>
					   </div>
					</form>
					</div>
					</div>
					</div>
					<?php
		include_once("footer.php");
	?>
	<style>
    .faqHeader {
        font-size: 27px;
        margin: 20px;
    }

    .panel-heading [data-toggle="collapse"]:after {
        font-family: 'Glyphicons Halflings';
        content: "\e072"; /* "play" icon */
        float: right;
        color: #F58723;
        font-size: 18px;
        line-height: 22px;
        /* rotate "play" icon from > (right arrow) to down arrow */
        -webkit-transform: rotate(-90deg);
        -moz-transform: rotate(-90deg);
        -ms-transform: rotate(-90deg);
        -o-transform: rotate(-90deg);
        transform: rotate(-90deg);
    }

    .panel-heading [data-toggle="collapse"].collapsed:after {
        /* rotate "play" icon from > (right arrow) to ^ (up arrow) */
        -webkit-transform: rotate(90deg);
        -moz-transform: rotate(90deg);
        -ms-transform: rotate(90deg);
        -o-transform: rotate(90deg);
        transform: rotate(90deg);
        color: #454444;
    }
</style>

</body>
</html>		