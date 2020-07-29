	
<!DOCTYPE html>
<html>
<head>

<?php session_start(); ?>
	<style type="text/css">
		
	.inner-header-agile {
    padding: 0 1em !important;
    position: relative;
    border-bottom: 1px solid rgba(255, 255, 255, 0.45);
}
	.sub:hover
	{

		color:red;
		
	}
	.no-js #loader { display: none;  }
.js #loader { display: block; position: absolute; left: 100px; top: 0; }
.se-pre-con {
	position: fixed;
	left: 0px;
	top: 0px;
	width: 100%;
	height: 100%;
	z-index: 9999;
	background: url(images/Preloader_3.gif) center no-repeat #fff;
}

	</style>
	
<title>Dreame hotel</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Resort Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>

	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.2/modernizr.js"></script>


	<script >
	$(window).load(function() {
		// Animate loader off screen
		$(".se-pre-con").fadeOut("slow");;
	});
	</script>
</head>
<!-- //for-mobile-apps -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" property="" />
<link rel="stylesheet" type="text/css" href="css/zoomslider.css" />
<link rel="stylesheet" type="text/css" href="css/style.css" />
<link href="css/font-awesome.css" rel="stylesheet"/> 

<script type="text/javascript" src="js/modernizr-2.6.2.min.js"></script>
<script type="text/javascript" src="js/password.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<!--/web-fonts-->
<link href="//fonts.googleapis.com/css?family=Dosis:200,300,400,500,600" rel="stylesheet">
<script src="https://www.google.com/recaptcha/api.js" async defer></script>
<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i" rel="stylesheet">
<!--//web-fonts-->
<style type="text/css">iframe.goog-te-banner-frame{display: none !important;}</style>
<link href="css/login.css" rel="stylesheet" />
<style type="text/css">body {position: static !important; top:0px !important;}</style>
<style type="text/css"> .goog-tooltip {
        display: none !important;
 }
 
 .goog-tooltip:hover {
        display: none !important;
 }
 
 .goog-text-highlight {
        background-color: transparent !important;
        border: none !important; 
        box-shadow: none !important;
    }
    
 </style>
<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    
        modal.style.display = "none";
    
}
function sign()
{
	document.getElementById('text').style.display="none";
	document.getElementById('text1').style.display="none";
	document.getElementById('signtext').style.display="block";
	document.getElementById('signt').classList.add("actives");
	document.getElementById('logint').classList.remove('active1');
}
function login()
{
	document.getElementById('signtext').style.display="none";
	document.getElementById('text').style.display="block";
	document.getElementById('text1').style.display="block";
	document.getElementById('logint').classList.add("active1");
	document.getElementById('signt').classList.remove('actives');
	document.getElementById('forgot').style.display="none";
	document.getElementById('forgothide').style.display="block";
}


