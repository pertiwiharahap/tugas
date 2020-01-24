<?php

include ("koneksi.php");


$id_operatorx = $_POST['id_operator'];
$nama_operatorx = $_POST['nama_operator'];
$statusx = $_POST['status'];
$usernamex = $_POST['username'];
$passwordx = $_POST['password'];

if (empty($id_operatorx) || empty($nama_operatorx) || empty($statusx) || empty($usernamex) || empty($passwordx)){

}else{

		$query = mysqli_query($koneksi,"insert into operator values('$id_operatorx','$nama_operatorx','$statusx','$usernamex','$passwordx')");

		header('Location:1_input_data_operator.php');

	}





?>
