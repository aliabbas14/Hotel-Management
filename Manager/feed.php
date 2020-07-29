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
<h1>Feedback:</h1>
     <iframe src="feedback.php" width="100%" height="500px" style="border:none"></iframe>

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