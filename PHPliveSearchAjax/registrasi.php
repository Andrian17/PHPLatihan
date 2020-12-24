<?php 
session_start();
if (!isset($_SESSION["login"])) {
	header("location: login.php");
	exit;
}
require 'functions.php';

if (isset($_POST["register"])) {
	if ( registrasi($_POST) > 0 ) {
		echo "<script>
		alert('user baru ditambahkan');
		</script>";
	}else{
		echo mysqli_error($con);
	}
}


?>



<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<style>
		label{
			display: block;
		}
	</style>
</head>
<body>
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
				<label for="">Konfirmasi Password</label>
				<input type="password" name="password2">
			</li>
			<li>
				<button type="submit" name="register">SUBMIt</button>
			</li>
		</ul>
		

	</form>
</body>
</html>