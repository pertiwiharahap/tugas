<?php

	include "koneksi.php";
	$no = $_POST['nim'];
	
	if (empty($no)){
		echo "tidak ada data degan nim tersebut!!!!";
	}else{
		
		include "bacanim.php";
		
		if($jumlah > 0 ){
			header("Location:tampil_pengumuman.php?nim=$no");
		}else{
			echo "tidak ada data degan nim tersebut!!!!";
		}
		
	}

?>