<?php
session_start();
require('config.php');

$name=$_POST['name'];
$address=$_POST['address'];
$contact=$_POST['contact'];


	$register="INSERT INTO customer(name,address,contact) VALUES('$name','$address','$contact')" or die("error".mysqli_errno($db_link));
	$result=mysqli_query($db_link,$register);
		header('location:Customer1.php');

mysqli_close($db_link);
?>
