<?php

include 'koneksi.php';
$id_nilaix = $_GET['id_nilai'];
$query =mysqli_query($koneksi,"SELECT * FROM nilai where id_nilai='$id_nilaix'");
$m = mysqli_fetch_array($query);
?>


<form method="POST" action="4_update_nilai.php">
<p> ID Nilai:<input type="text" name="id_nilai" value="<?php echo $m['id_nilai']; ?>"></p>
<p> NIM :<input type="text" name="NIM" value="<?php echo $m['NIM']; ?>"></p>
<p>Nilai Ujian :<input type="text" name="nilai_ujian" value="<?php echo $m['nilai_ujian']; ?>"></p>
<p>Tanggal Ujian :<input type="date" name="taggal_ujian" value="<?php echo $m['taggal_ujian']; ?>"></p>
<p>UKM :<input type="text" name="ukm" value="<?php echo $m['ukm']; ?>"></p>
<p>Keterangan :<input type="text" name="keterangan" value="<?php echo $m['keterangan']; ?>"></p>

			
<input type="submit" name="submit" value="UPDATE">

</form>

