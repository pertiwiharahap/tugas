<?php
$namaserver = "localhost";
$namadatabase = "tugas_project";
$username = "root";
$password = "";



$koneksi = mysqli_connect($namaserver, $username, $password, $namadatabase);

if(!$koneksi){
	die ("koneksi gagal: ". mysqli_connect_error());
	
}
else{
	
	
}


?>