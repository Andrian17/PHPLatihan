console.log('ok');

var keyboard = document.getElementById('keyboard');
var buttoncari = document.getElementById('button-cari');
var container = document.getElementById('container');
keyboard.addEventListener('keyup', function() {
	
	//buat objek ajax
	var xhr = new XMLHttpRequest();

	xhr.onreadystatechange = function(){
		if ( xhr.readyState == 4 && xhr.status == 200 ) {
			container.innerHTML = xhr.responseText;
		}
	}
//eksekusi ajax
	xhr.open('GET', 'ajax/mahasiswa.php?keyboard=' + keyboard.value, true);
	xhr.send();



})