<?php 


$con = mysqli_connect("localhost", "root", "", "db_web_lanjut");

function query($query){
	global $con;

	$result = mysqli_query($con, $query);
	$temp = [];
	while ($row = mysqli_fetch_assoc($result)) {
		$temp[] = $row;
			# code...
	}
	return $temp;
}

function tambah($data){
	global $con;
	$Judul = htmlspecialchars($data["Judul"]);
	$Genre = htmlspecialchars($data["Genre"]);
	$Penulis = htmlspecialchars($data["Penulis"]);
	$TahunRilis = htmlspecialchars($data["TahunRilis"]);
	$Gambar = htmlspecialchars($data["Gambar"]);

	$query = "INSERT INTO phplatihan VALUES 
	('', '$Judul', '$Genre', '$Penulis', '$TahunRilis', '$Gambar')";

	mysqli_query($con, $query);

	return mysqli_affected_rows($con);

}

function hapus($id){
	global $con;
	mysqli_query($con, "DELETE FROM phplatihan WHERE id = $id");
	return mysqli_affected_rows($con);

}


function ubah($data){

	global $con;
	$id = $data["id"];
	$Judul = htmlspecialchars($data["Judul"]);
	$Genre = htmlspecialchars($data["Genre"]);
	$Penulis = htmlspecialchars($data["Penulis"]);
	$TahunRilis = htmlspecialchars($data["TahunRilis"]);
	$Gambar = htmlspecialchars($data["Gambar"]);

	$query = "UPDATE phplatihan SET 
	Judul = '$Judul',
	 Genre =  '$Genre', 
	 Penulis = '$Penulis',
	 TahunRilis = '$TahunRilis', 
	 Gambar = '$Gambar'
	 WHERE id = $id
	 ";

	mysqli_query($con, $query);

	return mysqli_affected_rows($con);

}



function cari($keyboard){
	$temp2 = "SELECT * FROM phplatihan WHERE
	Judul LIKE '%$keyboard%' OR
	Penulis LIKE '%$keyboard%' OR
	TahunRilis LIKE '%$keyboard%' OR
	Genre LIKE '%$keyboard%'
	";
	return query($temp2);
}




?>