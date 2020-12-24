<?php

require '../functions.php';

$keyboard = $_GET["keyboard"];
$query = "SELECT * FROM phplatihan WHERE
	Judul LIKE '%$keyboard%' OR
	Penulis LIKE '%$keyboard%' OR
	TahunRilis LIKE '%$keyboard%' OR
	Genre LIKE '%$keyboard%'
	";
$mahasiswa = query($query);


?>


<table border="1" cellpadding="10" cellspacing="0">
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