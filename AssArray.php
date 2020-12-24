<?php 

$angka = [
	[1,2,3], [3,4,5], [6,7,8]
];

for ($i=0; $i <count($angka) ; $i++) { 
	for ($j=0; $j < count($angka) ; $j++) { 
		echo $angka[$i][$j];
		echo "<br>";
	}
}

//echo $angka[1][1];

$mahasiswa = [
	[
		"nama"=>"Andrian",
		"alamat"=>"Rasalewi",
		"pekerjaan"=>"Kuliah",
	],
	[
		"nama"=>"Jihan",
		"alamat"=>"Sarita", 
		"pekerjaan"=>"Kuliah"
	],
	[
		"nama"=>"Yusnain",
		"alamat"=>"Pane",
		"pekerjaan"=>"Kerja",
	]
];



echo $mahasiswa[1]["alamat"];

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
		<?php foreach ($mahasiswa as $key) : ?>
			<li>Nama : <?php echo $key["nama"]; ?></li>
			<li>Alamat : <?php echo $key["alamat"]; ?></li>
			<li>Email : <?php echo $key["pekerjaan"]; ?></li>
			<br>
		<?php endforeach; ?>
		
	</ul>


</body>
</html>