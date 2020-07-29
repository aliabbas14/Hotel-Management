<?php
	session_start();
	if(isset($_POST['log1']))
	{
		$secondsWait = 0;
				 												
		echo '<meta http-equiv="refresh" content="'.$secondsWait.'">';
		session_destroy();

	}
 ?>
<div class="brand clearfix">
		<a href="#" class="logo" style="font-size:16px;">Hostel Management System</a>
		<span class="menu-btn"><i class="fa fa-bars"></i></span>
		<ul class="ts-profile-nav">
			<li class="ts-account">
				<a href="#"><img src="img/ts-avatar.jpg" class="ts-avatar hidden-side" alt=""> Account <i class="fa fa-angle-down hidden-side"></i></a>
				<ul>
					<li><a href="admin-profile.php">My Account</a></li>
					<form method="post">
					<li><input type="submit" style="border:none;width:100%;height:40px" onmouseover="color()" id="log" name="log1" value="Log out"></li>
				</form>
				</ul>
			</li>
			<script type="text/javascript">
				function color(argument) {
					// body...
					document.getElementById('log').style.color="red";
				}
			</script>
	
		</ul>
	</div>