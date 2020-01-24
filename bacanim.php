<?php

	$query = mysqli_query($koneksi,"select * from nilai where NIM = '$no'");
	$jumlah = mysqli_num_rows($query);

?>