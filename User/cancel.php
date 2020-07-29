<?php
//echo "<script>alert('sdf');</script>";
	if (isset($_SESSION['cancel'])) {
		$a=$_SESSION['cancel'];
		echo "<script>alert('$a');</script>";
		echo $a;
	}

?>
<?php include_once 'header3.php';?>
<?php
	
	$a=$_SESSION['login'];
	

	$conn=mysqli_connect("localhost","root","") or die(mysqli_error($conn));
	mysqli_select_db($conn,"hotel_managment") or die(mysqli_error($conn));

	$query="select user_id from user_details where email='".$a."'";

	$result=mysqli_query($conn,$query);	

	$row=mysqli_fetch_array($result);

	$user_id=$row['user_id'];

	$query2="SELECT room_type.type,room_type.image,booking_details.room_type_id,booking_details.check_in_date,booking_details.check_out_date,payment_details.total_payment from booking_details INNER JOIN payment_details ON booking_details.payment_id=payment_details.payment_id INNER JOIN room_type on booking_details.room_type_id=room_type.room_type_id WHERE booking_details.user_id=".$user_id." GROUP BY booking_details.payment_id";



	//$query2="SELECT room_type.type,booking_details.room_type_id,booking_details.check_in_date,booking_details.check_out_date,payment_details.total_payment from booking_details INNER JOIN payment_details ON booking_details.payment_id=payment_details.payment_id INNER JOIN room_type on booking_details.room_type_id=room_type.room_type_id WHERE booking_details.user_id=".$user_id." GROUP BY booking_details.payment_id";

	//$query2="SELECT booking_details.room_type_id,booking_details.check_in_date,booking_details.check_out_date,payment_details.total_payment from booking_details INNER JOIN payment_details ON booking_details.payment_id=payment_details.payment_id WHERE booking_details.user_id=".$user_id." GROUP BY booking_details.payment_id";
	$result2=mysqli_query($conn,$query2);	


	

?>
<html>

	<head>
		<style type="text/css">
			.text{
				border: 1px solid #e4e4e4;
    outline: none;
    -webkit-appearance: none;
    background: none;
    font-size: 15px;
    letter-spacing: 1px;
    color: #555;
    width: 100%;
    background: #f5f5f5;
    padding: 1em 1em;
			}
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
<script src="jquery-3.3.1.min.js"></script>
<!--/web-fonts-->
<link href="//fonts.googleapis.com/css?family=Dosis:200,300,400,500,600" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i" rel="stylesheet">
<!--//web-fonts-->
</head>
	<body>

	<div>

		<div class="w3_breadcrumb">
			<div class="breadcrumb-inner">	
				<ul>
					<li><a href="index1.php">Home</a> <i> /</i></li>
					<li>My Reservations</li>
				</ul>
			</div>
		</div>

		<div class="inner-agile-w3l-part-head">
        	<h2 class="w3l-inner-h-title">My Reservations</h2>
		</div>

		<div>


			<h3 class="tittle fea">Cancellation Policy</h3>

<div style="    color: #555;
    line-height: 2.2em;
    margin: 1.5em auto 2.2em;
    width: 86%;">
<div>
<div style="margin-left: 5%">Cancellation Charges</div>
<div style="margin-left: 10%">
<ul>
<li>25% if cancelled four days in advance.</li>
<li>50% if cancelled two or three days in advance.</li>
<li>50% if few of the total booked rooms are cancelled.</li> 
<li>100% if cancelled one day prior to booking or on the same day.</li> 
<li>Credit/Debit card cancellations will be charged 5% extra.</li>
</ul>
</div>
</div>

<br>

<div>
<div style="margin-left: 5%">For Groups / for Special Celebration Dates (24th, 25th, 30th & 31st of December & Long weekends)</div>
<div style="margin-left: 10%">
<ul>
<li>25% if cancelled forty five days in advance.
<li>50% if cancelled thirty days in advance. 
<li>50% if few of the total booked rooms are cancelled. 
<li>100% if cancelled fifteen days in advance or later.
<li>Credit/Debit card cancellations will be charged 5% extra.
</ul>
</div>
</div>

<br>

