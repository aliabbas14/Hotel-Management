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
</head>
<body>
  <form method="post">
  
  <h2 class="w3l-inner-h-title">Rooms</h2>
  <div class="outerborder">
  <table class="innerborder">
    <tbody>
    <tr>
      <td style="width: 50%;background-color: #FFF;border-right:1px solid #DEDEDE; ">
        <div class="availablefirstcolumn">
          <p>Check-in Date: </p>
          <p><input type="date" id="in" name="in" class="form-control" value="<?php echo date('Y-m-d'); ?>" min="<?php echo date('Y-m-d'); ?>" onchange="fetchdate()"></p>
        </div>
        <div class="availableSeccolumn" style="float: left;"">
          <p>Check-out Date: </p>
          <p><input type="date" id="out" name="out" class="form-control" value="<?php echo date('Y-m-d',strtotime("+1 day")); ?>" min="<?php echo date('Y-m-d',strtotime("+1 day")); ?>"></p>
        </div>

        <!--<td>
          <input type="checkbox" name="single">Single
        </td>

        <td>
          <input type="checkbox" name="double">Double
        </td>

        <td>
          <input type="checkbox" name="triple">Triple
        </td>-->

       <select name="type">
        <?php 
          $conn=mysqli_connect("localhost","root","") or die(mysqli_error($conn));
          mysqli_select_db($conn,"hotel_managment") or die(mysqli_error($conn));
          $a="select room_type_id,type from room_type";
          $result3=mysqli_query($conn,$a);
          while ($row3=mysqli_fetch_array($result3)) 
          {
            echo "<option value='".$row3['type']."'>".$row3['type']."</option>";
          }
          
        ?>
      </select>

    </tr>
    

    <table id="roomInfo" class="PersonInfo">
      <tbody>
        <tr>
          <th class="Roomstext">Rooms</th>
          
          <th class="persontext">Persons</th>
          <th class="childtext">Chidren</th>
        </tr>
        <tr class="RoomContent">
          <td rowspan="1" style="vertical-align: top;padding-top: 4px;padding-left: 25px;">
       <select class="form-control" name="room">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
        <option value="6">6</option>
      </select>
      </td>
      
        <td class="textAlignCenter" style="vertical-align: top;padding-left: 0px;">
          <select>
          <option value="1">1</option>
          <option selected="selected" value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
          <option value="5">5</option>
          <option value="6">6</option>
          <option value="7">7</option>
        </select>
      </td>
      <td style="vertical-align: bottom;text-align: center;padding-left: 20px;padding-bottom: 5px; ">

        <button class="btnInfo" name="check">Check Availability</button>
      </td>
    </tr>
  </tbody>   
</table>
</form>
<div class="Rooms">
  <div>
    <p>Available Rooms from <strong>22 Feb 2018</strong> to <strong>23 Feb 2018</strong> for <strong>  1 night </strong>,<strong> 2 Persons 
    </strong>
  </p>
  </div>
  <table id="RoomAvailTable" cellspacing="0" cellpadding="0" style="position: relative;">
    <tbody>
      <tr>
        <th class="RoomAvailTableTh1" style="color: white;font-size: 15px;background-color: orange;">Room Type</th>
        <th class="RoomAvailTableTh2" style="color: white;font-size: 15px;background-color: orange;">Conditions</th>
        <th class="RoomAvailTableTh2" style="color: white;font-size: 15px;background-color: orange;">per room per night</th>
        <th class="RoomAvailTableTh3" style="text-align: left;color: white;font-size: 15px;background-color: orange;">Reservations</th>
      </tr>

      <tr>
        <td class="RoomsAvailTd1">
          <div class="text">Single Room</div>
          <div>
          <img src="images/1.jpg" style="width:70%;" onclick="openModal();currentSlide(1)" class="hover-shadow cursor"></div>
          </td>
          <td>
            <ul type="square">
              <li>Breakfast buffet</li>
              <li>Free valet parking</li>
              <li>Free wireless Internet</li>
            </ul>
          </td>
          <td style="text-align: center;">
            <div class="price">
              <span class="fullprice">INR 5500</span>
              <div class="todayValue">Today's value deal</div>
            </div>
          </td>
          <script type="text/javascript">
              function redirect()
              {
              window.location.href="details.php"
            }
          </script>
          <td class="textAlignCenter">
            <div><button class="buttonBook" style="zoom:1;z-index: 25;" onclick="redirect()">Book now</button></div>
          </td>
      </tr>
