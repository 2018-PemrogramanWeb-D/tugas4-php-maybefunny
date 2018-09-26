<?php
session_start();
$hrs = date('H');

if ($hrs >  6) $msg = "Good morning";
if ($hrs > 11) $msg = "Good afternoon";
if ($hrs > 17) $msg = "Good evening";
if ($hrs > 22) $msg = "Go to bed!";
// Variable To Store Error Message
if (isset($_POST['submit'])) {
	if (empty($_POST['username']) || empty($_POST['password'])) {
		$error = "Username or Password is empty";
	}
	else{
		// Define $username and $password
		$username=$_POST['username'];
		$password=$_POST['password'];
		if ($password=="benar"){
			$_SESSION['login_user']=$username;
			echo '<meta http-equiv="refresh" content="0;url=/index.php">';
		}else{
			$error = "Username or Password is invalid";
		}
	}
}
?>