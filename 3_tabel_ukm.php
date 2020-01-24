<?php

include "koneksi.php";
	$query = mysqli_query($koneksi,"select * from ukm");
	while ($m = mysqli_fetch_array($query)){


	}	
?>

<h3>Table UKM</h3>
<a href = "3_insert_ukm.php"> tambahkan data </a>
<table width="" border=1>
<?php

	echo "<tr>
	<th>NO</th>
	<th>ID_ukm</th>
	<th>ukm</th>
	<th>Pilihan</th>
	</tr>";

?>
<?php

$i = 0;
$query = mysqli_query ($koneksi, "select * from ukm order by id_ukm asc");
while ($m = mysqli_fetch_array($query)){
	
	$i++;
	



?>
<tr>
<td><?php print $i; ?> </td>
<td><?php print $m['id_ukm']; ?> </td>
<td><?php print $m['ukm']; ?> </td>


<td><a href = "3_tampilan_edit_ukm.php?id_ukm=<?php echo $m['id_ukm']; ?>">Edit</a> | <a href="3_proses_hapus_ukm.php?id_ukm=<?php echo $m['id_ukm']; ?>">Hapus</a></td>
</tr>

<?php
}
?>



</table>
 <a href = "indenx1.php">kembali</a>

