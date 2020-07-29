

<?php include 'header3.php'; ?>
	<?php 

	unset($_SESSION['forgot']);
	if(!isset($_GET['token']) || !isset($_SESSION['mail']))
	{
		
		?>
		<script>window.location.href = "index1.php";</script>
		<?php
	}
			include 'conf.php';
			$query="select token from user_details where email='".$_SESSION['mail']."'";
			$result=mysqli_query($connection,$query);
			$out=mysqli_fetch_array($result);
			$token=$out['token'];
			$token_get=$_GET['token'];
			mysqli_close($connection);
				if($token!=$token_get)
				{
					?><script>window.location.href = "index1.php";</script>
					<?php 
					
				}
	
?>
<html>
<head>
	<?php 

	
	if(!isset($_GET['token']) || !isset($_SESSION['mail']))
	{
		
		?>
		<script>window.location.href = "index1.php";</script>
		<?php
	}
			include 'conf.php';
			$query="select token from user_details where email='".$_SESSION['mail']."'";
			$result=mysqli_query($connection,$query);
			$out=mysqli_fetch_array($result);
			$token=$out['token'];
			$token_get=$_GET['token'];
			mysqli_close($connection);
				if($token!=$token_get)
				{
					?><script>window.location.href = "index1.php";</script>
					<?php 
					
				}
	
?>	
	<script type="text/javascript">
		function 	resetcheck() {
			// body...
			var password=document.reset.fpassword;
			var ccpassword=document.reset.cpassword;
			
			if(password.value=="")
			{

					document.getElementById('fpassid').innerHTML="Please Enter Password";
					
					password.focus();
					password.style.border="1px solid red";
					return false;
			}
			
			else if(password.value.length<6 || password.value.length>15)
			{
				document.getElementById('fpassid').innerHTML="Password must in 6 and 15 Character";
				password.style.border="1px solid red";
				password.focus();
				return false;
			}
			else
			{
				document.getElementById('fpassid').innerHTML="";
				password.style.border="1px solid white";
				
			}
			
			if(ccpassword.value=="")
			{
				document.getElementById('cpassid').innerHTML="Please Enter Confirm Password";
				ccpassword.focus();
				ccpassword.style.border="1px solid red";
				return false;
			}
			else if(password.value!=ccpassword.value)
			{
				document.getElementById('cpassid').innerHTML="Password Does not match";
				ccpassword.focus();
				ccpassword.style.border="1px solid red";
				return	false;
			}
			else
			{
				document.getElementById('cpassid').innerHTML="";
				ccpassword.style.border="1px solid white"
			}
		}

	</script>

	<?php
	$pass="";
	$cpass="";
	$passtemp="";
	$cpasstemp="";
	$passerr="";
	$cpasserr="";
	$token="";
	$token_get="";
		if(isset($_POST['reset']))
		{
			$pass=$_POST['fpassword'];
			$cpass=$_POST['cpassword'];
			if(trim($pass)=="")
			{
				$passtemp=$pass;
				$passerr="Please Enter Password";
			}
			else
			{
				$passerr="";
			}
			if(trim($cpass)=="")
			{
				$cpasstemp=$cpass;
				$cpasserr="Please Enter Confirm Password";
			}
			else if($pass!=$cpass)
			{
				$cpasstemp=$cpass;
				$cpasstemp="Password does not match";
			}
			else
			{
				$cpasstemp="";
			}
			if(isset($_SESSION['mail']) && isset($_GET['token']))
			{
			include 'conf.php';
			$query="select token from user_details where email='".$_SESSION['mail']."'";
			$result=mysqli_query($connection,$query);
			$out=mysqli_fetch_array($result);
			$token=$out['token'];
			$token_get=$_GET['token'];
				
				
					$a="";
					$update="update user_details set password='".password_hash($pass,PASSWORD_DEFAULT)."' where email='".$_SESSION['mail']."'";
					$qu=mysqli_query($connection,$update);
					$l=mysqli_query($connection,"update user_details set token=NULL where email='".$_SESSION['mail']."'");
					
					mysqli_close($connection);
					?>
					<script>window.location.href = "index1.php";</script>
					<?php 
				
			}
		
			else
			{
			?>
			<script>window.location.href = "index1.php";</script>
			<?php
				
			}

		}

	?>
</head>
<body>
<div class="col-md-6 w3l_about_bottom_right two" style="width:70%;margin-left: 12%">
			<h3 class="tittle why" style="text-align:center">Reset Password</h3>
			<div class="book-form" >

			   <form action="" method="post" name="reset" onsubmit="return resetcheck()">
					<div class="col-md-6 form-date-w3-agileits" style="float:none;width:100%">
						<label>Enter Password:</label>&nbsp;&nbsp;<span id="fpassid" style="color:white"></span>
						<input type="password" name="fpassword" placeholder="Enter Password"  style="width:100%;
    color: #9a9797;
    outline: none;
    font-size: 0.9em;
    line-height: 25px;
    padding: 3px 10px;
    border: 2px solid #fff;
    -webkit-appearance: none;
    margin-bottom: 1em;
    background: none;
    color:white;
	    font-family: 'Open Sans', sans-serif;">
					</div>
					<div class="col-md-6 form-date-w3-agileits second-agile" style="float:none;width:100%">
						<label>Enter Confirm Password:</label>&nbsp;&nbsp;<span id="cpassid" style="color:white"></span>
						<input type="password" name="cpassword" placeholder="Enter Confirm Password:" style="width: 100%;
    color: #9a9797;
    outline: none;
    font-size: 0.9em;
    line-height: 25px;
    padding: 3px 10px;
    border: 2px solid #fff;
    -webkit-appearance: none;
    margin-bottom: 1em;
    background: none;&nbsp;
    color:white;
	    font-family: 'Open Sans', sans-serif;">
					</div>
					<div class="clearfix"> </div>
					<div class="make wow shake" data-wow-duration="1s" data-wow-delay=".5s">
						  <input type="submit" value="Reset Password" name="reset">
						 
					</div>
			</form>
								</div>

		</div>
	</body>
<?php include 'footer.php'; ?>