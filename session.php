<?php
session_start ();

$_SESSION['nama_operator'] = "Pertiwi harahap";
$_SESSION['status'] = "admin";

?>

<html>
<head><title>Session Om</title></head>
<body>
<?php
 echo "Nama: " .$_SESSION['nama_operator']."<br>";
 echo "Status: " .$_SESSION['status']."<br>";
 



?>
<br>
<br>
<a href="session2.php">CEK SESSION AKTIF </a>
</body>
</html>
