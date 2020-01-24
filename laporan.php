<?php

	$query=mysqli_query($koneksi,"select mahasiswa.`NIM`,mahasiswa.`jurusan`,nilai.`nilai_ujian`,nilai.`taggal_ujian`,ukm.`ukm`,nilai.`keterangan`,ukm.`ukm` from nilai inner join  mahasiswa,ukm where mahasiswa.`NIM` = nilai.`NIM` AND ukm.`id_ukm` and nilai.`NIM` = '$nim'");
	

?>