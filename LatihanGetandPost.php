<?php 

if (!isset($_GET["nama"])||
	!isset($_GET["alamat"])||
	!isset($_GET["pekerjaan"])
) {
	header("Location: GetandPost.php");
	exit;
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
	<ul>
		<li>Nama :<?php echo $_GET["nama"]; ?></li>
		<li>Alamat : <?php echo $_GET["alamat"]; ?></li>
		<li>Pekerjaan : <?php echo $_GET["pekerjaan"]; ?></li>
	</ul>
	<a href="GetandPost.php">Home</a>
</body>
</html>