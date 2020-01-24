<?php
session_start();
?>

<html>
<head><title> Session Om</title></head>
<body>
<h3>Apakah Session Masih Aktif?</h3>
<?php
echo "Nama: ". $_SESSION['nama_operator']."<br>";
echo "status ". $_SESSION['status']."<br>";

if (!empty($_SESSION['nama_operator'])){
	
?>
<h5> Session Aktif</h5>
<?php } else { ?>
<h5> ERORRRR !!!!Session Telah Dihapus</h5>
<?php } ?>

<a href="session3.php"> HANCURKAN SESSION!!!!</a>

</body>
</html>



