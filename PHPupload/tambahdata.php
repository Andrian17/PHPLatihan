<?php 

require 'functions.php';


if (isset($_POST["submit"])) {
	if (tambah($_POST) > 0)  {

		echo " <Script>
		alert('Data Berhasil Dikirim');

		</script> ";
	}else{
		echo " <Script>
		alert('Data Gagal Dikirim');

		</script> ";

	}


	
}
var_dump($_FILES);



?>







<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	
	<h1>Tambah Data</h1>

	<form action="" method="post" enctype="multipart/form-data">
		<ul>
			<li>
				Judul
				<input type="text" name="Judul" required>
			</li>
			<li>
				Genre
				<input type="text" name="Genre" required>
			</li>
			<li>
				Penulis
				<input type="text" name="Penulis" required>
			</li>
			<li>
				Tahun Rilis
				<input type="text" name="TahunRilis" required>
			</li>
			<li>
				Gambar
				<input type="file" name="Gambar" accept="image/*">
			</li>
			<li>
				<button type="submit" name="submit">Kirim</button>
			</li>
		</ul>

	</form>
	
	<a href="permulaan2.php">Home</a>
</body>
</html>