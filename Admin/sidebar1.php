<nav class="ts-sidebar">
      <ul class="ts-sidebar-menu">
      
        <li class="ts-label">Main</li>
        <?php 
        if(!isset($_SESSION['A_login']))
      {?>
    <li><a href="admin_login.php"><i class="fa fa-users"></i> Admin Login</a></li>
        <li><a href="#"><i class="fa fa-user"></i> Manager Login</a></li>-->
        <?php 
        }else{
        ?>
      
          <li><a href="dashboard.php"><i class="fa fa-desktop"></i>Dashboard</a></li>
          <button class="dropdown-btn" style="font-size: 20px;color:#18181;
    display: block;border: none;background: none;width: 100%;text-align: left;cursor: pointer;outline: none;">Rooms
    <i class="fa fa-caret-down" style="float: right;padding-right: 8px;"></i>
  </button>
  <div class="dropdown-container" style="display: none;background-color: #262626;padding-left: 8px;">
    <a href="add_room.php">Add Rooms</a>
    <a href="manage-rooms.php">Manage rooms</a>
    
  </div>
  <a href="payment_details.php">Payment Details</a>

          <li><a href="add_room.php"><i class="fa fa-user"></i>Add Rooms</a></li>
          <li><a href="manage-rooms.php"><i class="fa fa-user"></i>Manage Rooms</a></li>
          <li><a href="category_details.php"><i class="fa fa-files-o"></i>Room Type</a></li>
          <li><a href="add_room_type.php"><i class="fa fa-files-o"></i>Add Room Type</a></li>
          <li><a href="display_booking_details.php"><i class="fa fa-file-o"></i>View Booking Details</a></li>
          <li><a href="booking_history.php"><i class="fa fa-file-o"></i>View Booking History</a></li>
          <li><a href="offers_details.php"><i class="fa fa-file-o"></i>Offers</a></li>
          <li><a href="add_offer.php"><i class="fa fa-file-o"></i>Add Offers</a></li>
          <li><a href="gallery.php"><i class="fa fa-file-o"></i>Update Gallery</a></li>
          <li><a href="payment_details.php"><i class="fa fa-file-o"></i>View Payment Details</a></li>
          <li><a href="login_history.php"><i class="fa fa-file-o"></i>View Login History</a></li>
          <li><a href="manage_staff.php"><i class="fa fa-file-o"></i>Staff</a></li>
          <li><a href="add_staff.php"><i class="fa fa-file-o"></i>Add Staff</a></li>
<!--<li><a href="admin_logout.php"><i class="fa fa-file-o"></i>log out</a></li>-->
<?php } ?>  
      </ul>
    </nav>


  



<script>
/* Loop through all dropdown buttons to toggle between hiding and showing its dropdown content - This allows the user to have multiple dropdowns without any conflict */
var dropdown = document.getElementsByClassName("dropdown-btn");
var i;

for (i = 0; i < dropdown.length; i++) {
  dropdown[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var dropdownContent = this.nextElementSibling;
    if (dropdownContent.style.display === "block") {
      dropdownContent.style.display = "none";
    } else {
      dropdownContent.style.display = "block";
    }
  });
}
</script>

</body>
</html> 
