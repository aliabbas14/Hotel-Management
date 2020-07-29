<?php
session_start();
include('config.php');
if(!isset($_SESSION['login1']))

{
  header('Location:index.php');
}

?>
<!doctype html>
<html lang="en" class="no-js">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<meta name="theme-color" content="#3e454c">
	
	<title>DashBoard</title>
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/dataTables.bootstrap.min.css">
	<link rel="stylesheet" href="css/bootstrap-social.css">
	<link rel="stylesheet" href="css/bootstrap-select.css">
	<link rel="stylesheet" href="css/fileinput.min.css">
	<link rel="stylesheet" href="css/awesome-bootstrap-checkbox.css">
	<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

</head>

<body>
<?php include("includes/header.php");?>
<br>
	<div class="ts-main-content">
		<?php include("includes/sidebar.php");?>
		<div class="content-wrapper">
			<div class="container-fluid">
				<br><br><br>
<h1>Single Type Room:</h1>
				<div class="w3-container">
  <?php 
  		include('config.php');
  		$select="SELECT * FROM rooms INNER JOIN room_type on rooms.room_type_id=room_type.room_type_id WHERE status=0 AND active=1 AND room_type.type='Single'";
  		

  		$result=mysqli_query($conn,$select);
  		$no=mysqli_num_rows($result);
  		$singleroom=array();
  			if($no>0)
  		{		
  		while ($row=mysqli_fetch_array($result)) {
  			
  		
  	
  		?>

   <div class="w3-card" style="width:25%;float: left;margin-right: 50px">
    
    <div class="w3-container" style="text-align:center;background-color: green;color:white">
      <h4><b>Room No:<?php echo$row['room_no']?></b></h4>
      <p >Available</p>
    </div>
  </div>

 <?php 
 		}
 	}

 ?>
  <?php 
  	$select1="SELECT * FROM rooms INNER JOIN room_type on rooms.room_type_id=room_type.room_type_id WHERE status=1 AND active=1 AND room_type.type='Single'";
  	$quer=mysqli_query($conn,$select1);


  	$no1=mysqli_num_rows($quer);
  	
  			if($no1>0)
  		{		
  		while ($row=mysqli_fetch_array($quer)) {
  			$s="select * from booking_details where room_no=".$row['room_no'];
  			$r=mysqli_query($conn,$s);
  			$no2=mysqli_num_rows($r);
  			if($no2>0)
  			{
  				while ($rq=mysqli_fetch_array($r)) {
  					# code...
  					$chin=$rq['check_in_date'];
  					$chout=$rq['check_out_date'];
  					
  					$da=date("Y-m-d");
  					if($da>=$chin && $da<=$chout)
  					{
  						?>
  				
  		<a href="user_details.php?id=<?php echo$rq['booking_id']?>">

  <div class="w3-card" style="width:25%;float: left;margin-right: 50px">
    
    <div class="w3-container" style="text-align:center;background-color: red;color:white">
      <h4><b>Room No:<?php echo$row['room_no']?></b></h4>
      <p>Currently Booked</p>
    </div>
  </div>
</a>
 <?php
 	}
 			else
 			{
 				?>
 				<a href="user_details.php?id=<?php echo$rq['booking_id']?>">
 				 <div class="w3-card" style="width:25%;float: left;margin-right: 50px">
    
    <div class="w3-container" style="text-align:center;background-color: yellow;color:red">
      <h4><b>Room No:<?php echo$row['room_no']?></b></h4>
      
      <p>Checkin Date:<?php echo$chin;echo"   Checkout Date:".$chout; ?></p>
    </div>
  </div>
</a>
 				<?php
 			}

  				}
  			} 


 		}
 	}

 ?>

</div>


			</div>
		</div>
	<div class="content-wrapper">
			<div class="container-fluid">
				<br><br><br>
<h1>Double Type Room:</h1>
				<div class="w3-container">
  <?php 
  		$conn=mysqli_connect("localhost","root","");
  		mysqli_select_db($conn,"hotel_managment");
  		$select="SELECT * FROM rooms INNER JOIN room_type on rooms.room_type_id=room_type.room_type_id WHERE status=0 AND active=1 AND room_type.type='Double'";
  		

  		$result=mysqli_query($conn,$select);
  		$no=mysqli_num_rows($result);
  		$singleroom=array();
  			if($no>0)
  		{		
  		while ($row=mysqli_fetch_array($result)) {
  			
  		
  	
  		?>

  <div class="w3-card" style="width:25%;float: left;margin-right: 50px">
    
    <div class="w3-container" style="text-align:center;background-color: green;color:white">
      <h4><b>Room No:<?php echo$row['room_no']?></b></h4>
      <p >Available</p>
    </div>
  </div>

 <?php 
 		}
 	}

 ?>
  <?php 
  	$select1="SELECT * FROM rooms INNER JOIN room_type on rooms.room_type_id=room_type.room_type_id WHERE status=1 AND active=1 AND room_type.type='Double'";
  	$quer=mysqli_query($conn,$select1);


  	$no1=mysqli_num_rows($quer);
  	
  			if($no1>0)
  		{		
  		while ($row=mysqli_fetch_array($quer)) {
  		$s="select * from booking_details where room_no=".$row['room_no'];
  			$r=mysqli_query($conn,$s);
  			$no2=mysqli_num_rows($r);
  			if($no2>0)
  			{
  				while ($rq=mysqli_fetch_array($r)) {
  					# code...
  					$chin=$rq['check_in_date'];
  					$chout=$rq['check_out_date'];
  					
  					$da=date("Y-m-d");
  					if($da>=$chin && $da<=$chout)
  					{
  						?>
  				
  		<a href="user_details.php?id=<?php echo$rq['booking_id']?>">

  <div class="w3-card" style="width:25%;float: left;margin-right: 50px">
    
    <div class="w3-container" style="text-align:center;background-color: red;color:white">
      <h4><b>Room No:<?php echo$row['room_no']?></b></h4>
      <p>Currently Booked</p>
    </div>
  </div>
</a>
 <?php
 	}
 			else
 			{
 				?>
 				<a href="user_details.php?id=<?php echo$rq['booking_id']?>">
 				 <div class="w3-card" style="width:25%;float: left;margin-right: 50px">
    

    <div class="w3-container" style="text-align:center;background-color: yellow;color:red">
      <h4><b>Room No:<?php echo$row['room_no']?></b></h4>
      
      <p>Checkin Date:<?php echo$chin;echo"   Checkout Date:".$chout; ?></p>
    </div>
  </div>
</a>
 				<?php
 			}

  				}
  			} 


 		}
 	}

 ?></div></div></div>
 <div class="content-wrapper">
			<div class="container-fluid">
				<br><br><br>
