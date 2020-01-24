<?php

include 'koneksi.php';
$id_ukm = $_GET['id_ukm'];
$query =mysqli_query($koneksi,"SELECT * FROM ukm where id_ukm='$id_ukm'");
$m = mysqli_fetch_array($query);
?>


<form method="POST" action="3_update_ukm.php">
<p> ID UKM:<input type="text" name="id_ukm" value="<?php echo $m['id_ukm']; ?>"></p>
<p> UKM :<input type="text" name="ukm" value="<?php echo $m['ukm']; ?>"></p>

			
<input type="submit" name="submit" value="UPDATE">

</form>

