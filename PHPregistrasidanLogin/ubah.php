<?php 

require 'functions.php';

$id = $_GET["id"];

var_dump($id);

$mhs = query("SELECT * FROM phplatihan WHERE id = $id")[0];




// query mahasiswa berdasarkan id



if (isset($_POST["ubah"])) {
	if (ubah($_POST) > 0)  {

		echo " <Script>
		alert('Data Berhasil Dikirim');
		document.location.href = 'index.php'
		</script> ";
	}else{
		echo " <Script>
		alert('Data Gagal Dikirim');
		document.location.href = 'index.php'
		</script> ";
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
		nav{
			width: 100%;
			height: 60px;
			background-color: salmon;
		}
		nav li{ 
			margin: 30px;
			display: inline-block;
		}
		li a{
			text-decoration: none;
		}
		a:hover{
			background-color: white;
			color: salmon;
		}
	</style>
</head>
<body>

	<nav>
		<ul>
			<li>
				<a href="permulaan2.php">Home</a>
			</li>
			<li>
				<a href="tambahdata.php">Tambah Data</a>
			</li>
		</ul>
		
	</nav>
	
	<h1>Ubah Data</h1>

	<form action="" method="post" enctype="multipart/form-data">
		<input type="text" name="id" value="<?php echo $mhs["id"]; ?>" hidden>
		<input type="text" name="GambarLama" value="<?php echo $mhs["Gambar"]; ?>" hidden>
		<ul>
			<li>
				Judul
				<input type="text" name="Judul" value="<?php echo $mhs["Judul"]; ?>">
			</li>
			<li>
				Genre
				<input type="text" name="Genre" value="<?php echo $mhs["Genre"]; ?>">
			</li>
			<li>
				Penulis
				<input type="text" name="Penulis" value="<?php echo $mhs["Penulis"]; ?>">
			</li>
			<li>
				Tahun Rilis
				<input type="text" name="TahunRilis" value="<?php echo $mhs["TahunRilis"]; ?>">
			</li>
			<li>
				Gambar
				<img src="img/<?php echo $mhs["Gambar"]; ?>" alt="" width="80px"> 
				<input type="file" name="Gambar"><br>
				
			</li>
			<li>
				<button type="submit" name="ubah">Ubah</button>
			</li>
		</ul>

	</form>


</body>
</html>