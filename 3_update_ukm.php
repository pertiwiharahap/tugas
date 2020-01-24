<?php
include "koneksi.php";

$id_ukmx = $_POST['id_ukm'];
$ukmx = $_POST['ukm'];



if (empty($id_ukmx) || empty($ukmx)){

		
}else{
	$query = mysqli_query($koneksi,"Update ukm set id_ukm = '$id_ukmx',ukm='$ukmx' where id_ukm = '$id_ukmx'");
	
	header ('location:3_tabel_ukm.php');
}


?>