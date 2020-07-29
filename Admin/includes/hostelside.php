<nav class="ts-sidebar">
			<ul class="ts-sidebar-menu">
			
				<li class="ts-label">Main</li>
				

				
				<?php if(isset($_SESSION['h_id']))
				{ ?>
					<li><a href="dashboard1.php"><i class="fa fa-desktop"></i>Dashboard</a></li>
					<li><a href="hostel_sort1.php"><i class="fa fa-user"></i>Search</a></li>
					<li><a href="change_password.php"><i class="fa fa-user"></i>Change Password</a></li>
					<li><a href="hostelout.php"><i class="fa fa-file-o"></i>log out</a></li>
				<?php } ?>
				
				
				
				<?php 
				if(!isset($_SESSION['h_id']))
				{?>
				<li><a href="index.php"><i class="fa fa-users"></i> Hostel Login</a></li>
				<li><a href="admin_login.php"><i class="fa fa-user"></i> Admin Login</a></li>
				<?php 
				}
				?>
			</ul>
		</nav>