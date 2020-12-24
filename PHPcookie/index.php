<?php 

session_start();
if (!isset($_SESSION["login"])) {
	header("location: login.php");
	exit;
}


require 'functions.php';

$mahasiswa = query("SELECT * FROM phplatihan");

if (isset($_POST["cari"])) {
	$mahasiswa = cari($_POST["keyboard"]);																							
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<style type="text/css">
		nav{
			background-color: salmon;
		}
		li{
			display: inline-block;
			margin: 20px;

		}
	</style>
</head>
<body>
	<table border="1" cellpadding="10" cellspacing="0">
		<nav>
			<ul>
				<li><a href="tambahdata.php">Tambah Data</a></li>
				<li>B</li>
				<li>C</li>
			</ul>
		</nav>

		<br>
		<br>
		<form action="" method="post">
			<input type="text" name="keyboard" size="40" autofocus placeholder="cari disini" autocomplete="off">
			<button type="submit" name="cari">Cari</button>	
			
		</form>
		<br><br>


		<tr>
			<td>No</td>
			<td>Judul</td>
			<td>Genre</td>
			<td>Penulis</td>
			<td>Tahun Rilis</td>
			<td>Gambar</td>
			<td>aksi</td>
		</tr>
		<?php $no = 1; ?>
		<?php foreach ($mahasiswa as $row) : ?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $row["Judul"]; ?></td>
				<td><?php echo $row["Genre"]; ?></td>
				<td><?php echo $row["Penulis"]; ?></td>
				<td><?php echo $row["TahunRilis"]; ?></td>
				<td><img src="img/<?php echo $row["Gambar"]; ?>" alt="" width="100px" heigth="80px"></td>
				<td><a href="Hapus.php?id=<?php echo $row["id"]; ?>" onclick = "return confirm('Yakin?');">Hapus</a> | <a href="ubah.php?id=<?php echo $row["id"]; ?>">Update</a></td>
			</tr>
		<?php endforeach; ?>
		
	</table>

		<p>
			<a href="logout.php">Logout</a>
		</p>
</body>
</html>