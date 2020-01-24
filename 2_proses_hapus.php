<?php

include 'koneksi.php';
$NIM = $_GET['NIM'];
$query = mysqli_query($koneksi, "DELETE FROM mahasiswa where NIM = '$NIM'");
header('Location:2_input_data_mahasiswa.php');



?>