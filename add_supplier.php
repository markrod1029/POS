<?php
session_start();
require('config.php');

$name=$_POST['name'];
$person=$_POST['person'];
$address=$_POST['address'];
$contact=$_POST['contact'];


	$register="INSERT INTO supplier(name,person,address,contact) VALUES('$name','$person','$address','$contact')" or die("error".mysqli_errno($db_link));
	$result=mysqli_query($db_link,$register);
		header('location:Supplier.php');

mysqli_close($db_link);
?>
