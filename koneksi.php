<?php 
$servername     = "10.12.12.104";
$user		= "apps";
$pasword	= "bismillah";
$db		= "apps1";
$port		= "6033";

$koneksi = mysqli_connect($servername.':'.$port,$user, $pasword)
			or die('gagal terkoneksi'.mysqli_error());
			
$database = mysqli_select_db($koneksi, $db)
			or die('gagal terhubung ke database'.mysqli_error());

function show_status($status) {
	if($status==1){
		return "Aktif";
	} elseif($status==2) {
		return "Tidak Aktif";
	} else {
		return "-";
	}
}
?>
