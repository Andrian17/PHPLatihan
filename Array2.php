<?php 
$mahasiswa = [
	["Andrian", "Rasalewi", "Kuliah"],
	["Jihan", "Sarita", "Kuliah"],
	["Yusnain", "Pane", "Kerja"]
];


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
	<?php foreach ($mahasiswa as $mhs) : ?>
		<li><?php echo $mhs[0]; ?></li>
		<li><?php echo $mhs[1]; ?></li>
		<li><?php echo $mhs[2]; ?></li>
		<br>
	<?php endforeach; ?>
	<br>
	</ul>
</body>
</html>