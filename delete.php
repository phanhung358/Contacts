<?php
	include_once 'conn.php';
	$ma = $_GET['ma'];
	$q = "DELETE FROM `danhba` WHERE ma=$ma " ;
	mysqli_query($con,$q);
	header('location:index.php');
 ?>