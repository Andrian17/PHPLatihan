<?php 

require 'functions.php';

$id = $_GET["id"];

if (hapus($id) > 0 ) {
	echo " <Script>
			alert('Data Berhasil Dihapus');
			document.location.href = 'index.php'
		</script> ";
}else{
	echo " <Script>
			alert('Data Gagal Dihapus');
			document.location.href = 'index.php'
		</script> ";
}

 ?>