<div>
<div style="margin-left: 5%">Confirmation/cancellation policy for weddings and large celebrations</div>
<div style="margin-left: 10%">
<ul>
<li>25% of the total room tariff at the time of the confirmation of the booking.
<li>100% of the total room tariff and chartering cost four months in advance.
<li>80% of the balance of total expected budget 45 days in advance.
<li>If not complied to, the booking can be cancelled.
<li>Full clearance of bill at the check-out.
</ul>
</div>
</div>

<br>

<div>

<div  style="margin-left: 5%">In case of any cancellation the service tax of 12.36% on the advance will have to be retained as it is to be paid by us to the authorities by the 5th of the next month.</div>
<div style="margin-left: 10%">
<ul>
<li>Total advance paid will be retained if cancelled anytime between 3 months and 31 days prior to the date.
<li>100% of the advance will be retained if cancelled 1 month prior to the date.
</ul>
</div>
</div>

<br>


<div style="margin-left: 5%">Note</div>
<br>
<div>
<div  style="margin-left: 5%">Any postponement of the booking will be treated as a cancellation  will be governed by the Cancellation Policy.</div>
<div style="margin-left: 10%">
	<ul>
<li>A group booking is defined as :
	<div style="margin-left: 12%"><ul>
<li>2 rooms or more for hotels with an inventory of 4-10 rooms
<li>5 rooms or more for hotels with an inventory of 11-21 rooms
<li>10 rooms or more for hotels with an inventory of 22-65 rooms
	</ul></div>


<li>Refunds only through cheque for bookings made by cash/cheque/bank transfer.
<li>Online refunds for bookings made through the website usually take 7-10 working days.
<li>Credit/debit card online refunds will only be made against credit/debit card bookings and usually take 15 working days.
<li>The original receipt must be presented for processing the refund.
<li>Credit/debit card cancellations will be charged 5% extra.
</ul>
</div>	

</div>
</div>


<script type="text/javascript">
		function del(c)
		{
			//alert(c);
			//alert("dfgcv");
			//$.get("delete.php");
			//window.location.href="del.php?count=" + $c;
			//window.location="www.google.com";
			//window.location="index1.php";
			//<a href="del.php">
			//document.location.href="index1.php";
			window.open("del.php?count="+c);
			window.close();
		}

</script>

<?php

$counter=0;
	while ($row2=mysqli_fetch_array($result2)){
		$img=base64_encode($row2['image']);

?>

		<div>
<div style="margin-left: 5%;float: left">
	<img src="data:text/html;base64,<?php echo $img; ?>" height="300px" width="300px">
</div>

<div style="margin-left: 3%;float:left;margin-top:-0.5%" class="	font">
	Room Type : <?php echo $row2['type']; ?><br>
	Check-In Date : <?php echo $row2['check_in_date']; ?><br>
	Check-Out Date : <?php echo $row2['check_out_date']; ?><br>
	Amount : <?php echo $row2['total_payment']; ?><br>
	<form>	
			<textarea rows="3" cols="40" placeholder="Reason for Cancellation" class="text"></textarea>
	</form>
</div>
		
<div style="height: 300px;margin-left:61%" class="font">
		<form>	
				<label>Bank Account Number</label><br>
				<input type="text" placeholder="Account Number" class="text" style="width:87%"><br>

				<label>IFSC Code</label><br>
				<input type="text" placeholder="IFSC" class="text" style="width:87%"><br>
 
				<div style="margin-top: 9%;margin-left: 32%"><input type="submit" value="Cancel" onclick="del(<?php echo $counter; ?>)" style="border: none;
    padding: 0.8em 2em;
    margin-top: 0.5em;
    font-size: 18px;
    color: #fff;
    letter-spacing: 1px;
    outline: none;
    background: #E34234;
    transition: 0.5s all ease;
    -webkit-transition: 0.5s all ease;
    -moz-transition: 0.5s all ease;
    -o-transition: 0.5s all ease;
    -ms-transition: 0.5s all ease;
    -webkit-appearance: none;
    text-transform: uppercase;
    letter-spacing: 1px;"></div>
		</form>	
</div>
</div>


	
<?php
	$counter++;
	}

?>

<br>

	





		</div>
	</div>
<hr width="100%">
	</body>
</html>

<?php include_once 'footer.php';?>