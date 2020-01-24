<?php

include 'koneksi.php';
$id_operatorx = $_GET['id_operator'];
$query =mysqli_query($koneksi,"SELECT * FROM operator where id_operator='$id_operatorx'");
$m = mysqli_fetch_array($query);
?>


<form method="POST" action="1_update_operator.php">
<p> ID Operator:<input type="text" name="id_operator" value="<?php echo $m['id_operator']; ?>"></p>
<p> Nama Operator :<input type="text" name="nama_operator" value="<?php echo $m['nama_operator']; ?>"></p>
<p>Status :<input type="text" name="status" value="<?php echo $m['status']; ?>"></p>
<p>Username :<input type="text" name="username" value="<?php echo $m['username']; ?>"></p>
<p>Password :<input type="text" name="password" value="<?php echo $m['password']; ?>"></p>

			
<input type="submit" name="submit" value="UPDATE">

</form>