</script>
<script>
	function loginvalidation()
	{
		email=document.loginform.uname1;
		pass=document.loginform.psw;
		
		var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.]{2,8})+\.([A-Za-z]{2,4})$/;
		if(email.value=="" || reg.test(email.value)==false || pass.value=="")
		{
			
			if(email.value=="")
			{
				
				email.innerHTML = "<style>#red::placeholder {color: red; }</style>";
				//email.style.::placeholder.color="red";
				email.placeholder="Please Enter Email Address";
				email.style.border="1px solid red"
				email.focus();
				
			}
            //var address = document.getElementById[email].value;
           else if (reg.test(email.value) == false) 
            {
            	document.getElementById('emailid').innerHTML="Please Enter Valid Email";
				email.style.border="1px solid red";
				email.focus();
                
            }
            if(pass.value=="")
            {
            	pass.innerHTML = "<style>#red1::placeholder {color: red; }</style>";
				//email.style.::placeholder.color="red";
				pass.placeholder="Please Enter Password";
				pass.style.border="1px solid red"
				pass.focus();
					
            }
            return false;
        }

	}
	function signupvaliation()
	{
		
		
		var email1=document.form1.uname;
		var passw=document.form1.psw;
		var cpass=document.form1.cpsw;
		var signpass=document.form1.password;
		var csignpass=document.form1.cpsw;
		
		
		
		var reg1 = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.]{2,8})+\.([A-Za-z]{2,4})$/;
		if(email1.value=="")
			{
				
				email1.innerHTML = "<style>#red2::placeholder {color: red; }</style>";
				//email.style.::placeholder.color="red";
				email1.placeholder="Please Enter Email Address";
				email1.style.border="1px solid red"
				email1.focus();
				return false;
				
			}
            //var address = document.getElementById[email].value;
          	else if (reg1.test(email1.value) == false) 
            {
            	document.getElementById('emailid1').innerHTML="Please Enter Valid Email";
				email1.style.border="1px solid red";
				email1.focus();
                return false;
            }
            else 
            {
            	email1.style.border="1px solid black";
            	document.getElementById('emailid1').innerHTML="";
            }
            if(signpass.value=="")
            {
            	signpass.innerHTML = "<style>#password::placeholder {color: red; }</style>";
				//email.style.::placeholder.color="red";
				signpass.placeholder="Please Enter Password";
				signpass.style.border="1px solid red"
				signpass.focus();
				return false;
			}
			else if(signpass.value.length<6 || signpass.value.length>15)
			{
				document.getElementById('passwordval1').innerHTML="Password must in 6 and 15 Character";
				signpass.style.border="1px solid red";
				signpass.focus();
				return false;
			}
			else
			{
				document.getElementById('passwordval1').innerHTML="";
				signpass.style.border="1px solid black";
			}
			if(csignpass.value=="")
			{
				csignpass.innerHTML = "<style>#cpass::placeholder {color: red; }</style>";
				//email.style.::placeholder.color="red";
				csignpass.placeholder="Please Enter Confirm Password";
				csignpass.style.border="1px solid red"
				csignpass.focus();
				return false;
			}	
			else if(signpass.value!=csignpass.value)
			{
				document.getElementById('cpasswordval').innerHTML="Password Does not match";
				csignpass.style.border="1px solid red";
				csignpass.focus();
                return false;
			}
			else
			{
				document.getElementById('cpasswordval').innerHTML="";
				csignpass.style.border="1px solid black";
			}
		
			

	}

</script>
<script type="text/javascript">
    function CheckPasswordStrength(password) {
        var password_strength = document.getElementById("passwordval");
        
 
        //TextBox left blank.
        if (password.length == 0) {
            password_strength.innerHTML = "";
            return;
        }
 
        //Regular Expressions.
        var regex = new Array();
        regex.push("[A-Z]"); //Uppercase Alphabet.
        regex.push("[a-z]"); //Lowercase Alphabet.
        regex.push("[0-9]"); //Digit.
        regex.push("[$@$!%*#?&]"); //Special Character.
 
        var passed = 0;
 
        //Validate for each Regular Expression.
        for (var i = 0; i < regex.length; i++) {
            if (new RegExp(regex[i]).test(password)) {
                passed++;
            }
        }
 
        //Validate for length of Password.
        if (passed > 2 && password.length > 8) {
            passed++;
        }
 		
        //Display status.
        var color = "";
        var strength = "";
        switch (passed) {
            case 0:
            case 1:
                strength = "Weak";
                color = "red";
                break;
            case 2:
                strength = "Good";
                color = "darkorange";
                break;
            case 3:
            case 4:
                strength = "Strong";
                color = "green";
                break;
            case 5:
                strength = "Very Strong";
                color = "darkgreen";
                break;
        }
        password_strength.innerHTML = strength;
        password_strength.style.color = color;
    }
</script>

</head>
<body>
<!--/main-header-->
  <!--/banner-section-->
  <div class="w3layouts-top-strip">
			<div class="top-srip-agileinfo">
				<div class="w3ls-social-icons text-left">
					<a class="facebook" href="#"><i class="fa fa-facebook"></i></a>
					<a class="twitter" href="#"><i class="fa fa-twitter"></i></a>
					<a class="pinterest" href="#"><i class="fa fa-pinterest-p"></i></a>
					<a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a>
					
				</div>
					<script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en',
    
      	layout:google.translate.TranslateElement.InlineLayout.HORIZONTAL
   }, 'google_translate_element');
}
</script>

