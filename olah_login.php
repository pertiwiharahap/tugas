<?php


SESSION_START();

include 'koneksi.php';

if(empty($_POST['status']) && empty($_POST['password'])){
	echo "Masukkan Username Dan Password";
}else{

$id_operatorx = $_POST['id_operator'];
$passwordx = $_POST['password'];
$statusx = $_POST['status'];


$query = mysqli_query($koneksi,"select * from operator where id_operator= '$id_operatorx' and password = '$passwordx'");
while ($m = mysqli_fetch_array($query)){

	if ($id_operatorx ==$m['id_operator'] && $passwordx ==$m['password'] && $statusx ==$m['status']){
	$_SESSION['id_operator']=  $m['id_operator'];	
	$_SESSION['status'] = $m['status'];
	$_SESSION['password']=$m['password'];
	
	if ($_SESSION['status'] == "admin"){
		header('location:1_input_data_operator.php');
	}
	
else{
	header('location:indenx1.php');
}

}else{

	echo "login gagal";
	session_destroy();
}

}
}
?>