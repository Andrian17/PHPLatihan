console.log('hello');
$(document).ready(function () {
	
	/* body... */
	//hide tombol cari
	$('#btnsearch').hide();

	$('#keyboard').on('keyup', function () {
		/* body... */
		$('loader').show();
		//load 
		$('#container').load('ajax/mahasiswa.php?keyboard='+ $('#keyboard').val());

	});

});