<h1>Triple Type Room:</h1>
				<div class="w3-container">
  <?php 
  		$conn=mysqli_connect("localhost","root","");
  		mysqli_select_db($conn,"hotel_managment");
  		$select="SELECT * FROM rooms INNER JOIN room_type on rooms.room_type_id=room_type.room_type_id WHERE status=0 AND active=1 AND room_type.type='Triple'";
  		

  		$result=mysqli_query($conn,$select);
  		$no=mysqli_num_rows($result);
  		$singleroom=array();
  			if($no>0)
  		{		
  		while ($row=mysqli_fetch_array($result)) {
  			
  		
  	
  		?>
  <div class="w3-card" style="width:25%;float: left;margin-right: 50px">
    
    <div class="w3-container" style="text-align:center;background-color: green;color:white">
      <h4><b>Room No:<?php echo$row['room_no']?></b></h4>
      <p >Available</p>
    </div>
  </div>

 <?php 
 		}
 	}

 ?>
  <?php 
  	$select1="SELECT * FROM rooms INNER JOIN room_type on rooms.room_type_id=room_type.room_type_id WHERE status=1 AND active=1 AND room_type.type='Triple'";
  	$quer=mysqli_query($conn,$select1);


  	$no1=mysqli_num_rows($quer);
  	
  			if($no1>0)
  		{		
  		while ($row=mysqli_fetch_array($quer)) {
  	$s="select * from booking_details where room_no=".$row['room_no'];
  			$r=mysqli_query($conn,$s);
  			$no2=mysqli_num_rows($r);
  			if($no2>0)
  			{
  				while ($rq=mysqli_fetch_array($r)) {
  					# code...
  					$chin=$rq['check_in_date'];
  					$chout=$rq['check_out_date'];
  					
  					$da=date("Y-m-d");
  					if($da>=$chin && $da<=$chout)
  					{

  						?>
  			
  		<a href="user_details.php?id=<?php echo$rq['booking_id']?>">


  <div class="w3-card" style="width:25%;float: left;margin-right: 50px">
    
    <div class="w3-container" style="text-align:center;background-color: red;color:white">
      <h4><b>Room No:<?php echo$row['room_no']?></b></h4>
      <p>Currently Booked</p>
    </div>
  </div>
</a>
 <?php
 	}
 			else
 			{
        echo"<script>alert(".$rq['user_id'].")</script>";
 				?>
 				<a href="user_details.php?id=<?php echo$rq['booking_id']?>">
 				 <div class="w3-card" style="width:25%;float: left;margin-right: 50px">
    
    <div class="w3-container" style="text-align:center;background-color: yellow;color:red">
      <h4><b>Room No:<?php echo$row['room_no']?></b></h4>
      
      <p>Checkin Date:<?php echo$chin;echo"   Checkout Date".$chout; ?></p>
    </div>
  </div>
</a>
 				<?php
 			}

  				}
  			} 


 		}
 	}

 ?>
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
	
	<script>
		
	window.onload = function(){
    
		// Line chart from swirlData for dashReport
		var ctx = document.getElementById("dashReport").getContext("2d");
		window.myLine = new Chart(ctx).Line(swirlData, {
			responsive: true,
			scaleShowVerticalLines: false,
			scaleBeginAtZero : true,
			multiTooltipTemplate: "<%if (label){%><%=label%>: <%}%><%= value %>",
		}); 
		
		// Pie Chart from doughutData
		var doctx = document.getElementById("chart-area3").getContext("2d");
		window.myDoughnut = new Chart(doctx).Pie(doughnutData, {responsive : true});

		// Dougnut Chart from doughnutData
		var doctx = document.getElementById("chart-area4").getContext("2d");
		window.myDoughnut = new Chart(doctx).Doughnut(doughnutData, {responsive : true});

	}
	</script>

</body>

</html>