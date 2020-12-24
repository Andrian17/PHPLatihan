<?php 

echo date("l, d-m-yy");
// untuk menammpilkan tanggal
echo "<br>";
echo time();
echo "<br>";

echo date("l, d m yy", time()+172000);
echo "<br>";

echo date("l, m d y", mktime(0,0,0,4,5,2001));
echo "<br>";

function waktu($otd, $nama){
	return "Selamat $otd, $nama";

}

echo waktu("Siang", "Andrian");

 ?>