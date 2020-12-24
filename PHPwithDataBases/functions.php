<?php 


$con = mysqli_connect("localhost", "root", "", "db_web_lanjut");

function query($query){
	global $con;

	$result = mysqli_query($con, "SELECT * FROM  prauts");
	$temp = [];
	while ($row = mysqli_fetch_assoc($result)) {
		$temp[] = $row;
			# code...
		}
		return $temp;
}



?>