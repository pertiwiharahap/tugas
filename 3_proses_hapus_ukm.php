<?php

include 'koneksi.php';
$id_ukm = $_GET['id_ukm'];
$query = mysqli_query($koneksi, "DELETE FROM ukm where id_ukm = '$id_ukm'");
header('Location:3_tabel_ukm.php');



?>