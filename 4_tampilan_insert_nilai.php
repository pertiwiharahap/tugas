<?php

include ("koneksi.php");


$id_nilaix = $_POST['id_nilai'];
$NIMx = $_POST['NIM'];
$nilai_ujianx = $_POST['nilai_ujian'];
$tanggal_ujianx = $_POST['taggal_ujian'];
$ukmx = $_POST['ukm'];
$keteranganx = $_POST['keterangan'];

if (empty($id_nilaix) || empty($NIMx) || empty($nilai_ujianx) || empty($tanggal_ujianx) || empty($ukmx) || empty($keteranganx)){

}else{

		$query = mysqli_query($koneksi,"insert into nilai values('$id_nilaix','$NIMx','$nilai_ujianx','$tanggal_ujianx','$ukmx','$keteranganx')");

		header('Location:4_input_nilai_ukm.php');

	}





?>
