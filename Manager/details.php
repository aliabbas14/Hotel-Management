
<!doctype html>
<html lang="en" class="no-js">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<meta name="theme-color" content="#3e454c">
	<title>Details</title>
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/dataTables.bootstrap.min.css">
	<link rel="stylesheet" href="css/bootstrap-social.css">
	<link rel="stylesheet" href="css/bootstrap-select.css">
	<link rel="stylesheet" href="css/fileinput.min.css">
	<link rel="stylesheet" href="css/awesome-bootstrap-checkbox.css">
	<link rel="stylesheet" href="css/style.css">
</head>

<body>
	<?php include('includes/header.php');?>

	<div class="ts-main-content">
			<?php //include('includes/sidebar.php');?>
		<div class="content-wrapper">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-12">
						<h2 class="page-title" style="margin-top: 4%">Details</h2>
						<div class="panel panel-default">
							<div class="panel-heading">Details</div>
						

							<div class="panel-body">

								<form class="form-horizontal" method="post">
												
						<div class="hr-dashed"></div>
						
						
						<div class="form-group">


						</div>
								
								
									<div class="form-group">
										<label class="col-sm-2 control-label">Name</label>
										<input type="text" name="fname" class="form-control" style="width: 50%;" required="">
									</div>

									<div class="form-group">
										<label class="col-sm-2 control-label">Gender</label>
										<input type="radio" name="gen" style="margin-top: 1.35%;" value="Male" checked="">Male
										<input type="radio" name="gen" value="Female">Female
									</div>

									<div class="form-group">
										<label class="col-sm-2 control-label">Phone No</label>
										<input type="tel" name="no" class="form-control" style="width: 50%;" required="">
									</div>

									<div class="form-group">
										<label class="col-sm-2 control-label">Email</label>
										<input type="email" name="mail" class="form-control" style="width: 50%;" required="">
									</div>

									<div class="form-group">
										<label class="col-sm-2 control-label">Address</label>
										<textarea class="form-control" style="width: 50%;" name="address" required=""></textarea>
									</div>

									<div class="form-group">
										<label class="col-sm-2 control-label">City</label>
										<input type="text" name="city" class="form-control" style="width: 50%;" required="">
									</div>

									<div class="form-group">
										<label class="col-sm-2 control-label">Country</label>
										<input type="text" name="country" class="form-control" style="width: 50%;" required="">
									</div>

									<div class="form-group">
										<label class="col-sm-2 control-label">Pincode</label>
										<input type="number" name="pin" class="form-control" style="width: 50%;" required="">
									</div>

				

									<div class="col-sm-8 col-sm-offset-2" style="margin-left: 35%;">
													
											<button class="btn btn-primary" name="confirm">Confirm Booking</button>
												</div>

								</form>

								
							</div>


							
					
						</div>

					
					</div>
				</div>

			

			</div>
		</div>
	</div>

	<!-- Loading Scripts -->
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap-select.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.dataTables.min.js"></script>
	<script src="js/dataTables.bootstrap.min.js"></script>
	<script src="js/Chart.min.js"></script>
	<script src="js/fileinput.js"></script>
	<script src="js/chartData.js"></script>
	<script src="js/main.js"></script>

</body>

</html>

