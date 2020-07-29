<?php
	session_start();

	$a=$_SESSION['login'];
	

	$conn=mysqli_connect("localhost","root","") or die(mysqli_error($conn));
	mysqli_select_db($conn,"hotel_managment") or die(mysqli_error($conn));

	$query="select user_id from user_details where email='".$a."'";

	$result=mysqli_query($conn,$query);	

	$row=mysqli_fetch_array($result);

	$user_id=$row['user_id'];

	//$query2="SELECT room_type.type,room_type.image,booking_details.room_type_id,booking_details.check_in_date,booking_details.check_out_date,payment_details.total_payment from booking_details INNER JOIN payment_details ON booking_details.payment_id=payment_details.payment_id INNER JOIN room_type on booking_details.room_type_id=room_type.room_type_id WHERE booking_details.user_id=".$user_id." GROUP BY booking_details.payment_id";

	$query2="SELECT payment_id from booking_details WHERE booking_details.user_id=".$user_id." GROUP BY booking_details.payment_id";

	$result2=mysqli_query($conn,$query2);	

	$counter=$_GET['count'];

	$i=0;
	while ($row2=mysqli_fetch_array($result2)) {
		
		$id=$row2['payment_id'];



		if ($counter==$i) {
			break;
		}
		$i++;
	}

	$i=0;

	$query5="select room_no from booking_details where payment_id=".$id;
	$result5=mysqli_query($conn,$query5);
	while ($row5=mysqli_fetch_array($result5)) {
		$roomno[$i]=$row5['room_no'];
		$i++;
	}
	
	//print_r($roomno);

	$query3="delete from booking_details where payment_id=".$id;
	$result3=mysqli_query($conn,$query3);


	$query4="delete from payment_details where payment_id=".$id;
	$result4=mysqli_query($conn,$query4);

	$query7="select total_payment from payment_details where payment_id=".$id;
	$result7=mysqli_query($conn,$query7);

	$row7=mysqli_fetch_array($result7);
	$total=$row7['total_payment'];

	$fine=(($total*15)/100);
	$return=$total-$fine;



	$query6="select room_no from booking_details";
	$result6=mysqli_query($conn,$query6);


	$flag=0;
	for ($j=0; $j < sizeof($roomno); $j++) { 

		while ($row6=mysqli_fetch_array($result6)) {
			if ($roomno[$j]==$row6['room_no']) {
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

	//echo "<script>alert('".$fine." will be charged & ".$return." will be sent to your account');</script>";

	//$_SESSION['cancel']=$fine." will be charged & ".$return." will be sent to your account";
	$_SESSION['cancel']="dc";
	echo "dfsvc";

	header("Location:cancel.php");


?>