<script type="text/javascript" src="f.js?cb=googleTranslateElementInit"></script>
				<div class="agileits-contact-info text-right">
					<div id="google_translate_element"></div>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	<div id="demo-1" class="banner-inner">
	
		<div class="demo-inner-content">
		<!--/header-w3l-->
			   <div class="header-w3-agileits" id="home">
			     <div class="inner-header-agile">	
								<nav class="navbar navbar-default">
									<div class="navbar-header">
										<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
											<span class="sr-only">Toggle navigation</span>
											<span class="icon-bar"></span>
											<span class="icon-bar"></span>
											<span class="icon-bar"></span>
										</button>
											<h1><a  href="index.html"><span>D</span>ream<p class="s-log">Hotel</p></a>
										 
										</h1>
									</div>
	<div class="se-pre-con"></div>
									
										<!-- navbar-header -->
									<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
										
				 <ul class="nav navbar-nav">
											<li class="active"><a href="index1.php">Home</a></li>
												<li><a href="demo.php">Book Room</a></li>
												<li><a href="offers2.php">Offer</a></li>
												 <li class="dropdown">
													<a href="codes.html" class="dropdown-toggle hvr-bounce-to-bottom" data-hover="Pages" data-toggle="dropdown" aria-expanded="false">Others <b class="caret"></b></a>
													 <ul class="dropdown-menu">
													 	<li><a href="gallery.php">Gallery</a></li>
														<li><a href="contact.php">Contact Us</a></li>
														<li><a href="about.php">About Us</a></li>
														<li><a href="feedback.php">Feedback</a></li>
														<li><a href="FAQ.php">FAQ</a></li>
													</ul>
												</li>
												
												<?php 
													if(!isset($_SESSION['login']))
													{
														
												?>
												<li style="border-right:none"><a href="#" onclick="document.getElementById('id01').style.display='block';document.getElementById('logint').classList.add('active1');" style="width:auto;">Login/Sign-Up</a></li>
											
													
													<?php } ?>
													
													<?php
													if(isset($_SESSION['login']))
													{
														
													
													?>
													<li class="dropdown" style="border-right:none">
													<a href="codes.html" class="dropdown-toggle hvr-bounce-to-bottom" data-hover="Pages" data-toggle="dropdown" aria-expanded="false">My Account<b class="caret"></b></a>
													 <ul class="dropdown-menu" >
													 	<li><a href="myprofile.php">Setting</a></li>
														<li><a href="cancel.php">My Reservation</a></li>
														<li><form method="post"><input type="submit" value="Logout" name="submitsub" style="width:100%;border:none;background: white;" class="sub"></form></li>
																													
														</ul>
													</li>
														<?php } ?>
														<?php 
															if(isset($_POST['submitsub']))
															{
																unset($_SESSION['login']);
																$secondsWait = 0;
				 												echo '<meta http-equiv="refresh" content="'.$secondsWait.'">';
															}
														?>
																						
																						
										</ul>


									</div>
									<div class="clearfix"> </div>	
								</nav>
									<div class="w3ls_search">
													<div class="cd-main-header">
														<ul class="cd-header-buttons">
															<li><a class="cd-search-trigger" href="#cd-search"> <span></span></a></li>
														</ul> <!-- cd-header-buttons -->
													</div>
													<div id="cd-search" class="cd-search">
														<form action="#" method="post">
															<input name="Search" type="search" placeholder="Search...">
														</form>
													</div>
												</div>
											</div> 
