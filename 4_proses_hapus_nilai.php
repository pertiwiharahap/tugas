<?php

include 'koneksi.php';
$id_nilaix = $_GET['id_nilai'];
$query = mysqli_query($koneksi, "DELETE FROM nilai where id_nilai = '$id_nilaix'");
header('Location:4_input_nilai_ukm.php');



?>