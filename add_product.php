<?php
session_start();
require('config.php');

$category=$_POST['category'];
$name=$_POST['name'];
$sellingprice=$_POST['sellingprice'];
$quantity=$_POST['quantity'];




	$register="INSERT INTO product(category,name,sellingprice,quantity) VALUES('$category','$name','$sellingprice','$quantity')" or die("error".mysqli_errno($db_link));
	$result=mysqli_query($db_link,$register);
		header('location:Product.php');

mysqli_close($db_link);
?>
