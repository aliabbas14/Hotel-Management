

<?php session_start();
error_reporting(0);?><div class="brand clearfix">
		<a href="#" class="logo" style="font-size:18px;">Hotel Managment System</a></marquee>
	<?php
	
	 if(isset($_SESSION['A_login']))
	{ ?>	
		<ul class="ts-profile-nav">
				<ul>
					<li><a href="admin_profile.php">My Profile</a></li>
					<li><a href="admin_logout.php">Logout</a></li>
				</ul>
			
		</ul>
	<?php } ?>
	</div>
		
	
	