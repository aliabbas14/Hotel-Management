<?php

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


      }

   
  


?>
<?php include_once("header3.php");?>
<!DOCTYPE html>
<html>
<head>
  <title>Rooms</title>
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
  
    .outerborder
    {
      border: 1px solid #fff;
      background-color: #c9d6de;
      position: relative;
      margin-bottom: 7px;
      margin-left: 20px;
      margin-right: 20px;
    }
    .innerborder
    {
      position: relative;background-color: #fff;margin: 1px;width: 100%;height: 100%;
    }
    table
    {   
      border-spacing: 0;margin: 0;padding: 0;text-align: left;
    }
    tbody
    {
      display: table-row-group;
      vertical-align: middle;
      border-color: inherit;
    }
    td
    {
      display:table-cell;
      vertical-align: inherit;
    }
    .availablefirstcolumn,.availableSeccolumn
    {
      color:#004677;
      font-weight: 700;
      font-size: 100%;
      background-color: #fff;
      width: 30%;min-width: 200px;
      float: left;
    }
   .PersonInfo
   {
      width: 100%;
      background-color: #f0f0f0;
      margin-bottom: 5px;
      margin-top: 5px;color:#004677;
      border: 1px solid #ededed;
   }
   .Roomstext
   {
      font-weight: 700;
      padding-left: 0px;
      height: 25px;
   }
   .persontext
   {
     text-align: left;
   }
   .childtext
   {
    visibility: hidden;
   }
  .btnInfo
  {
    font-size: 20px;background-color: blue;color: white; 
  }
  .Rooms{display: block;}
  #RoomsAvailTable
  {margin: 10px 0 7px;width: 100%;border: 1px solid #dadde4;
    background-color: #fff;}
  .RoomsAvailTableTh1
  {background-color: white;color: blue;border-bottom: 1px solid black;font-weight: bold;height: 30px;text-align: center;white-space: nowrap;}
  .RoomsAvailTableTh2
  {
    text-align: left;
    padding:0; 

  }
  .RoomsAvailTableTh3
  {
    text-align: center;
    padding:0; 
    min-width: 130px;
  }
  .RoomsAvailTd1{padding: 5px;width: 50%;}
  .price{padding:7px 5px;}
  div{display: block;}
  .fullprice{text-align: left;color: blue;font-weight: bold;white-space: nowrap;padding-right: 50px; }
  .todayValue{font-size: 15px;color: red;font-weight: bold;max-width: 80px;padding-top: 5px;padding-left: 35px;}  
  .textAlignCenter{vertical-align: middle;}
  .buttonBook
  {
    position: relative;margin-left: auto;margin-right: auto;text-align: center;
    padding-left: 10px;padding-right: 10px;background-color: blue;color: white;
    font-weight: bold;margin-left: 30px;
  }
  .text{
    font-weight: bold;
    font-size: 20px;
    color: brown;
    text-decoration: underline;
  }

  /* SLider Style*/
  .column {
  float: left;
  width: 50%;
  padding:50px;
}

/* The Modal (background) */
.modal {
  display: none;
  position: absolute;
  z-index: 1;
  padding-top: 50px;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  overflow: auto;
  background-color: black;
}

/* Modal Content */
.modal-content {
  position: relative;
  background-color: #fefefe;
  margin: auto;
  padding: 0;
  width: 50%;
  max-width: 1000px;
}

/* The Close Button */
.close {
  color: white;
  position: absolute;
  top: 10px;
  right: 25px;
  font-size: 35px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #999;
  text-decoration: none;
  cursor: pointer;
}

.mySlides {
  display: none;
}

.cursor {
  cursor: pointer;
}

/* Next & previous buttons */
.prev,
.next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -50px;
  color: white;
  font-weight: bold;
  font-size: 20px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
  -webkit-user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover,
.next:hover {
  background-color: rgba(0, 0, 0, 0.8);
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

img {
  margin-bottom: -4px;
}

.caption-container {
  text-align: center;
  background-color: black;
  padding: 2px 16px;
  color: white;
}

.demo {
  opacity: 0.6;
}

.active,
.demo:hover {
  opacity: 1;
}

img.hover-shadow {
  transition: 0.3s
}

.hover-shadow:hover {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  opacity: 0.7;
}
/* Slider style ends*/
  </style>
</head>

<body>
	

	<div>
			
		<div>
			<div>
				<div>
					<div>
						<h2 style="margin-top: 4%">Check Availibility</h2>
						<div>
							<div>Check Availibility</div>

							<div>
								
<script type="text/javascript">
	function fetchdate() {
		 var input = document.getElementById("in").value;
		 	/* alert(input);
		 var some= new Date(input);
		 
		 some.setDate(some.getDate() + 1);

		 var str = some.toString("yyyy MMMM ");
		 	//var dateFormat = require('dateformat');
//dateFormat(some, "dddd, mmmm dS, yyyy, h:MM:ss TT");

	//dateFormat(some, "dddd, mmmm dS, yyyy, h:MM:ss TT");

		 alert(str);*/



			//var t= 1*24*60*60*1000;
    		document.getElementById("out").min=input;
    		//alert(input);

	}
		/*document.getElementById("in").onchange=fetch()
		{
			 var input = document.getElementById("in").value;
			 alert(input);
		}*/
</script>
		
	<form method="post">
		<div>

		<div style="float: left;"><label>Check-In Date</label>
		<input type="date" id="in" name="in" class="form-control" value="<?php echo date('Y-m-d'); ?>" min="<?php echo date('Y-m-d'); ?>" onchange="fetchdate()"></div>

		<div style="float: left;margin-left: 10%;"><label>Check-Out Date</label>
		<input type="date" id="out" name="out" class="form-control" value="<?php echo date('Y-m-d',strtotime("+1 day")); ?>" min="<?php echo date('Y-m-d',strtotime("+1 day")); ?>"></div>

		<div style="float: left;margin-left: 10%;"><label>Room-Type</label>
			
			<select class="form-control" name="type">
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

		<div style="float: left;"><label>Rooms</label>
		
			<select class="form-control" name="room">
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
				<option value="4">4</option>
				<option value="5">5</option>
				<option value="6">6</option>
			</select>
		</div>

		<div><button name="available">Check Availibility</button></div>

		</div>
	</form>	
	

								
							</div>
<div class="panel-heading" id="ro">Rooms</div>

		<div class="panel-body" id="sin">
				<div>

					<div><label>Single Type</label></div>
					<?php
						require_once 'config.php';

						$u="select rate,image,features from room_type where type='Single'";
						$result4=mysqli_query($conn,$u);

						$row4=mysqli_fetch_array($result4);

						$img=base64_encode($row4['image']);
					?>
					<div>
						<table>
							<tr>
								<td><div><img height=200 width=200 src="data:text/html;base64,<?php echo $img; ?>"/></div></td>

								<td><div style="margin-left: 396%;"><?php echo $row4['features']?></div></td>

								<td><div style="margin-left: 800%;"><?php echo $row4['rate']?></div></td>

								<td><div style="margin-left: 700%;"><label>Available</label></div></td>

								<td><div style="margin-left: 1100%;"><button class="btn btn-primary">Book</button></div></td>
							</tr>
					
						</table>
					</div>

				</div>
				</div>


<div class="panel panel-default">
				<?php
						function divison($roomstypes,$no,$total,$indate,$outdate)
						{
							
						
					?>


				<div class="panel-heading" id="croom" style="    color: #98978b;    font-size: 11px;
    line-height: 22px;
    font-weight: 500;
    text-transform: uppercase;
    color: #fff;color: #3e3f3a;
    background-color: #f8f5f0;
    border-color: #dfd7ca;    padding: 10px 15px;
    border-bottom: 1px solid transparent;
    border-top-right-radius: 3px;
    border-top-left-radius: 3px;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;    display: block;margin-left: 18%">Rooms</div>

		<div class="panel-body" id="croomtypes" style="    padding: 15px;    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;    display: block; margin-left: 17%">
				<div>

					
					
					<div><label><?php echo $roomstypes; ?> Type</label></div>
					<?php
					//	require_once 'config.php';

							$conn=mysqli_connect("localhost","root","") or die(mysqli_error($conn));
	mysqli_select_db($conn,"hotel_managment") or die(mysqli_error($conn));

						$u="select rate,image,features from room_type where type='".$roomstypes."'";
						$result4=mysqli_query($conn,$u);

						$row4=mysqli_fetch_array($result4);

						$img=base64_encode($row4['image']);
					?>
					<div>
						<!--<table>
							<tr>
								<td><div><img height=200 width=200 src="data:text/html;base64,<?php echo $img; ?>"/></div></td>

								<td><div style="margin-left: 396%;"><?php echo $row4['features']?></div></td>

								<td><div style="margin-left: 800%;"><?php echo $row4['rate']?></div></td>

								<td><div style="margin-left: 700%;"><label><?php echo $no; ?> room Available</label></div></td>

								<td><div style="margin-left: 1100%;"><button class="btn btn-primary">Book</button></div></td>
							</tr>
						</table>
						-->

							<div style="float: left;"><img height=200 width=200 src="data:text/html;base64,<?php echo $img; ?>"/></div>

								<div  style="float: left;margin-top: 8%;margin-left: 10%;"><?php echo $row4['features']?></div>

								<div  style="float: left;margin-top: 8%;margin-left: 10%;"><?php echo $row4['rate']?></div>

								<div  style="float: left;margin-top: 8%;margin-left: 10%;"><label><?php echo $no; ?> room Available out of <?php echo $total; ?></label></div>

								<div  style="float: left;margin-top: 7%;margin-left: 10%;"><a href="details.php?type=<?php echo $roomstypes;?>&room=<?php echo $no;?>&in=<?php echo $indate;?>&out=<?php echo $outdate;?>"><button class="btn btn-primary" <?php if($no==0){echo "disabled";} ?> >Book <?php echo $no; ?> Rooms</button></a></div>
					
						
					</div>
						
				</div>

			</div>
		
				<?php
							}
						?>

					</div>
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