<div id="id01" class="modal" style="overflow: auto">

	<div class="modal-content animate" >
	 <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Login">&times;</span>
      <img src="images/user-256.png" alt="Avatar" class="avatar">
    </div>
 	<div class="container1" id="forgothide">
    	<div class="bar" onclick="login()" id="logint">Login</div>
    	<div class="bar1" onclick="sign()" id="signt">SignUp</div>
    </div>  
     <?php
  		$email="";
  		$password="";
  		$emailval="";
  		$passwordval="";
  		$emailtem="";
  		$passtemp="";
  	if(isset($_POST['submit1']))
  	{
  		unset($_SESSION['forgot']);

  			$email=$_POST['uname1'];
  			$password=$_POST['psw'];

  			if(trim($email)=="" || !filter_var($email, FILTER_VALIDATE_EMAIL) ||trim($password)=="")

  			{

  			if(trim($email)=="")
			{

  				$emailval="Please Enter Email Address";
  				echo"<script>document.getElementById('id01').style.display='block';</script>";
  				$passtemp=$password;
  				$emailtem=$email;
  			}
  			else if(!filter_var($email, FILTER_VALIDATE_EMAIL))
  			{
  				$emailval="Please Enter valid Email";
  			echo"<script>document.getElementById('id01').style.display='block';</script>";
  				$emailtem=$email;
  				$passtemp=$password;
  			}
  			else 
  			{
  				$emailval="";
  			}
  			if(trim($password)=="")
  			{
  				$passwordval="Please Enter Password";
  				echo"<script>document.getElementById('id01').style.display='block';</script>";
  				$passtemp=$password;
  				$emailtem=$email;

  			}
  			else
  			{
  				$passwordval="";
  			}
  		}
  		else
  		{
  			require 'conf.php';
  			
  			$select="select password from user_details where email='".$email."'";
  			$queryexe=mysqli_query($connection,$select);
  			$result=mysqli_fetch_array($queryexe);
  			$password_hash_value=$result['password'];
  			if(!$password_hash_value==1)
  			{
  				$emailtem=$email;
  				$passtemp=$password;
  				$emailval="Email Does Not Registered";
  				
  				mysqli_close($connection);
  				echo"<script>document.getElementById('id01').style.display='block';</script>";
  			}
  			else
  			{
  				if(password_verify($password,$password_hash_value))
  				{
  					
  					$_SESSION['login']=$email;
  					$secondsWait = 0;
				 	echo '<meta http-equiv="refresh" content="'.$secondsWait.'">';
  					mysqli_close($connection);
  				}
  				else
  				{
  					$emailtem=$email;
  					$passtemp=$password;
  					$passwordval="Password does not match";
  					echo"<script>document.getElementById('id01').style.display='block';</script>";		
  					mysqli_close($connection);
  				}
  			}

  		}
  	}

   ?>
<form name="loginform"  action="" method="post" onsubmit ="return loginvalidation()">
    <div class="container1" id="text">
      <label for="uname" style="margin-top:20px"><b>Email Address:</b>&nbsp;&nbsp;<span id="emailid" style="color:red"><?php echo$emailval; ?></span> </label>
      <input type="text" placeholder="Enter Address" name="uname1" class="textbox" id="red" value="<?php echo$emailtem; ?>">

      <label for="psw"><b>Password:</b>&nbsp;&nbsp;<span id="passid" style="color:red"><?php echo$passwordval; ?></span> </label>
      <input type="password" placeholder="Enter Password" name="psw" class="textbox" id="red1" value="<?php echo$passtemp; ?>">
        
      <input type="submit" value="Login" class="loginsub" name="submit1" >
      <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>
    </div>
   
    <div class="container1" style="background-color:#f1f1f1" id="text1">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
      <span class="psw">Forgot <a href="#" onclick="forgot_password()">password?</a></span>
    </div>
  </form>
