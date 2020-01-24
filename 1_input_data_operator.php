<?php
session_start();
session_destroy();


if ($_SESSION['status']=="operator") {
	$sembunyi = "Hidden";
} else{
	$sembunyi ="";


}
include "koneksi.php";
	$query = mysqli_query($koneksi,"select * from operator");
	while ($m = mysqli_fetch_array($query)){


	}	
?>

<h3> Data Operator</h3>
<a href = "1_insert_operator.php"> tambahkan data </a>
<table width="" border=1>
<?php

	echo "<tr>
	<th>NO</th>
	<th>ID_Operator</th>
	<th>Nama Operator</th>
	<th>Status</th>
	<th>Username</th>
	<th>Password</th>
	<th>Pilihan</th>
	</tr>";

?>
<?php

$i = 0;
$query = mysqli_query ($koneksi, "select * from operator order by id_operator asc");
while ($m = mysqli_fetch_array($query)){
	
	$i++;
	



?>
<tr>
<td><?php print $i; ?> </td>
<td><?php print $m['id_operator']; ?> </td>
<td><?php print $m['nama_operator']; ?> </td>
<td><?php print $m['status']; ?> </td>
<td><?php print $m['username']; ?> </td>
<td><?php print $m['password']; ?> </td>


<td><a href = "1_tampilan_edit_operator.php?id_operator=<?php echo $m['id_operator']; ?>">Edit</a> | <a href="1_proses_hapus_operator.php?id_operator=<?php echo $m['id_operator']; ?>">Hapus</a></td>
</tr>

<?php
}
?>



</table>
<a href = "http://localhost/TheEvent/TheEvent/index.php">kembali</a>

