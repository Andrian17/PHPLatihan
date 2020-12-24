<?php

require_once __DIR__ . '/vendor/autoload.php';

require 'functions.php';

$mahasiswa = query("SELECT * FROM phplatihan");

$html = '<!DOCTYPE html>
	<html lang="en">
	<head>
	<meta charset="UTF-8">
	<title>Document</title>
	</head>
	<body>
		<h1>list Anime<h1>
		<table border="1" cellpadding="10" cellspacing="0">
		<br>
		<tr>
			<td>No</td>
			<td>Judul</td>
			<td>Genre</td>
			<td>Penulis</td>
			<td>Tahun Rilis</td>
			<td>Gambar</td>
		</tr>';
$i = 1;
		foreach ($mahasiswa as $key) {
			$html .= '<tr>
				<td>'. $i++ .'</td>
				<td>'. $key["Judul"] .'</td>
				<td>'. $key["Genre"] .'</td>
				<td>'. $key["Penulis"] .'</td>
				<td>'. $key["TahunRilis"] .'</td>
				<td><img src="img/'. $key["Gambar"].'" width="80px" height="80px">' .'</td>
				</tr>
				';
		}



$html .='</table>
	</body>
	</html>';



$mpdf = new \Mpdf\Mpdf();
$mpdf->WriteHTML($html);
	
$mpdf->Output();