<tr>
        <td class="RoomsAvailTd1">
          <div class="text">Deluxe Room</div>
          <div>
          <img src="images/2.jpg" style="width:70%;" onclick="openModal();currentSlide(2)" class="hover-shadow cursor"></div>
          </td>
          <td>
            <ul type="square">
              <li>Breakfast buffet</li>
              <li>Free valet parking</li>
              <li>Free wireless Internet</li>
            </ul>
          </td>
          <td style="text-align: center;">
            <div class="price">
              <span class="fullprice">INR 13500</span>
              <div class="todayValue">Today's value deal</div>
            </div>
          </td>
          <td class="textAlignCenter">
            <div><button class="buttonBook" style="zoom:1;z-index: 25;">Book now</button></div>
          </td>
      </tr>
      <tr>
        <td class="RoomsAvailTd1">
          <div class="text">Superior Room</div>
          <div>
          <img src="images/3.jpg" style="width:70%;" onclick="openModal();currentSlide(3)" class="hover-shadow cursor"></div>
          </td>
          <td>
            <ul type="square">
              <li>Breakfast buffet</li>
              <li>Free valet parking</li>
              <li>Free wireless Internet</li>
            </ul>
          </td>
          <td style="text-align: center;">
            <div class="price">
              <span class="fullprice">INR 15500</span>
              <div class="todayValue">Today's value deal</div>
            </div>
          </td>
          <td class="textAlignCenter">
            <div><button class="buttonBook" style="zoom:1;z-index: 25;">Book now</button></div>
          </td>
      </tr>
<tr>
        <td class="RoomsAvailTd1">
          <div class="text">Standard Room</div>
          <div>
          <img src="images/4.jpg" style="width:70%;" onclick="openModal();currentSlide(4)" class="hover-shadow cursor"></div>
          </td>
          <td>
            <ul type="square">
              <li>Breakfast buffet</li>
              <li>Free valet parking</li>
              <li>Free wireless Internet</li>
            </ul>
          </td>
          <td style="text-align: center;">
            <div class="price">
              <span class="fullprice">INR 14000</span>
              <div class="todayValue">Today's value deal</div>
            </div>
          </td>
          <td class="textAlignCenter">
            <div><button class="buttonBook" style="zoom:1;z-index: 25;">Book now</button></div>
          </td>
      </tr>


    </tbody>
  </table>
</div>
</tbody>
</table>
</div>
<div id="myModal" class="modal">
  <span class="close cursor" onclick="closeModal()">&times;</span>
  <div class="modal-content">

    <div class="mySlides">
      <div class="numbertext">1 / 4</div>
      <img src="images/g2.jpg" style="width:100%">
      
    </div>

    <div class="mySlides">
      <div class="numbertext">2 / 4</div>
      <img src="images/g3.jpg" style="width:100%">
    </div>

    <div class="mySlides">
      <div class="numbertext">3 / 4</div>
      <img src="images/g4.jpg" style="width:100%">
    </div>
    
    <div class="mySlides">
      <div class="numbertext">4 / 4</div>
      <img src="images/g7.jpg" style="width:100%">
    </div>
    
    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>

    <div class="caption-container">
      <p id="caption"></p>
    </div>


   <div class="column">
      <img class="demo cursor" src="images/g2.jpg" style="width:30%" onclick="currentSlide(1)" alt="">
       style
      <img class="demo cursor" src="images/g3.jpg" ="width:30%" onclick="currentSlide(2)" alt="These rooms come with King bed and free WiFi. With facilities similar to those offered in the Superior Room and a contemporary ambience, these rooms are specially designed for a relaxed and comfortable experience.
">
    
      <img class="demo cursor" src="images/g4.jpg" style="width:30%" onclick="currentSlide(3)" alt="These room come with an option of Queen and Twin beds. Facilities like free WiFi, DVD Player, bathtub, tea/coffee maker and an electronic safe makes your stay cozy and comfortable.">
    </div>
    <div class="column">

      <img class="demo cursor" src="images/g7.jpg" style="width:30%" onclick="currentSlide(4)" alt="The standard room category of this hotel, these super cozy rooms come with Queen and Princess bed options and have modern amenities like free WiFi, bathtub, tea/coffee maker, mini-bar and an electronic safe that are designed to make your stay refreshing.">
    </div>

</div>
<script>
function openModal() {
  document.getElementById('myModal').style.display = "block";
}

