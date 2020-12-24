<?php 
session_start();

if (isset($_SESSION["login"])) {
	header("location: index.php");
	exit;
}

require 'functions.php';

if (isset($_POST["login"])) {

	$username = $_POST["username"];
	$password = $_POST["password"];
	$result = mysqli_query($con, "SELECT * FROM userlogin WHERE username = '$username' ");
	if (mysqli_num_rows($result) === 1) {
		//cek password

		$row = mysqli_fetch_assoc($result);

		if (password_verify($password, $row["password"])) {
			//set session
			$_SESSION["login"] = true;

			//set cookie
			if (isset($_POST["remember"])) {
				setcookie('login', 'true', time() + 60);
			}

			header("Location: index.php");
			exit;
		}

	}
	$error = true;
}


?>



<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<style>
		li{
			display: block;
		}
	</style>
</head>
<body>

	<?php if ( isset($error) )   : ?>
		<p style="color: red; font-style: italic;">Username atau password salah..!!</p>
	<?php endif; ?>
	<h1>Login Here</h1>
	
	<form action="" method="post">
		<ul>
			<li>
				<label for="">Username</label>
				<input type="text" name="username">
			</li>
			<li>
				<label for="">Password</label>
				<input type="password" name="password">
			</li>
			<li>
				<input type="checkbox" name="remember">
				<label for="">Remember Me</label>
			</li>
			<li>
				<button type="submit" name="login">
					Login
				</button>
			</li>
		</ul>
	</form>
</body>
</html>