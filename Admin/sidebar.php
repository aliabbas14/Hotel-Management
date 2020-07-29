<nav class="ts-sidebar">
			<ul class="ts-sidebar-menu">
			
				<li class="ts-label">Main</li>
				<?php 
				if(!isset($_SESSION['A_login']))
			{?>
		<li><a href="admin_login.php"><i class="fa fa-users"></i> Admin Login</a></li>
				
				<?php 
				}else{
				?>
			
					<li><a href="dashboard.php"><i class="fa fa-desktop"></i>Dashboard</a></li>
					<li><a href="#"><i class="fa fa-user"></i> Rooms</a>
					<ul>
					<li><a href="add_room.php"><i class="fa fa-user"></i>Add Rooms</a></li>
					<li><a href="manage-rooms.php"><i class="fa fa-user"></i>Manage Rooms</a></li>
					</ul>
					</li>

					<li><a href="#"><i class="fa fa-user"></i> Rooms Type</a>
					<ul>
					<li><a href="category_details.php"><i class="fa fa-files-o"></i>Room Type</a></li>
					<li><a href="add_room_type.php"><i class="fa fa-files-o"></i>Add Room Type</a></li>
					</ul>
					</li>

					<li><a href="#"><i class="fa fa-user"></i>Staff Type</a>
					<ul>
					<li><a href="staff_type.php"><i class="fa fa-files-o"></i>staff Type</a></li>
					<li><a href="add_staff_type.php"><i class="fa fa-files-o"></i>Add staff Type</a></li>
					</ul>
					</li>

					<li><a href="#"><i class="fa fa-user"></i> Staff</a>
					<ul>
						<li><a href="manage_staff.php"><i class="fa fa-file-o"></i>Current Staff</a></li>
						<li><a href="manage_exstaff.php"><i class="fa fa-file-o"></i>Ex.Staff</a></li>
					<li><a href="add_staff.php"><i class="fa fa-file-o"></i>Add Staff</a></li>
					</ul>
					</li>
					
					


					<li><a href="#"><i class="fa fa-user"></i> Offers</a>
					<ul>
					<li><a href="offers_details.php"><i class="fa fa-file-o"></i>Offers</a></li>
					<li><a href="add_offer.php"><i class="fa fa-file-o"></i>Add Offers</a></li>
					</ul>
				</li>

                   <li><a href="#"><i class="fa fa-user"></i> Managers</a>
					<ul>
					<li><a href="manage_manager.php"><i class="fa fa-file-o"></i>Manage Manager</a></li>
					<li><a href="add_manager.php"><i class="fa fa-file-o"></i>Add Manager</a></li>
					</ul>
				</li>
					<li><a href="display_booking_details.php"><i class="fa fa-file-o"></i>View Booking Details</a></li>
					<li><a href="booking_history.php"><i class="fa fa-file-o"></i>View Booking History</a></li>
					<li><a href="gallery.php"><i class="fa fa-file-o"></i>Update Gallery</a></li>
					<!--<li><a href="payment_details.php"><i class="fa fa-file-o"></i>View Payment Details</a></li>
					<li><a href="login_history.php"><i class="fa fa-file-o"></i>View Login History</a></li>-->
					<li><a href="view_user_details.php"><i class="fa fa-file-o"></i>View User Details</a></li>
					<!--<li><a href="admin_logout.php"><i class="fa fa-file-o"></i>log out</a></li>-->
<?php } ?>	
			</ul>
		</nav>