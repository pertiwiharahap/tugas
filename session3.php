<html lang ="en">

<?php

session_start();
session_destroy();


if ($_SESSION['status']=="operator") {
	$sembunyi = "Hidden";
} else{
	$sembunyi ="";


}






?>