function closeModal() {
  document.getElementById('myModal').style.display = "none";
}

var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  var captionText = document.getElementById("caption");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  captionText.innerHTML = dots[slideIndex-1].alt;
}
</script>
<?php
   include_once("footer.php");
?>
</body>
</html>

<?php
  if(isset($_POST['check']))
  {
     
      $checkin=$_POST['Check-in'];
      $checkout=$_POST['Check-out']; 
      $rooms=$_POST['rooms']; 

      include_once 'config.php';

     /* $single=$_POST['single'];
      $double=$_POST['double'];
      $triple=$_POST['triple'];*/

      //echo "<script type='text/javascript'>alert('$all')</script>";

     // "SELECT * FROM rooms INNER JOIN room_type on rooms.room_type_id=room_type.room_type_id WHERE status=0 AND active=1 AND room_type.type='Single' OR room_type.type='Double'";

     

    /*  echo "sdj";

      $append=0;
      if ($single=="on") 
      {
            echo "<script type='text/javascript'>alert('jdxj')</script>";
           $x=" AND room_type.type='Single'";
            //$query.=" AND room_type.type='Single'";
            $append=1;
            $query=$query.$x;
             echo "<script type='text/javascript'>alert('$z')</script>";
      }
 echo "<script type='text/javascript'>alert('$query')</script>";

      if ($double=="on") 
      {
          if ($append==0) {
                $query.=" AND room_type.type='Double'";   
          }
          else{
                $query.=" OR room_type.type='Double'";   
          }

          $append=1;         
      }

      if ($triple=="on") {
       
          if ($append==0) {
                $query.=" AND room_type.type='Triple'";   
          }
          else{
                $query.=" OR room_type.type='Triple'";   
          }
      }

      echo "<script type='text/javascript'>alert('$query')</script>";
      echo $query;*/

      $room_type=$_POST['room_type'];

       $query="SELECT room_no FROM rooms INNER JOIN room_type on rooms.room_type_id=room_type.room_type_id WHERE status=0 AND active=1 AND room_type.type='".$room_type."'";

        echo "<script type='text/javascript'>alert('$query')</script>";

     /* switch ($room_type) {
        case 'Single':
            
             $query="SELECT room_no FROM rooms INNER JOIN room_type on rooms.room_type_id=room_type.room_type_id WHERE status=0 AND active=1 AND room_type.type='Single'";               
      
          break;

        case 'Double':
          $query="SELECT room_no FROM rooms INNER JOIN room_type on rooms.room_type_id=room_type.room_type_id WHERE status=0 AND active=1 AND room_type.type='Double'";        
          break;

          case 'Triple':
             $query="SELECT room_no FROM rooms INNER JOIN room_type on rooms.room_type_id=room_type.room_type_id WHERE status=0 AND active=1 AND room_type.type='Triple'";        
            break;
      }*/

      $result=mysqli_query($conn,$query);

        $u=mysqli_num_rows($result);
        //    echo "<script type='text/javascript'>alert('$u')</script>";

      if(mysqli_num_rows($result) >= $rooms)
      {
         echo "<script type='text/javascript'>alert('$rooms room available in $room_type type')</script>";
          $row=mysqli_fetch_array($result);
          $x=$row['room_no'];
      }
      else
      {
          //echo "<script type='text/javascript'>alert('dfsj')</script>";
            $z=mysqli_num_rows($result);
         // echo "<script type='text/javascript'>alert('$z')</script>";
            //echo mysqli_num_rows($result)." rooms available"; 
            $left=$rooms-$z;



            $query2="SELECT * from booking_details INNER JOIN room_type WHERE booking_details.room_type_id=room_type.room_type_id AND room_type.type='".$room_type."'";
            //echo "<script type='text/javascript'>alert('$query2')</script>";
            $result2=mysqli_query($conn,$query2);

            while($row2=mysqli_fetch_array($result2))
            {

                $check_in_book=$row2['check_in_date'];
                $check_out_book=$row2['check_out_date'];

                  //echo "<script type='text/javascript'>alert('$check_in_book')</script>";
                  //echo "<script type='text/javascript'>alert('$check_out_book')</script>";

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

            if($left==0)
                  echo "<script type='text/javascript'>alert('$rooms room available in $room_type type')</script>";
            else
            {
                echo "<script type='text/javascript'>alert('$left room not available in $room_type type')</script>";
            }


      }

  } 
?>