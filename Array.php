<?php 

$hari = ["senin", "selasa", "rabu", "Kamis"];
// echo $hari[1];;

for ($i=0; $i<count($hari) ; $i++) { 
	echo "<br> $hari[$i]";
	echo "<br>";
}

 ?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1.0">
 	<title>Document</title>
 	<style type="text/css">
 		div{
 			margin: 5px;
 			background-color: salmon;
 			width: 100px;
 			height: 100px;
 			text-align: center;
 			float: left;
 		}
 	</style>
 </head>
 <body>
<?php $no = 1 ?>
<?php foreach ($hari as $key) { ?>
	<div><?php echo $key ?></div>
	
<?php } ?>

<?php foreach ($hari as $h) : ?>
	<div><?php echo "$h"; ?></div>

<?php endforeach; ?>
 	
 	
 </body>
 </html>