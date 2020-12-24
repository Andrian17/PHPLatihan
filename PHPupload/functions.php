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

	
	$Gambar = upload();


	if (!$Gambar) {
		# code...
		return false;
	}

	//upload gambar


	
	


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

	$GambarLama = htmlspecialchars($data["GambarLama"]);
//cek pilih gambar baru atau tidak
	if ( $_FILES['Gambar']['error'] === 4) {
		# code...
		$Gambar = $GambarLama;
	}else{
		$Gambar = upload();
	}

	//$Gambar = htmlspecialchars($data["Gambar"]);

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

function upload(){
	$namafile = $_FILES["Gambar"]["name"];
	$tmpname = $_FILES["Gambar"]["tmp_name"];
	$errorfile = $_FILES["Gambar"]["error"];
	$ukuranImg = $_FILES["Gambar"]["size"];

	//mengecek apakah gambar belum diupload
	if ($errorfile === 4) {
		echo "<script>
		alert('mohon untuk meng-upload dahulu gambar');
		</script>";
		return false;
	}

	//cek yang di upload adalah gambar
	$ekstensiimgvalid = ['jpg', 'jgeg', 'png'];
	$extensigambar = explode('.', $namafile);
	$extensigambar = strtolower(end($extensigambar));
	if ( !in_array($extensigambar, $ekstensiimgvalid) ) {
		# code...
		echo "<script>
		alert('yang anda upload bukan gambar');
		</script>";
		return false;
	}

	if ($ukuranImg > 2400000) {
		echo "<script>
		alert('gambar oversize');
		</script>";
		return false;
	}

	//generate file baru
	$newnamefile = uniqid();
	$newnamefile .= '.';
	$newnamefile .= $extensigambar;

	//lokasi file
	move_uploaded_file($tmpname, 'img/' . $newnamefile);
	return $newnamefile;

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