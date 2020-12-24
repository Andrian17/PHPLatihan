<?php 

require 'functions.php';

$mahasiswa = query("SELECT * FROM phplatihan");

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
				<td><?php echo $row["Gambar"]; ?></td>
				<td><a href="Hapus.php?id=<?php echo $row["id"]; ?>" onclick = "return confirm('Yakin?');">Hapus</a> | <a href="">Update</a></td>
			</tr>
		<?php endforeach; ?>
		
	</table>
</body>
</html>