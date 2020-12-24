<?php 

$x= 10;

function hitung(){
	global $x;
	echo $x;

}

hitung();


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
 		<?php foreach ($mahasiswa as $key): ?>
 			<li>
 				<a href="LatihanGetandPost.php?nama=<?php echo $key["nama"]; ?>&alamat=<?php echo $key["alamat"]; ?>&pekerjaan=<?php echo $key["pekerjaan"]; ?>"><?php echo $key["nama"]; ?> 
 				</a>
 			</li>
 		<?php endforeach ?>


 	</ul>


 </body>
 </html>