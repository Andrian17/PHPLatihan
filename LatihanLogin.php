<?php 
	//jika tombol login ditekan
if (isset($_POST["verivikasi"])) {
	if ($_POST["user"] == "Andrian" && $_POST["password1"] == "123") {
		header("Location: Admin.php");
		exit;
	}else{
		$salah = true;
	}
}

?>





<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>

	<?php if ( isset($salah) ) : ?>

		<h2 style="color: red; font-style: italic;">User atau Password error</h2>
		
	<?php endif; ?>
	
	
	<form action="" method="post">
		<ul>
			<li>
				<label for="user">Username</label>
				<input type="text" name="user" id="user">
			</li>
			<li>
				<label for="password1">Password</label>
				<input type="password" name="password1" id="password1">
			</li>
			<li>
				<button type="text" name="verivikasi">Login</button>
			</li>
		</ul>

	</form>



</body>
</html>