<?php

include 'koneksi.php';
$id_operatorx = $_GET['id_operator'];
$query = mysqli_query($koneksi, "DELETE FROM operator where id_operator = '$id_operatorx'");
header('Location:1_input_data_operator.php');



?>