<?php 
   			$sign_email="";
   			$signpass="";
   			$signcpass="";
   			$email_temp="";
   			$password_temp="";
   			$cpass_temp="";
   			$email_err="";
   			$signpass_err="";
   			$signcpass_err="";

   			if (isset($_POST['Submit'])) {
   				unset($_SESSION['forgot']);

   				$sign_email	=$_POST['uname'];
   				$signpass=$_POST['password'];
   				$signcpass=$_POST['cpsw'];
   					
   				
   				   	if(trim($sign_email)=="")
   				{
   						$email_err="Please Enter Some Value";
   						echo"<script>document.getElementById('id01').style.display='block';</script>";
   						$email_temp	=$sign_email;
   						$password_temp	=$signpass;
   						$cpass_temp	=$signcpass;
   				}
   				else if(!filter_var($sign_email, FILTER_VALIDATE_EMAIL)) {
    					
   						$email_err="Please Enter Valid Email";
   						echo"<script>document.getElementById('id01').style.display='block';</script>";
   						$email_temp	=$sign_email;
   						$password_temp	=$signpass;
   						$cpass_temp	=$signcpass;
				}
				else
				{

   						$email_err="";
				}
				if (trim($signpass)=="") {
						
					$signpass_err="Please Enter Password";
					echo"<script>document.getElementById('id01').style.display='block';</script>";
					$password_temp	=$signpass;
					$cpass_temp	=$signcpass;
					$email_temp	=$sign_email;
				}
				else if(strlen($signpass)<6 || strlen($signpass)>15)
				{
					$signpass_err	="Password must in 6 and 15 Character";
					echo"<script>document.getElementById('id01').style.display='block';</script>";
					$password_temp	=$signpass;
					$cpass_temp	=$signcpass;
					$email_temp	=$sign_email;
				}
				else 
				{
					$signpass_err="";
				}
				if(trim($signcpass)=="")
				{
						
						$signcpass_err="Please Enter Confirm Password";
						echo"<script>document.getElementById('id01').style.display='block';</script>";
   						$cpass_temp	=$signcpass;
   						$email_temp	=$sign_email;
   						$password_temp	=$signpass;
				}
				else if($signpass!=$signcpass)
				{
				
					$signcpass_err="Confirm Password Does not match";
					echo"<script>document.getElementById('id01').style.display='block';</script>";
   					$cpass_temp	=$signcpass;
   					$email_temp	=$sign_email;
   					$password_temp	=$signpass;
				}
				else 
				{
					$signpass_err="";
				}
			

				require 'conf.php';
				$hash=password_hash($signpass, PASSWORD_DEFAULT);
				$ins="Insert into user_details(email,password) values('".$sign_email."','".$hash."')";
				$insert=mysqli_query($connection,$ins);
				if(!$insert)
				{
					$cpass_temp	=$signcpass;
   					$email_temp	=$sign_email;
   					$password_temp	=$signpass;
					$email_err="Email is already used try to Login";
					echo"<script>document.getElementById('id01').style.display='block';</script>";
					mysqli_close($connection);
				}
				else
				{
					mysqli_close($connection);
				}

			
   	}


   ?>
  <div id="signtext" style="display:none">
  <form name="form1" action="" id="form1" method="post" onsubmit="return signupvaliation()">
  	<div class="container1" id="signtext">
      <label for="uname"><b>Email Id:</b>&nbsp;&nbsp;<span id="emailid1" style="color:red"><?php echo$email_err; ?></span></label>
      <input type="text" placeholder="Enter Your Email Id" name="uname" class="textbox" id="red2" value="<?php echo$email_temp; ?>">

      <label for="psw"><b>Password:</b>&nbsp;&nbsp;<span id="passwordval"></span>&nbsp;&nbsp;<span id="passwordval1" style="color:red"><?php echo$signpass_err; ?></span></label>
      <div>
      <input type="password" placeholder="Enter Password" id="password" name="password" class="textbox"  onkeyup="CheckPasswordStrength(this.value)" value="<?php echo$password_temp;?>"></div>
       <label for="psw"><b>Confirm Password:</b>&nbsp;&nbsp;<span id="cpasswordval" style="color:red"><?php echo$signcpass_err; ?></span></label>
      <input type="password" value="<?php echo$cpass_temp; ?>" placeholder="Confirm Password" name="cpsw" class="textbox" id="cpass">
      
    <div class="g-recaptcha" data-sitekey="6Lc4LUcUAAAAAGsGK5nJ-xFryNzHHJaLEa_1bWxd"></div>
