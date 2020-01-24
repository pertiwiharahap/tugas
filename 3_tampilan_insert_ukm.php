<?php
include "koneksi.php";

$id_ukmx = $_POST['id_ukm'];
$ukmx = $_POST['ukm'];



if (empty($id_ukmx) || empty($ukmx)){

		
}else{
	$query = mysqli_query($koneksi,"insert into ukm values ('$id_ukmx','$ukmx')");
	header ('location:3_tabel_ukm.php');
}


?>