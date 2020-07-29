<?php
session_start();
include('config.php');
if(!isset($_SESSION['login1']))
{
  header('Location:index.php');
}

?>
<?php 
  if(!isset($_GET['id']))
  {
    header("Location:rooms.php");
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

<?php
    
    $data=mysqli_query($conn,"select * from booking_details where booking_id=".$_GET['id']);
    $row=mysqli_fetch_array($data);
      # code...
          $ch=$row['check_in_date'];
          $chout=$row['check_out_date'];
      $name=$row['name']."<br>";
      $phone=$row['phone_no']."<br>";
       $country= $row['country']."<br>"; 
      $city=  $row['city']."<br>";
        $add=$row['address']."<br>";
        $pin=$row['pincode']."<br>";
      $email=$row['email']."<br>";
    
?>
<div>
    <center><table>
      <tr><td colspan="2"><img src="../images/user-256.png" height="50%"></td></tr>
      <tr><td>&nbsp;</td><td>&nbsp;&nbsp;</td></tr>
      <tr>
        <td>Name:</td>
        <td><?php echo$name;?></td>
      </tr>
      <tr>
        <td>Phone:</td>
        <td><?php echo$phone;?></td>
      </tr>
       <tr>
        <td>Email:</td>
        <td><?php echo$email;?></td>
      </tr>
       <tr>
        <td>Gender:</td>
        <td><?php echo$row['gender'];?></td>
      </tr>
      
       <tr>
        <td>Address:</td>
        <td><?php echo$add;?></td>
      </tr>
       <tr>
        <td>City:</td>
        <td><?php echo$city;?></td>
      </tr>
       <tr>
        <td>Pincode:</td>
        <td><?php echo$pin;?></td>
      </tr>
       <tr>
        <td>Country:</td>
        <td><?php echo$country;?></td>
      </tr>
       <tr>
        <td><b>Check In Date:</b></td>
        <td><b><?php echo$ch;?></b></td>
      </tr>
       <tr>
        <td><b>Check Out Date:</b></td>
        <td><b><?php echo$chout;?></b></td>
      </tr>
    </table>
</center>
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