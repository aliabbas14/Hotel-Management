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








<?php include_once 'header3.php';?>

<?php 
  if(!isset($_SESSION['login']))
  {
     ?>
<script type="text/javascript">document.getElementById('id01').style.display='block';</script>
     <?php  
  }
?>
<html>
	<head>
		<style type="text/css">
			.font{
				    color: #555;
    line-height: 2.2em;
    margin: 1.5em auto 2.2em;
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
				<li>Details</li>
			</ul>
		</div>
	</div>

	<div class="w3_content_agilleinfo_inner">
		<div class="container">
			<div class="inner-agile-w3l-part-head">
				<h2 class="w3l-inner-h-title">Details</h2>
			</div>
		</div>
	</div>
	<h3 class="tittle fea" style="  margin-left: -36%;margin-top: -5%">Your Details</h3>
	<div class="book-form" style="width:60%;margin-left:1%;margin-top: -3%">
		<form method="post" id="details" name="details">
					<div>
						<label>Name :</label>
						<input type="text" name="fname" placeholder="Your name" required="">
					</div>
					<div>
						<label>Gender</label><br>
						<div><input type="radio" name="gen" checked="" value="Male">Male
						<input type="radio" name="gen" value="Female">Female
						</div>
					</div>

					<div>
							<label>Phone Number</label>
						<input type="text" name="no" placeholder="Phone Number" required="" style="border: 2px solid #fff;
}">
					</div>

					<div>
							<label>Email :</label>
						<input type="email" name="mail" placeholder="Your email" required="">
					</div>

					
					
					<div>	
						<label>Address :</label>
						<input type="text" name="address" placeholder="Address" required="">
					</div>

					<div>
							<label>City :</label>
							<input type="text" name="city" placeholder="City" required="">
					</div>

					<div>
							<label>Country :</label>
							<input type="text" name="country" placeholder="Country" required="">
					</div>

					
					

					<div>
							<label>Pincode :</label>
						<input type="text" name="pin" placeholder="Pincode" required="">
					</div>
			
						<div>
										<label>Offer :</label>
								<input type="text" name="offer" placeholder="Offer"> 
									</div>

					
					

			</form>
			
	</div>
			
	<br><h3 class="tittle fea" style="  margin-left: -36%;margin-top: 2%">Payment Details</h3>
	<div class="book-form" style="width:60%;margin-left:1%;margin-top: -3%;margin-bottom: 13%">
		<form action="#" method="post">
					<div>
						<input type="text" name="name" placeholder="Credit/Debit Card Number" required="">
					</div>
					<div style="float:left ">
						<label>Expiry Date</label>
						<input type="text" placeholder="MM/YY" required="">

					</div>
					
					<br>
					
					<div style="    width: 20%;
    margin-top: 1.3%;
    margin-left: 80%;">	
						<input type="text" placeholder="CVV" required="">
					</div>

					<div>
						<input type="text" name="" placeholder="Name on card" required="">
					</div>
						</form>
					<div>
						  <input type="submit" name="confirm" id="confirm" value="Make Payment" form="details">
					</div>

						
				
			</div>
      <br><br><br><br><br><br><br><br>

			<?php
				$room_type=$_GET['type'];
		$rooms=$_GET['room'];
		$checkin=$_GET['in'];
		 $checkout=$_GET['out'];

		 $days=strtotime($checkout)-strtotime($checkin);
		$days=($days / (60 * 60 * 24));

		if($days==1)
		{
			$night=$days;
		}
		else
		{
		$night=$days-1;
		}
									
									
									
									$conn=mysqli_connect("localhost","root","") or die(mysqli_error($conn));
									mysqli_select_db($conn,"hotel_managment") or die(mysqli_error($conn));

									$query="select rate from room_type where type='".$room_type."'";
									
									$result=mysqli_query($conn,$query);

									$row=mysqli_fetch_array($result);

									$total=(($row['rate']*$night)*$rooms);
								//	echo "<script type='text/javascript'>alert('$night')</script>";


		$result=mysqli_query($conn,"select image from room_type where type='".$room_type."'");
		$row=mysqli_fetch_array($result);
		$img=base64_encode($row['image']);

			?>
			<div>
			<div id="details" class="font" style="    margin-bottom: 7%;bottom:-85%;    height: 1093px;
    margin-left: 83%;
    margin-top: -95%;
    width: 125px; ">
    <h3 class="tittle fea" style="margin-left: -119%">You Selected</h3>
				<img src="data:text/html;base64,<?php echo $img; ?>" style="    margin-left: -121%;
    margin-top: -33%;    height: 23%;
    width: 210%;">

    <div style="    margin-top: 9%;
    margin-left: -122%;">
    Room-Type : <?php echo $room_type; ?> Type<br>
    Check-In Date : <?php echo $checkin; ?><br>
    Check-Out Date : <?php echo $checkout; ?><br>
    Rooms : <?php echo $rooms; ?><br>
    Amount : ₹<?php  echo $total; ?>



