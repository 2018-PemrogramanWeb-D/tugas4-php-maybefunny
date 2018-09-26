<?php
	include("./login.php");
?>
<!DOCTYPE html>
    <html lang="en">
    <head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		<link rel="stylesheet" href="style.css">
		<title>Login</title>
	</head>
	<body>
		<?php 
            if(isset($_SESSION['login_user'])){ //tampilkan menu jika sudah log in
				echo "<div id='login-form'><h1 id='title'> welcome, ".$_SESSION['login_user'].".</h1>
				<p id='title'>".$msg."</p><a id='title' href='/logout.php'>logout</a>
				</div>";
            }else{
				echo "<div id='login-form'><h1 id='title'> welcome, GUEST.</h1>";
				echo'<p id="title">please <a href="/login-page.php">LOGIN</a></p>';
			}
		?>
	</body>

	</html>