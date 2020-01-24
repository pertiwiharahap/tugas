<?php

include "koneksi.php";
	$query = mysqli_query($koneksi,"select * from nilai");
	while ($m = mysqli_fetch_array($query)){


	}	
?>

<h3>Data Nilai Ujian Mahasiswa yang Mengikuti Ujian LCC</h3>
<a href = "4_insert_nilai.php"> tambahkan data </a>
<table width="" border=1>
<?php

	echo "<tr>
	<th>NO</th>
	<th>ID_nilai</th>
	<th>NIM</th>
	<th>nilai_ujian</th>
	<th>tanggal_ujian</th>
	<th>ukm</th>
	<th>keterangan</th>
	<th>Pilihan</th>
	</tr>";

?>
<?php

$i = 0;
$query = mysqli_query ($koneksi, "select * from nilai order by id_nilai asc");
while ($m = mysqli_fetch_array($query)){
	
	$i++;
	



?>
<tr>
<td><?php print $i; ?> </td>
<td><?php print $m['id_nilai']; ?> </td>
<td><?php print $m['NIM']; ?> </td>
<td><?php print $m['nilai_ujian']; ?> </td>
<td><?php print $m['taggal_ujian']; ?> </td>
<td><?php print $m['ukm']; ?> </td>
<td><?php print $m['keterangan']; ?></td>


<td><a href = "4_tampilan_edit_nilai.php?id_nilai=<?php echo $m['id_nilai']; ?>">Edit</a> | <a href="4_proses_hapus_nilai.php?id_nilai=<?php echo $m['id_nilai']; ?>">Hapus</a> </td>
</tr>

<?php
}
?>



</table>
<a href = "indenx1.php">kembali</a>