<label>
    <input type="checkbox" checked="checked" name="remember"> I agree terms&condition
      </label>
      <br>
      <input type="submit" class="btn" name="Submit" value="Sign up">
      <input type="reset"  class="btn" style="background-color:red" value="Clear">
      </div>
     <h1>&nbsp;</h1>
   </form>
   <?php 
   		$forgot_email="";
   		$forgot_temp="";
   		$forgot_err="";
   		$headers="";
   		$variable="Send Me Mail";
   		if(isset($_POST['Submit12']))
   		{
   			
   			$forgot_email=$_POST['uname2'];
   			if(trim($forgot_email=="") || !filter_var($forgot_email,FILTER_VALIDATE_EMAIL))
   			{
   			if(trim($forgot_email==""))
   			{
   				$forgot_temp=$forgot_email;
   				$_SESSION['forgot']=$forgot_email;
   				$forgot_err="Please Enter Email";
   			}
   			else if(!filter_var($forgot_email, FILTER_VALIDATE_EMAIL))
   			{
 						$_SESSION['forgot']=$forgot_email;   					
   						$forgot_temp=$forgot_email;
   						$forgot_err="Please Enter Valid Email";
			}
			else
			{
				$forgot_err="";
			}
		 }
		 else
		 {
		 		require 'conf.php';
		 		$email_select="select password from user_details where email='".$forgot_email."'";
		 		$result=mysqli_query($connection,$email_select);
		 		$check=mysqli_fetch_array($result);
		 		$check_result=$check['password'];
		 		if(!$check_result==1)
		 		{

		 			$forgot_temp=$forgot_email;
		 			$forgot_err="Email is not Register";
		 			$_SESSION['forgot']="forgot";
		 			mysqli_close($connection);

		 		}
		 		else
		 		{
		 			$forgot_err="<span style='color:green'>Email Successfully Send</span>";
		 			$variable="Resend Mail";
		 			$forgot_temp=$forgot_email;
		 			$_SESSION['mail']=$forgot_email;
		 			$random_value=rand(1000,1000000);
		 			$_SESSION['forgot']=$forgot_email;

		 			$update="update user_details set token=".$random_value." where email='".$forgot_email."'";
		 			$update_query=mysqli_query($connection,$update) or die(mysqli_error($connection));
		 			$message="Click the below link to Reset Your Password :<a href='localhost/project/reset.php?token=".$random_value."'>Click Me</a>";
		 				$headers  = "From: dreamhotelahmedabad@gmail.com \r\n";
						$headers .= "Content-type: text/html\r\n";
					if(mail($forgot_email,'Password Reset',$message,$headers))
							echo"<script>alert('mail Send Successfully')</script>";
					else
							echo"<script>alert('mail Send Successfully')</script>";

		 		}
		 }

   		}

   ?>
  </div>
  		<div id="forgot" style="display:none">
  			<div class="container1">
  					<div style="width:100%;text-align:center;background: black;color:white;font-size:x-large;">Forgot Password</div>
  				</div>
  			<form name="forgot" method="post" action="" onsubmit="return forgotpassword()">
  				
  				<div class="container1">
      		<label for="uname" style="margin-top:20px"><b>Enter Email Address:</b>&nbsp;&nbsp;<span id="forgot_id" style="color:red"><?php echo$forgot_err; ?></span> </label>
      		<input type="text" placeholder="Enter Register Email Address" name="uname2" class="textbox" id="red3" value="<?php echo$forgot_temp; ?>">
      		 <input type="submit" class="loginsub" name="Submit12" value="<?php echo$variable; ?>"><br><br>
      		 <div class="container1" style="background-color:#f1f1f1" id="text1">
      		<button type="button" onclick="login()" class="cancelbtn">Back to Login</button>

  			</div>
  			</form>
  			<?php 
  				if(isset($_SESSION['forgot']))
  				{
  					?>

						<script type="text/javascript">
  				  		document.getElementById('id01').style.display="block";
						document.getElementById('text').style.display="none";
						document.getElementById('text1').style.display="none";
						document.getElementById('forgothide').style.display="none";
						document.getElementById('forgot').style.display="block";
					
						
  			</script>
  					<?php 
  				}
  			?>
  			<script type="text/javascript">
  				  		function forgot_password()
						{
						document.getElementById('id01').style.display="block";
						document.getElementById('text').style.display="none";
						document.getElementById('text1').style.display="none";
						document.getElementById('forgothide').style.display="none";
						document.getElementById('forgot').style.display="block";
					
						}
  			</script>
  			<script type="text/javascript">
  				function forgotpassword()
  				{
  					var for_email=document.forgot.uname2;
  				var check = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.]{2,8})+\.([A-Za-z]{2,4})$/;
				if(for_email.value=="")
				{
				
				for_email.innerHTML = "<style>#red3::placeholder {color: red; }</style>";
				//email.style.::placeholder.color="red";
				for_email.placeholder="Please Enter Email Address";
				for_email.style.border="1px solid red"
				for_email.focus();
				return false;
				
			}
            //var address = document.getElementById[email].value;
          	else if (check.test(for_email.value) == false) 
            {
            	document.getElementById('forgot_id').innerHTML="Please Enter Valid Email";
				for_email.style.border="1px solid red";
				for_email.focus();
                return false;
            }
            else 
            {
            	for_email.style.border="1px solid black";
            	document.getElementById('forgot_id').innerHTML="";
            }
  		}


  			</script>
  		</div>
  </div>
