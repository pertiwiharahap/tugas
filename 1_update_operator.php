<?php

include ("koneksi.php");


$id_operatorx = $_POST['id_operator'];
$nama_operatorx = $_POST['nama_operator'];
$statusx = $_POST['status'];
$usernamex = $_POST['username'];
$passwordx = $_POST['password'];

if (empty($id_operatorx) || empty($nama_operatorx) || empty($statusx) || empty($usernamex) || empty($passwordx)){

}else{

		$query = mysqli_query($koneksi,"Update operator set id_operator = '$id_operatorx', nama_operator = '$nama_operatorx', status= '$statusx', username= '$usernamex', password='$passwordx' where id_operator= '$id_operatorx'");

		header('Location:1_input_data_operator.php');

	}





?>
