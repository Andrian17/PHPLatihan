<?php 

$con = mysqli_connect("localhost", "root", "", "db_web_lanjut");
$result = mysqli_query($con, "SELECT * FROM  prauts");
//var_dump($result);
// $see = mysqli_fetch_row($result); // array numerik
//var_dump($see[2]);

// $see = mysqli_fetch_assoc($result); //array assosiatif
// var_dump($see["Judul"]);

// $see = mysqli_fetch_array($result); //array gabungan dari numerik dan assosiatif dan data nya dobel
// var_dump($see["Genre"]);
// var_dump($see[4]);

// $see = mysqli_fetch_object($result);
// var_dump($see->Judul);


// //menampilkkan semua data
// while ($see = mysqli_fetch_assoc($result)) {
// 	var_dump($see);
// } 




?>











<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<table border="1" cellpadding="10" cellspacing="0">
		<tr>
			<td>No</td>
			<td>Judul</td>
			<td>Genre</td>
			<td>Penulis</td>
			<td>Tahun Rilis</td>
			<td>aksi</td>
		</tr>
		<?php $no = 1; ?>
		<?php while ($row = mysqli_fetch_assoc($result)) : ?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $row["Judul"] ?></td>
				<td><?php echo $row["Genre"] ?></td>
				<td><?php echo $row["Penulis"] ?></td>
				<td><?php echo $row["TahunRilis"] ?></td>
				<td><a href="">Hapus</a> | <a href="">Update</a></td>
			</tr>
		<?php	endwhile; ?>
		
	</table>
</body>
</html>