</div>
<script type="text/javascript">
	$("#password").password('toggle');
</script>
			
		<!--//header-w3l-->
			<!--/banner-info--></div>
		</div>
	</div>

</div>

</body>



<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
	<!-- Dropdown-Menu-JavaScript -->
			<script>
				$(document).ready(function(){
					$(".dropdown").hover(            
						function() {
							$('.dropdown-menu', this).stop( true, true ).slideDown("fast");
							$(this).toggleClass('open');        
						},
						function() {
							$('.dropdown-menu', this).stop( true, true ).slideUp("fast");
							$(this).toggleClass('open');       
						}
					);
				});
			</script>
		<!-- //Dropdown-Menu-JavaScript -->


<script type="text/javascript" src="js/jquery.zoomslider.min.js"></script>
		<!-- search-jQuery -->
				<script src="js/main.js"></script>

<!--/script-->
	<script src="js/simplePlayer.js"></script>
			<script>
				$("document").ready(function() {
					$("#video").simplePlayer();
				});
			</script>
			<!-- flexSlider -->
					<script defer src="js/jquery.flexslider.js"></script>
					<script type="text/javascript">
					$(window).load(function(){
					  $('.flexslider').flexslider({
						animation: "slide",
						start: function(slider){
						  $('body').removeClass('loading');
						}
					  });
					});
				  </script>
<!--//script for portfolio-->
				<!-- Calendar -->
				<link rel="stylesheet" href="css/jquery-ui.css" />
				<script src="js/jquery-ui.js"></script>
				  <script>
						  $(function() {
							$( "#datepicker,#datepicker1,#datepicker2,#datepicker3" ).datepicker();
						  });
				  </script>
			<!-- //Calendar -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>

<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},900);
				});
			});
</script>
 <script type="text/javascript">
						$(document).ready(function() {
							/*
							var defaults = {
					  			containerID: 'toTop', // fading element id
								containerHoverID: 'toTopHover', // fading element hover id
								scrollSpeed: 1200,
								easingType: 'linear' 
					 		};
							*/
							
							$().UItoTop({ easingType: 'easeOutQuart' });
							
						});
					</script>
<!--end-smooth-scrolling-->
<!--js for bootstrap working-->
	<script src="js/bootstrap.js"></script>
<!-- //for bootstrap working -->	


</html>
