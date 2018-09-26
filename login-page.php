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
				echo '<meta http-equiv="refresh" content="0;url=/index.php">';
            }else{
				echo'
				<h2 id="title">Please Login</h1>
				<div id="login-form">
					<span id="error">'.$error.'</span>
					<form action="" method="POST">
						<div class="form-group">
							<label for="username">Username</label>
							<input type="text" class="form-control" name="username" aria-describedby="emailHelp" placeholder="Enter username">
						</div>
						<div class="form-group">
							<label for="password">Password</label>
							<input type="password" class="form-control" name="password" placeholder="Password">
						</div>	
						<button type="submit" name="submit" class="btn btn-primary">Login</button>
					</form>
				</div>';
			}
		?>
	</body>
	</html>