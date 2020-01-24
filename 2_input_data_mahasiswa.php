<?php



include "koneksi.php";
	$query = mysqli_query($koneksi,"select * from mahasiswa");
	while ($m = mysqli_fetch_array($query)){
		
		
	}	



?>


<h3> Data Mahasiswa</h3>
<a href = "2_insert.php"> tambahkan data </a>
<table width="" border=1>
<?php

	echo "<tr>
	<th>NO</th>
	<th>NIM</th>
	<th>Nama lengkap</th>
	<th>jurusan</th>
	<th>jk</th>
	<th>no_hp</th>
	<th>email</th>
	<th>alamat tinggal</th>
	<th>agama</th>
	<th>password</th>
	<th>username</th>
	<th>Pilihan</th>
	</tr>";

?>
<?php

$i = 0;
$query = mysqli_query ($koneksi, "select * from mahasiswa order by NIM asc");
while ($m = mysqli_fetch_array($query)){
	
	$i++;
	



?>
<tr>
<td><?php print $i; ?> </td>
<td><?php print $m['NIM']; ?> </td>
<td><?php print $m['nama_lengkap']; ?> </td>
<td><?php print $m['jurusan']; ?> </td>
<td><?php print $m['jk']; ?> </td>
<td><?php print $m['no_hp']; ?> </td>
<td><?php print $m['email'];?> </td>
<td><?php print $m['alamat_tinggal']; ?> </td> 
<td><?php print $m['agama']; ?> </td>
<td><?php print $m['password']; ?> </td>
<td><?php print $m['username']; ?> </td>

<td><a href = "2_tampilan.php?NIM=<?php echo $m['NIM']; ?>">Edit</a> | <a href="2_proses_hapus.php?NIM=<?php echo $m['NIM']; ?>">Hapus</a></td>
</tr>
<?php
}
?>



</table>
<a href = "indenx1.php">kembali</a>