</div>
			</div>
</div>		
		<!--<script>



window.onscroll = function() {myFunction()};

var navbar = document.getElementById("details");
var sticky = navbar.offsetTop;

var ff = document.getElementById("footers");
var fss = ff.offsetTop;

function myFunction() {
 if (window.pageYOffset >= sticky) {
    navbar.style.position="fixed";
  } 
  else if(window.pageYOffset <= fss){
  	alert("sss");
  	navbar.style.position="relative";
  }
}
</script>-->
	</body>

</html>
<?php include_once 'footer.php';?>



<?php

  //session_start();
	if(isset($_POST['confirm']))
	{
		$conn=mysqli_connect("localhost","root","") or die(mysqli_error($conn));
	mysqli_select_db($conn,"hotel_managment") or die(mysqli_error($conn));

	

		/*$room_type=$_GET['type'];
		$rooms=$_GET['room'];
		$checkin=$_GET['in'];
		 $checkout=$_GET['out'];*/

		$name=$_POST['fname'];
		$gen=$_POST['gen'];
		$no=$_POST['no'];
		$mail=$_POST['mail'];
		$add=$_POST['address'];
		$city=$_POST['city'];
		$country=$_POST['country'];
		$pin=$_POST['pin'];
    $offer=$_POST['offer'];

    $q="select discount,promocode from offer_details where status=1";
    $r=mysqli_query($conn,$q);

    while ($u=mysqli_fetch_array($r)) {
        if ($u['promocode']==$offer) {
         $dis=$u['discount'];
         $total=$total-(($total*$dis)/100);
         break;
        }
    }



		$room_id=0;

		$days=strtotime($checkout)-strtotime($checkin);
		$days=($days / (60 * 60 * 24));

		$night=$days-1;

		//echo "<script type='text/javascript'>alert('$days')</script>";

		$result4=mysqli_query($conn,"select room_type_id,type from room_type");
		while ($row4=mysqli_fetch_array($result4)) {
			if ($room_type==$row4['type']) {
				$room_id=$row4['room_type_id'];
			}
		}
//echo "<script type='text/javascript'>alert('$no')</script>";

       $query="SELECT room_no FROM rooms INNER JOIN room_type on rooms.room_type_id=room_type.room_type_id WHERE status=0 AND active=1 AND room_type.type='".$room_type."'";

     
      $result=mysqli_query($conn,$query);

        $u=mysqli_num_rows($result);
        //    echo "<script type='text/javascript'>alert('$u')</script>";

        $temp_rooms=$rooms;

         $emailid=$_SESSION['login'];
          $qu1="select user_id from user_details where email='".$emailid."'";

  $res=mysqli_query($conn,$qu1); 

  $ro=mysqli_fetch_array($res);

  $userid=$ro['user_id'];

   $date = date('Y-m-d');
   $co=0;

      if(mysqli_num_rows($result) >= $rooms)
      { 
         

        

          $qu2="INSERT INTO `payment_details`(`user_id`, `pay_date`, `total_payment`) VALUES ('". $userid."','". $date."','". $total."')";

        // echo "<script type='text/javascript'>alert('$rooms room available in $room_type type')</script>";

          $res2=mysqli_query($conn,$qu2); 

          if ($res2) {
           
            //SELECT * FROM payment_details where user_id=61 ORDER BY payment_id DESC LIMIT 1
               $qu3="SELECT payment_id FROM payment_details where user_id=".$userid." ORDER BY payment_id DESC LIMIT 1";
             //$qu3="select payment_id from payment_details where user_id=".$userid;
              $res3=mysqli_query($conn,$qu3); 
              $ro3=mysqli_fetch_array($res3);
              $paymentid=$ro3['payment_id'];

          while ($row=mysqli_fetch_array($result))
           {

        $temp_rooms--;
          	$x=$row['room_no'];




          	$query3="INSERT INTO `booking_details`(`payment_id`,`room_type_id`, `room_no`,`user_id`, `check_in_date`, `check_out_date`, `name`, `phone_no`, `country`, `city`, `address`, `pincode`, `email`, `gender`) VALUES ('".$paymentid."','".$room_id."','".$x."','".$userid."','".$checkin."','". $checkout."','".$name."','".$no."','".$country."','".$city."','".$add."','".$pin."','".$mail."','".$gen."')";

       	  $result3=mysqli_query($conn,$query3);

       	  $query5="update rooms set status=1 where room_no=".$x;
       	  $result5=mysqli_query($conn,$query5);

          if($result3==1 && $result5==1){
            $co=1;
              echo "<script type='text/javascript'>alert('Booking Successful')</script>";
              //header("Location:payment.php?type=".$room_type."&rooms=".$rooms."&nights=".$night);
                //echo "<script>location.href='payment.php?type=".$room_type."&rooms=".$rooms."&nights=".$night."'</script>";

               $to = $mail;
$subject = 'Data';
$from = 'dreamhotelahmedabad@gmail.com';
 
// To send HTML mail, the Content-type header must be set
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
 
// Create email headers
$headers .= 'From: '.$from."\r\n".
    'Reply-To: '.$from."\r\n" .
    'X-Mailer: PHP/' . phpversion();
 
// Compose a simple HTML email message
$message = '<html><body>';
$message .= '<h1 style="color:#f40;">Thank You '.$name.' for booking</h1>';
$message .= '<p style="color:#080;font-size:18px;">Room-Type:'.$room_type.'</p>';
$message .= '<p style="color:#080;font-size:18px;">Number of Rooms:'.$rooms.'</p>';
//$message .= '<p style="color:#080;font-size:18px;">Booked For:'.$name.'</p>';
$message .= '<p style="color:#080;font-size:18px;">Your Check-in Date:'.$checkin.'</p>';
$message .= '<p style="color:#080;font-size:18px;">Your Check-Out Date:'.$checkout.'</p>';
$message .= '<p style="color:#080;font-size:18px;">Amount:'.$total.'</p>';
$message .= '</body></html>';
 
// Sending email
          if(mail($to, $subject, $message, $headers)){
              echo 'Your mail has been sent successfully.';
        } else{
            echo 'Unable to send email. Please try again.';
        }
            }
            else{
              echo "<script type='text/javascript'>alert('Booking Unsuccessful')</script>";
            }
       	  	

       	  	if($temp_rooms==0){
       	  		break;
       	  	}

       	  }
            if ($co==0) {
                  $qu4="delete from payment_details where payment_id=".$paymentid;
                  $res4=mysqli_query($conn,$qu4);
            }
          
        }
        else
          {
            echo "<script type='text/javascript'>alert('Payment Failed')</script>"; 
          }
          
      }
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
            	$index=array_search($array_delete[$p],$room_array);
            	unset($room_array[$index]);
            }

            // $room_array=array_values($room_array);
            array_values($room_array);

            $array_size=sizeof($room_array);

           /* for ($e=0; $e <sizeof($room_array) ; $e++) { 
            	 echo "<script type='text/javascript'>alert('apdi taarik ma available badha rooms final $room_array[$e]')</script>";
            }*/
            

           	if($array_size>=$rooms)
            {

               $qu2="INSERT INTO `payment_details`(`user_id`, `pay_date`, `total_payment`) VALUES ('". $userid."','". $date."','". $total."')";

        // echo "<script type='text/javascript'>alert('$rooms room available in $room_type type')</script>";

          $res2=mysqli_query($conn,$qu2); 

          if ($res2) {
             $qu3="SELECT payment_id FROM payment_details where user_id=".$userid." ORDER BY payment_id DESC LIMIT 1";
             //$qu3="select payment_id from payment_details where user_id=".$userid;
              $res3=mysqli_query($conn,$qu3); 
              $ro3=mysqli_fetch_array($res3);
              $paymentid=$ro3['payment_id'];

            	for ($j=0; $j < $rooms; $j++) {

            		$l=$room_array[$j];


               $query7= "INSERT INTO `booking_details`(`payment_id`,`room_type_id`, `room_no`,`user_id`, `check_in_date`, `check_out_date`, `name`, `phone_no`, `country`, `city`, `address`, `pincode`, `email`, `gender`) VALUES ('".$paymentid."','".$room_id."','".$l."','".$userid."','".$checkin."','". $checkout."','".$name."','".$no."','".$country."','".$city."','".$add."','".$pin."','".$mail."','".$gen."')";


            		//$query7="INSERT INTO `booking_details`(`room_type_id`, `room_no`, `check_in_date`, `check_out_date`, `name`, `phone_no`, `country`, `city`, `address`, `pincode`, `email`, `gender`) VALUES ('".$room_id."','".$l."','".$checkin."','". $checkout."','".$name."','".$no."','".$country."','".$city."','".$add."','".$pin."','".$mail."','".$gen."')";
            			
            			//echo "<script type='text/javascript'>alert('$query7')</script>";

           
            			 $result7=mysqli_query($conn,$query7);
            			  $query6="update rooms set status=1 where room_no=".$l;
       					  $result6=mysqli_query($conn,$query6);

                  if ($result7==1 && $result6==1) {
                    $co=1;
                  echo "<script type='text/javascript'>alert('Booking Successful')</script>";
                  $to = $mail;
$subject = 'Data';
$from = 'dreamhotelahmedabad@gmail.com';
 
// To send HTML mail, the Content-type header must be set
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
 
// Create email headers
$headers .= 'From: '.$from."\r\n".
    'Reply-To: '.$from."\r\n" .
    'X-Mailer: PHP/' . phpversion();
 
// Compose a simple HTML email message
$message = '<html><body>';
$message .= '<h1 style="color:#f40;">Thank You '.$name.' for booking</h1>';
$message .= '<p style="color:#080;font-size:18px;">Room-Type:'.$room_type.'</p>';
$message .= '<p style="color:#080;font-size:18px;">Number of Rooms:'.$rooms.'</p>';
//$message .= '<p style="color:#080;font-size:18px;">Booked For:'.$name.'</p>';
$message .= '<p style="color:#080;font-size:18px;">Your Check-in Date:'.$checkin.'</p>';
$message .= '<p style="color:#080;font-size:18px;">Your Check-Out Date:'.$checkout.'</p>';
$message .= '<p style="color:#080;font-size:18px;">Amount:'.$total.'</p>';
$message .= '</body></html>';

 
// Sending email
          if(mail($to, $subject, $message, $headers)){
              echo 'Your mail has been sent successfully.';
        } else{
            echo 'Unable to send email. Please try again.';
        }
                  //header("Location:payment.php?type=".$room_type."&rooms=".$rooms."&nights=".$night);
                  //echo "<script>location.href='payment.php?type=".$room_type."&rooms=".$rooms."&nights=".$night."'</script>";
                }

              else
              {
                echo "<script type='text/javascript'>alert('Booking Unsuccessful')</script>";
              }


            	}

              if ($co==0) {
                  $qu4="delete from payment_details where payment_id=".$paymentid;
                  $res4=mysqli_query($conn,$qu4);
            }

            }
            else
          {
            echo "<script type='text/javascript'>alert('Payment Failed')</script>"; 
          }

            	
            	
            }
            else
            {
            	echo "<script type='text/javascript'>alert('Rooms not available')</script>";	
            }

           /* if($left==0)
                 // echo "<script type='text/javascript'>alert('$rooms room available in $room_type type')</script>";
            else
            {
               // echo "<script type='text/javascript'>alert('$left room not available in $room_type type')</script>";
            }*/


     } 


  } 

?>