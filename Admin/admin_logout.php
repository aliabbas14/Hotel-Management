<?php
session_start();
if(isset($_SESSION['A_login']))
{
	session_unset('A_login');
	header(	'Location:admin_login.php');
}



?>