<?php
	if(isset($_POST['confirm']))
	{
		$conn=mysqli_connect("localhost","root","") or die(mysqli_error($conn));
	mysqli_select_db($conn,"hotel_managment") or die(mysqli_error($conn));

	

		$room_type=$_GET['type'];
		$rooms=$_GET['room'];
		$checkin=$_GET['in'];
		 $checkout=$_GET['out'];

		$name=$_POST['fname'];
		$gen=$_POST['gen'];
		$no=$_POST['no'];
		$mail=$_POST['mail'];
		$add=$_POST['address'];
		$city=$_POST['city'];
		$country=$_POST['country'];
		$pin=$_POST['pin'];

		$room_id=0;

		$days=strtotime($checkout)-strtotime($checkin);
		$days=($days / (60 * 60 * 24));

		//$night=$days-1;

    if($days==1)
    {
      $night=$days;
    }
    else
    {
    $night=$days-1;
    }

    $date = date('Y-m-d');
 $qu2="select rate from room_type where type='".$room_type."'";
                  
                  $res2=mysqli_query($conn,$qu2);

                  $ro2=mysqli_fetch_array($res2);

                  $total=(($ro2['rate']*$night)*$rooms);

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
$room_booked_array= array();
        $arr_counter=0;
      if(mysqli_num_rows($result) >= $rooms)
      {
        

        // echo "<script type='text/javascript'>alert('$rooms room available in $room_type type')</script>";
          while ($row=mysqli_fetch_array($result))
           {

        $temp_rooms--;
          	$x=$row['room_no'];

            $room_booked_array[$arr_counter]=$row['room_no'];
            $arr_counter++;

          	$query3="INSERT INTO `booking_details`(`room_type_id`, `room_no`, `check_in_date`, `check_out_date`, `name`, `phone_no`, `country`, `city`, `address`, `pincode`, `email`, `gender`) VALUES ('".$room_id."','".$x."','".$checkin."','". $checkout."','".$name."','".$no."','".$country."','".$city."','".$add."','".$pin."','".$mail."','".$gen."')";

       	  $result3=mysqli_query($conn,$query3);

       	  $query5="update rooms set status=1 where room_no=".$x;
       	  $result5=mysqli_query($conn,$query5);


       	  	/*if($result3){
       	  		echo "<script type='text/javascript'>alert('Booking Successful')</script>";
       	  		//header("Location:payment.php?type=".$room_type."&rooms=".$rooms."&nights=".$night);
       	  			//echo "<script>location.href='payment.php?type=".$room_type."&rooms=".$rooms."&nights=".$night."'</script>";
                //echo "<script>location.href='payment.php?type=".$room_type."&rooms=".$rooms."&nights=".$night."'</script>";
       	  	}
       	  	else
       	  		echo "<script type='text/javascript'>alert('Booking Unsuccessful')</script>";*/

       	  	if($temp_rooms==0){
       	  		break;
       	  	}

       	  }

          if ($result3==1 && $result5==1) {
           

              $qu="SELECT booking_id FROM booking_details WHERE room_no=".$x." AND check_in_date='".$checkin."' AND check_out_date='".$checkout."'";

           $res=mysqli_query($conn,$qu);
           $ro=mysqli_fetch_array($res);
           $bookingid=$ro['booking_id'];
           

           /*$days=strtotime($checkout)-strtotime($checkin);
    $days=($days / (60 * 60 * 24));

    if($days==1)
    {
      $night=$days;
    }
    else
    {
    $night=$days-1;
    }*/

          

           $qu3="INSERT INTO `payment_details`(`booking_id`,`pay_date`,`total_payment`) VALUES ('".$bookingid."','".$date."','".$total."')";

           $res3=mysqli_query($conn,$qu3);


           $qu4="SELECT payment_details.payment_id FROM payment_details INNER JOIN booking_details on booking_details.booking_id=payment_details.booking_id WHERE booking_details.room_no=".$x." AND booking_details.check_in_date='".$checkin."' AND booking_details.check_out_date='".$checkout."'";
           
           $res4=mysqli_query($conn,$qu4);
           $ro4=mysqli_fetch_array($res4);
           $paymentid=$ro4['payment_id'];

           
           for ($ol=0; $ol <sizeof($room_booked_array) ; $ol++)
            { 
                $roomno=$room_booked_array[$ol];
               $qu5="update booking_details set payment_id=".$paymentid." where room_no=".$roomno." and check_in_date='".$checkin."' and check_out_date='".$checkout."'"; 
                 $res5=mysqli_query($conn,$qu5);
           }

            /*$qu6="update payment_details set booking_id='' where payment_id=".$paymentid;
echo "<script type='text/javascript'>alert('$qu6')</script>";
           echo $qu6;

             $res6=mysqli_query($conn,$qu6);*/

             echo "<script type='text/javascript'>alert('Booking Successful')</script>";
              echo "<script>location.href='payment.php?type=".$room_type."&rooms=".$rooms."&nights=".$night."'</script>";  
          }
          else{
              echo "<script type='text/javascript'>alert('Booking Unsuccessful')</script>";
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
            	unset($room_array[$array_delete[$p]]);
            }

            $room_array=array_values($room_array);

            $array_size=sizeof($room_array);

           /* for ($e=0; $e <sizeof($room_array) ; $e++) { 
            	 echo "<script type='text/javascript'>alert('apdi taarik ma available badha rooms final $room_array[$e]')</script>";
            }*/
            


           	if($array_size>=$rooms)
            {
            	for ($j=0; $j < $rooms; $j++) {

            		$l=$room_array[$j];

                $room_booked_array[$arr_counter]=$room_array[$j];
            $arr_counter++;

            		$query7="INSERT INTO `booking_details`(`room_type_id`, `room_no`, `check_in_date`, `check_out_date`, `name`, `phone_no`, `country`, `city`, `address`, `pincode`, `email`, `gender`) VALUES ('".$room_id."','".$l."','".$checkin."','". $checkout."','".$name."','".$no."','".$country."','".$city."','".$add."','".$pin."','".$mail."','".$gen."')";
            		
           
            			 $result7=mysqli_query($conn,$query7);
            			  $query6="update rooms set status=1 where room_no=".$l;
       					  $result6=mysqli_query($conn,$query6);
            	}

            	if ($result7==1 && $result6==1) {

                $qu="SELECT booking_id FROM booking_details WHERE room_no=".$l." AND check_in_date='".$checkin."' AND check_out_date='".$checkout."'";

           $res=mysqli_query($conn,$qu);
           $ro=mysqli_fetch_array($res);
           $bookingid=$ro['booking_id'];
           
 $qu3="INSERT INTO `payment_details`(`booking_id`,`pay_date`,`total_payment`) VALUES ('".$bookingid."','".$date."','".$total."')";

           $res3=mysqli_query($conn,$qu3);


           $qu4="SELECT payment_details.payment_id FROM payment_details INNER JOIN booking_details on booking_details.booking_id=payment_details.booking_id WHERE booking_details.room_no=".$l." AND booking_details.check_in_date='".$checkin."' AND booking_details.check_out_date='".$checkout."'";
           
           $res4=mysqli_query($conn,$qu4);
           $ro4=mysqli_fetch_array($res4);
           $paymentid=$ro4['payment_id'];

           
           for ($ol=0; $ol <sizeof($room_booked_array) ; $ol++)
            { 
                $roomno=$room_booked_array[$ol];
                $qu5="update booking_details set payment_id=".$paymentid." where room_no=".$roomno." and check_in_date='".$checkin."' and check_out_date='".$checkout."'"; 
                 $res5=mysqli_query($conn,$qu5);
           }














            			echo "<script type='text/javascript'>alert('Booking Successful')</script>";
            			//header("Location:payment.php?type=".$room_type."&rooms=".$rooms."&nights=".$night);
            			echo "<script>location.href='payment.php?type=".$room_type."&rooms=".$rooms."&nights=".$night."'</script>";
            	}

            	else
            	{
            		echo "<script type='text/javascript'>alert('Booking Unsuccessful')</script>";
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