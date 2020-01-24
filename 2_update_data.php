<?php


include "koneksi.php";

$Nimx = $_POST['NIM'];
$Namax = $_POST['nama_lengkap'];
$Jurusanx = $_POST['jurusan'];
$jenis_kelaminx= $_POST['jk'];
$Nox = $_POST['no_hp'];
$Emailx = $_POST['email'];
$Alamatx = $_POST['alamat_tinggal'];
$Agamax = $_POST['agama'];
$Passwordx = $_POST['password'];
$Usernamex= $_POST['username'];

if (empty($Nimx) || empty($Namax) || empty($Jurusanx) || empty($jenis_kelaminx) || empty($Nox) || empty($Emailx) || empty($Alamatx) || empty($Agamax) || empty($Passwordx) || empty ($Usernamex)){

}else{

		$query = mysqli_query($koneksi,"Update mahasiswa set NIM = '$Nimx', nama_lengkap = '$Namax', jurusan = '$Jurusanx', jk= '$jenis_kelaminx', no_hp= '$Nox', email= '$Emailx', alamat_tinggal= '$Alamatx', agama= '$Agamax', password= '$Passwordx', username= '$Usernamex' where NIM = '$Nimx'");

		header('Location:2_input_data_mahasiswa.php');

	}





?>