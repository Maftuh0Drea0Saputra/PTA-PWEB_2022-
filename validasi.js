function validasi() {
	var nama = document.getElementById("nama").value;
	var email = document.getElementById("email").value;
	var alamat = document.getElementById("alamat").value;
	var pass = document.getElementById('password').value;
	var jenis_kelamin = document.getElementsByName('jenis_kelamin');
	var jkValue = false;

	for(var i=0; i<jenis_kelamin.length;i++){
		if(jenis_kelamin[i].checked == true){
			jkValue = true;    
		}
	}
	if (nama != "" && email!="" && alamat !="" && pass !="" && jkValue !="" && nama == pass) {
		alert('Data sudah di submit !');
		return true;
	}else{
		alert('Anda harus mengisi data dengan lengkap !');
	}
}